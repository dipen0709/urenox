<?php

namespace App\Http\Controllers\Auth;

use Hash,
    Session,
    Redirect,
    Auth,
    Cookie,
    DB,
    Config;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Language;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout', 'postLogout');
    }

    public function index() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $email = $request->email;
        $password = $request->password;
        if ($email && $password) {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                $users = Auth::user();
                if ($users->status == 1) {
                    //set site languages
                    $site_languages = Language::select("id", "language_name", "language_code", "order_num")->where(['status' => '1'])->orderBy("order_num")->get()->toArray();
                    Session::put('site_languages', $site_languages);

                    //set default language
                    $default_lang = Language::where('id', $users->language_id)->first();
                    if (!empty($default_lang)) {
                        Session::put('lang_id', $default_lang->id);
                        Session::put('lang_name', $default_lang->language_name);
                        Session::put('lang_code', $default_lang->language_code);
                    }
                    return redirect()->route('dashboard');
                } else {
                    Auth::logout();
                    return redirect()->route('loginpage')->with('error', trans('common.label_common_status_inactive'));
                }
            } else {
                return redirect()->route('loginpage')->with('error', trans('auth.failed'));
            }
        } else {
            return redirect()->route('loginpage')->with('error', trans('common.label_common_error'));
        }
    }

    public function postLogout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('loginpage');
    }

}
