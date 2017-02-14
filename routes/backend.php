<?php
/*
| 后台路由
*/
Route::group(['prefix' => 'backend','namespace' => 'Backend', 'as' => env('APP_BACKEND_PREFIX').'.',], function () {
    Route::get('login', function () {
    	dd(123);
    	// return view('welcome');
    });
});
