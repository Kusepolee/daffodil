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

Route::get('/way/wechat_callback_enterprise', 'WayController@wechatCallbackEnterprise');

Route::get('/', function () {
     $w = new RestRose\Wechat\Enterprise\Api;
     //$a = $w->getAuthInfo();
     //print_r($a);
    //echo Request::url();
     $b = $w->getAuthCode();
     //echo $b;
    // echo Request::path();
 
});

Route::get('/test', function () {
     //echo "LEEhhh";
    //return view('welcome');
    //$a = Cache::get('arr');
    //print_r($a);
    echo Cache::get('aes_msg');
    //echo Cache::get('str1');
    Cache::flush();
});

Route::get('/test1', function () {
     $w = new RestRose\Wechat\Enterprise\Api;
    // //echo $w->getToken();
     $a = $w->openCallbackMode();
    // print_r($a);
    //Cache::flush();

});

Route::get('/test2', function () {
    $h = new RestRose\Water\Helper;
    //$array = $h->IP2City('127.0.0.1');
    //$array = $h->IP2City('202.102.110.204');
    //$array = $h->getService();
    $array = $h->getHttpHead('service_ssl');
    //print_r($array);
});



