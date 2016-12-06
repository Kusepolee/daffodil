<?php 

return [
    /*
    |--------------------------------------------------------------------------
    | Wechat Enterprise
    |--------------------------------------------------------------------------
    |
    */
    'enterprise' => [
        'corp_id'      =>env('WECHAT_ENTERPRISE_CORP_ID',false),
        'corp_secret'  =>env('WECHAT_ENTERPRISE_CORP_SECRET',false),
        'agent_id'     =>env('WECHAT_ENTERPRISE_AGENT_ID',0),
        'token'        =>env('WECHAT_ENTERPRISE_TOKEN',false),
        'AESkey'       =>env('WECHAT_ENTERPRISE_AESKEY',false),
        'callback_url' =>env('WECHAT_ENTERPRISE_CALLBACK_URL',false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Wechat  Public
    |--------------------------------------------------------------------------
    |
    */
    'public' => [
        'corp_id'      =>env('WECHAT_PUBLIC_CORP_ID',false),
        'corp_secret'  =>env('WECHAT_PUBLIC_CORP_SECRET',false),
        'agent_id'     =>env('WECHAT_PUBLIC_AGENT_ID',0),
        'token'        =>env('WECHAT_PUBLIC_TOKEN',false),
        'AESkey'       =>env('WECHAT_PUBLIC_AESKEY',false),
        'callback_url' =>env('WECHAT_PUBLIC_CALLBACK_URL',false),
    ],

];