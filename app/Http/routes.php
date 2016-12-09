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

Route::get('/way/wechat_enterprise_ca', 'WayController@wechatCallbackEnterprise');
Route::get('/way/wechat_public_ca', 'WayController@wechatCallbackPublic');

Route::get('/', function () {
     $w = new RestRose\Wechat\Enterprise\Api;
     //$array = ['name'=>'测试up', 'parentid'=>'1', 'order'=>'1', 'id'=>'2'];
     $array = ['title'=>'标题瞄瞄','description'=>'介绍1','url'=>'sina.com.cn','picurl'=>'sina.com'];


     //$b = $w->updateDepartment($array);
     //print_r($b);
     $id = 4;
     //$b = $w->deleteDepartment($id);
     //print_r($w->getNotFollowList());
     //$w->sendText('1','haha');
     $w->sendNews('1',$array);

     //echo $w->getToken();
     //$a = $w->getAuthInfo();
     //print_r($a);
    //echo Request::url();
     //$b = $w->getAuthCode();
     //echo $b;
    // echo Request::path();
 
});

Route::get('/test', function () {
     //echo "LEEhhh";
    //return view('welcome');
    $a = Cache::get('arr');
    print_r($a);
    //echo Cache::get('str');
    //echo Cache::get('str1');
    Cache::flush();
});

Route::get('/test1', function () {
    echo str_random(32);

});

Route::get('/test2', function () {
    $h = new RestRose\Water\Helper;
    //$array = $h->IP2City('127.0.0.1');
    //$array = $h->IP2City('202.102.110.204');
    //$array = $h->getService();
    $array = $h->getHttpHead('service_ssl');
    //print_r($array);
});



