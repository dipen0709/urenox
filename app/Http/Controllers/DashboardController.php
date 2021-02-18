<?php

namespace App\Http\Controllers;
use Auth,DB,Session;
use Illuminate\Http\Request;
use App\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Orders;
use App\Models\Prescription;
use App\Models\PrescriptionDetail;
use Carbon\Carbon;
use App\Libraries\CommanLib;
use Illuminate\Support\Facades\View;

class DashboardController extends CommonController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
//        echo 'dddd'; die;
//        $auth = Auth::user();
//        if(empty($auth)){
//            return redirect()->route('loginpage');
//        }
        return View::make('admin.dashboard.dashboard');
    }
}
