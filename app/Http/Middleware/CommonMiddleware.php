<?php

namespace App\Http\Middleware;

use Closure;
use Session,
    App;
use Route;
use Illuminate\Support\Facades\Auth;
use App\Models\CashDesks;
use Carbon\Carbon;

class CommonMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        //change language
        $sel_language = Session::get('lang_code');
        App::setLocale($sel_language);
        $user = Auth::user();
        $route = Route::current()->action;
        $selected_user_id = session()->get('selected_user_id');        
        
        if (!empty($user) && !empty($route['as']) && ($route['as'] == 'inventoryreport.result' || $route['as'] == 'inventoryreport')) {
            $response = $next($request);
            return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
        }
        return $next($request);

    }

}
