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
                return redirect()->route('dashboard');
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
