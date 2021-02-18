<?php

namespace App\Http\Controllers;

use Auth;
use Route;
use Session;
use DateTime;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\URL;
use App\User;
use App\Models\Language;
use App\Models\OrderHasStatus;
use App\Models\OrderHasMedicine;
use App\Models\OrderHasPurchases;
use App\Models\Orders;
use Carbon\Carbon;
use App\Models\GroupAccessDetail;
use App\Models\Pricing;
use App\Models\StockManagement;
use Milon\Barcode\DNS1D;
use App\Libraries\CommanLib;
use Illuminate\Support\Facades\Log;
use App\Models\CashDesks;

class CommonController extends Controller {

    protected $data = array();
    protected $iconpath = array();
    protected $sidemenu = array();

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $route = Route::current()->action;
        $route_group = '';
        $parent_route = '';
        $alias = '';
        $current_module_id = '';
        if (isset($route['routegroup'])) {
            $route_group = $route['routegroup'];
        }
        if (isset($route['parent_group'])) {
            $parent_route = $route['parent_group'];
        }
        if (isset($route['as'])) {
            $alias = $route['as'];
        }
        if (isset($route['module_number'])) {
            $current_module_id = $route['module_number'];
        }

        $this->data['route_group'] = $route_group;
        $this->data['parent_group'] = $parent_route;
        $this->data['alias'] = $alias;
        $this->data['current_module_id'] = $current_module_id;
    }

    public function dateDMYconvertYMD($date) {
        $return_date = $date;
        if (!empty($date)) {
            $explode = explode('-', $date);
            if (isset($explode[0]) && isset($explode[1]) && isset($explode[2])) {
                $return_date = $explode[2] . '-' . $explode[1] . '-' . $explode[0];
            }
        }
        return $return_date;
    }

    public static function commonDateDMYconvertYMD($date) {
        $return_date = $date;
        if (!empty($date)) {
            $explode = explode('-', $date);
            if (isset($explode[0]) && isset($explode[1]) && isset($explode[2])) {
                $return_date = $explode[2] . '-' . $explode[1] . '-' . $explode[0];
            }
        }
        return $return_date;
    }

    //check is date or not
    public function validateDate($date, $format = 'Y-m-d') {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }

    public static function getClientId($auth) {
        $return_array = array();
        $client_id = 0;
        $property_id = 0;
        $warehouse_id = 0;
        $supplier_id = 0;
        $sub_user_id = 0;
        $selected_user_id = Session::get('selected_user_id');
        $selected_role_id = Session::get('selected_role_id');
        $selected_access_id = Session::get('selected_access_id');

        if (!empty($auth)) {
            $client_id = $auth->parent_id;
            if ($auth->role_id == config('constants.USER_TYPE_CLIENT')) {
                $client_id = $auth->id;
                $property_id = 0;
            }

            if ($selected_role_id == config('constants.USER_TYPE_PROPERTY')) {
                $property_id = $selected_user_id;
                $warehouse_id = '';
            } else if ($selected_role_id == config('constants.USER_TYPE_WAREHOUSE')) {
                $property_id = '';
                $warehouse_id = $selected_user_id;
            }

            $property_id = $selected_user_id;
            $warehouse_id = $selected_user_id;
        }
        $return_array['client_id'] = $client_id;
        $return_array['property_id'] = $property_id;
        $return_array['warehouse_id'] = $warehouse_id;
        $return_array['supplier_id'] = $supplier_id;
        $return_array['sub_user_id'] = $sub_user_id;
        return $return_array;
    }

    public function getUserDetail(Request $request) {
        $return_data = array();
        $return_data['flag'] = 0;
        $user_id = $request->user_id;
        $user_data = User::select('id', 'name', 'address', 'phone', 'email')->where('id', $user_id)->first();
        if (!empty($user_data)) {
            $return_data['flag'] = 1;
            $return_data['id'] = $user_data->id;
            $return_data['name'] = $user_data->name;
            $return_data['address'] = $user_data->address;
            $return_data['phone'] = $user_data->phone;
            $return_data['email'] = $user_data->email;
        }
        return $return_data;
    }

    public function changeLanguage($language = "en") {
        $auth = Auth::user();
        $lang = Language::where('language_code', $language)->first();
        if (isset($lang) && !empty($lang)) {
            User::where('id', $auth->id)->update(['language_id' => $lang->id]);
            Session::put('lang_id', $lang->id);
            Session::put('lang_name', $lang->language_name);
            Session::put('lang_code', $lang->language_code);
        }
        return redirect()->back();
    }

}
