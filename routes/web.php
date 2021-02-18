<?php

use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['CommonMiddleware']], function() {

    Auth::routes();
    Route::get('/home', array('as' => 'home', 'routegroup' => 'home', 'uses' => 'HomeController@home'));
    Route::get('/', array('as' => 'loginpage', 'routegroup' => 'login', 'uses' => 'Auth\LoginController@index'));
    Route::get('/admin', array('as' => 'login-page', 'routegroup' => 'login', 'uses' => 'Auth\LoginController@index'));
    Route::post('postlogin', array('as' => 'postlogin', 'routegroup' => 'login', 'uses' => 'Auth\LoginController@postLogin'));
    Route::get('change_language/{lang}', array('as' => 'postlanguage', 'routegroup' => 'language', 'uses' => 'CommonController@changeLanguage'));
    Route::get('set_selected_user/{id}/{role_id}', array('as' => 'postselectuser', 'routegroup' => 'postselectuser', 'uses' => 'CommonController@setSelectedUser'));
    Route::group(array('middleware' => 'auth'), function() {
        Route::get('/dashboard', array('as' => 'dashboard', 'routegroup' => 'grp_dashboard', 'uses' => 'DashboardController@index'));
        Route::get('/profile/{id}/edit', array('as' => 'profile.edit', 'routegroup' => 'profile', 'uses' => 'ProfileController@edit'));
        Route::post('/profile/update', array('as' => 'profile.update', 'routegroup' => 'profile', 'uses' => 'ProfileController@update'));
        Route::get('log-out', array('as' => 'log-out', 'routegroup' => 'login', 'uses' => 'Auth\LoginController@postLogout'));
    });
});
