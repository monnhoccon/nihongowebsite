<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function getView(){

        return view('admin.layout.index');
    }
    public function getLogout(){

        Session::flush();
        return redirect()->intended('home');
    }

}
