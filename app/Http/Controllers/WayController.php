<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use RestRose\Wechat\Enterprise\Api;

class WayController extends Controller
{
    /**
     * Wechat Callback settings
     *
     */
    public function wechatCallbackEnterprise()
    {
        $w = new Api;
        $w->openCallbackMode();
    }

}
