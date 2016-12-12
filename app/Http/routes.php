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

Route::get('/', function () {
    return 'SHOP';
});

Route::group(['middleware' => 'wechat_or_login'], function () {
    Route::get('/product', 'ProductController@create');
    Route::get('/product/create', 'ProductController@create');
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


