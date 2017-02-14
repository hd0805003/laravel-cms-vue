<?php
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
//后台路由器
Route::group(['prefix' => 'backend','namespace' => 'Backend', 'as' => env('APP_BACKEND_PREFIX').'.',], function () {
	//首页
	Route::get('index', 'IndexController@index');
    Route::get('login', 'AuthController@tologin');
    //管理员管理
    	Route::get('admin_add', 'AdminController@admin_add');
    	Route::post('addadmin', 'AdminController@addadmin');
    	Route::get('admin_list', 'AdminController@admin_list');
});
