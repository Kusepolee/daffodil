<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Cache;

use RestRose\Wechat\Enterprise\Api;
//use RestRose\Wechat\Public\Mcrypt;
use RestRose\Wechat\Publics\Api as Papi;

class WayController extends Controller
{
    /**
     * Wechat Callback settings [Enterprise]
     *
     */
    public function wechatCallbackEnterprise()
    {
        $w = new Api;
        echo $w->openCallbackMode();
    }

    /**
     * Wechat Callback settings [Public]
     *
     */
    public function wechatCallbackPublic()
    {
        $w = new Papi;
        if($w->ca()) echo $w->ca();
    }

}
