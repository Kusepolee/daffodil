<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Cache;
use Config;

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
        //return $w->openCallbackMode();
        $w->sendText('1',$w->openCallbackMode());
    }

    /**
     * Wechat Callback settings [Public]
     *
     */
    public function wechatCallbackPublic()
    {
        $w = new Papi;
        if($w->ca()) return $w->ca();
    }

    /**
     * Auto update From Github
     *
     */
    public function git(){
    	if(!Config::has('daffodil') || !Config::get('daffodil')['service_path']) return 'daffodil.php Missing';
    	$path = Config::get('daffodil')['service_path'];
    	$key = Config::get('daffodil')['key'];

    	$github_signature = @$_SERVER['HTTP_X_HUB_SIGNATURE'];
        $payload = file_get_contents('php://input');

        $arr = explode('=', $github_signature);
        $algo = $arr[0];
        $signature = $arr[1];

        $payload_hash = hash_hmac($algo, $payload, $key);
        if($payload_hash != $signature) return 'invalid key!';
        
        shell_exec('cd '.$path);
        shell_exec('/usr/bin/git pull');
        return 200;
    }

}
