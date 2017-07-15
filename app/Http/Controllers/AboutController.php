<?php
/**
 * Created by PhpStorm.
 * User: NVKHOI
 * Date: 3/14/2017
 * Time: 10:30 PM
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as BaseController;

class AboutController extends BaseController
{
    public function showAbout(){
        return view('about');
    }
}