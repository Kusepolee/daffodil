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

Route::get('/', function () {
    return view('head');
});

Route::get('/test', function () {
     //echo "LEEhhh";
    return view('welcome');
});

Route::get('/test1', function () {
    $h = new RestRose\Water\Helper;
    //$array = $h->IP2City('127.0.0.1');
    //$array = $h->IP2City('202.102.110.204');
    //$array = $h->getService();
    $array = $h->clearCache();
    //print_r($array);
});

Route::get('/test2', function () {
    $h = new RestRose\Water\Helper;
    //$array = $h->IP2City('127.0.0.1');
    //$array = $h->IP2City('202.102.110.204');
    //$array = $h->getService();
    $array = $h->getHttpHead('service_ssl');
    //print_r($array);
});



