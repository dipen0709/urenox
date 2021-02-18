<?php

namespace App\Http\Controllers;

/* * Laravel built-in or extened functionality/Utility class used* */

use Auth;
use File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\View;
use Redirect;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\CommonController;
use App\User;


class ProfileController extends CommonController {

    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    public function edit(Request $request) {
        $profile = User::find($request->id);
        $user = Auth::user();
        
        if($request->id != $user->id){
            return redirect()->route('profile.edit',["id"=>$user->id]);
        }
        $return_data['title'] = trans('common.label_common_edit_profile');
        $return_data['meta_title'] = trans('common.label_common_edit_profile');
        $return_data['profile'] = $profile;
        $return_data['user'] = $user;
        if (!empty($profile)) {
            return View('admin.profile.edit', array_merge($this->data, $return_data))->render();
        } else {
            return redirect()->route('dashboard')->with('error', trans('common.label_common_error'));
        }
    }
}
?>