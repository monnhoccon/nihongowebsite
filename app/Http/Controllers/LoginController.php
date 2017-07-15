<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;

class LoginController extends Controller
{
    public function getLogin(){
        return view('admin/login');
    }
    public function postLogin(Request $request){

        $rules = [

            'user'=>'required',

            'pass'=>'required',

        ];

        $messages = [

            'user.required'=>'tài khoản không được để trống',

            'pass.required'=>'mật khẩu không được để trống',

        ];

        $Validator = Validator::make($request->all(),$rules,$messages);

        if($Validator->fails()){

            return redirect()->back()->withErrors($Validator);

        }
        else{
            $arr = [
                'user_name'=>md5($request->user),
                'user_pass'=>md5($request->pass),
            ];
            if(DB::table('users')->where($arr)->count()==1){
                $data = DB::table('users')->where($arr)->first();
                Session::flash('success','Đăng nhập thành công');

                session_start();
                $_SESSION['KCFINDER']                 = array();
                $_SESSION['KCFINDER']['disabled']     = false;

                Session::put('login',$data);
                return redirect()->intended('admin/layout/index');
            }
            else{
                Session::flash('error','Đăng nhập thất bại!');
                return redirect()->back()->withInput();
            }
        }

    }
}
