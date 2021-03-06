<?php

/*
|--------------------------------------------------------------------------
| Daffodil Project
|--------------------------------------------------------------------------
|
| restrose.net
| aug 15, 2016
| version: 2.0
|
*/

Route::get('/way/clear', 'WayController@clearCache');
Route::get('/way/wechat_enterprise_ca', 'WayController@wechatCallbackEnterprise');
Route::get('/way/wechat_public_ca', 'WayController@wechatCallbackPublic');
Route::post('/way/git', 'WayController@git');


// 登录
Route::get('/login', function() {
	return view('login');
});
Route::post('/login', 'MemberController@login');

Route::get('/vip', function() {
    return view('vip');
});

Route::group(['middleware' => 'wechat_or_login'], function () {
    Route::get('/product', 'ProductController@index');
    Route::post('/product/excel', 'ProductController@excel');
    Route::get('/product/create', 'ProductController@create');
    Route::get('/product/edit/{id}', 'ProductController@edit');
    Route::post('/product/update/{id}', 'ProductController@update');
    Route::post('/product/store', 'ProductController@store');
});
/*
|--------------------------------------------------------------------------
| Test Rutes
|--------------------------------------------------------------------------
|
*/
Route::get('/test', function () {
    return view('input');

});


