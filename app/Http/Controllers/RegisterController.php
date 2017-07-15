<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class RegisterController extends BaseController
{
    public function showRegister(){
        return view('Register');
    }
}
