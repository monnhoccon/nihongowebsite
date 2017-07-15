<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use DB;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
     if(Session::has('login')){
         $arr = [
             'user_name'=>Session::get('login')->user_name,
             'user_pass'=>Session::get('login')->user_pass,
         ];
         if(DB::table('users')->where($arr)->count()==1){
             session_start();
             $_SESSION['KCFINDER']                 = array();
             $_SESSION['KCFINDER']['disabled']     = false;
             return redirect()->intended('admin/layout/index');
         }
         else{
             return $next($request);
         }
     }
     else{
         return $next($request);
     }
    }

}
