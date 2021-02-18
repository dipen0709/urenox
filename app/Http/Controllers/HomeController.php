<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CommonController;

class HomeController extends CommonController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $return_data = array();

        $this->data['title'] = trans('master.label_dashboard_page');
        $this->data['meta_title'] = trans('master.label_dashboard_page');
        return View('admin.dashboard.dashboard', array_merge($this->data, $return_data))->render();
    }
    
     public function home()
    {
        return redirect()->route('dashboard');
    }
}
