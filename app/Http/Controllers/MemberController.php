<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;
use Session;
use Hash;

class MemberController extends Controller
{
    /**
     * 登录校验
     */
    public function login(Requests\LoginRequest $request)
    {
        
        $input = $request->all();
        $workid = $request->get('workid');
        $password = $request->get('password');

        $rec = Member::where('work_id', $workid)
                            ->orWhere('mobile', $workid)
                            ->first();

        if($request->has('redirect_path')){
            $redirect_path = $request->get('redirect_path');
        }else{
            $redirect_path = '/';
        }

        if(count($rec)){
            if (Hash::check($password, $rec->password)) {
                if($rec->state === 1){
                    //账号状态正常
                    if(!Session::has('id')) Session::put('id', $rec->id);

                    //Cookie::queue('id', $rec->id, 20160);
                    
                    return redirect($redirect_path);

                }else{
                    return view('login',[
                        'type'=>'2',
                        'code'=>'2.1',
                        'redirect_path'=>$redirect_path
                    ]);

                }
                
            }else{
                return view('login',[
                        'type'=>'2',
                        'code'=>'2.2',
                        'redirect_path'=>$redirect_path
                ]);

            }

        }else{
            
            return view('login',[
                        'type'=>'1',
                        'code'=>'1.2',
                        'redirect_path'=>$redirect_path
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
