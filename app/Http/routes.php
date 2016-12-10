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

Route::get('/', function () {
    return 'SHOP';
});

Route::group(['middleware' => 'wechat_or_login'], function () {
    Route::get('/product', 'ProductController@index');
});
/*
|--------------------------------------------------------------------------
| Test Rutes
|--------------------------------------------------------------------------
|
*/
Route::get('/test', function () {
    $arr = Cache::get('callback');
    print_r($arr);
    $str = Cache::get('callback_str');
    echo $str;
    Cache::flush();
    $w = new RestRose\Wechat\Enterprise\Api;
    $w->sendText('1','good');
    //echo $w->getToken();
});


