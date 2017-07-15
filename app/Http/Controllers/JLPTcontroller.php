<?php
/**
 * Created by PhpStorm.
 * User: NVKHOI
 * Date: 3/15/2017
 * Time: 9:05 AM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\Controller as BaseController;

use Illuminate\Support\Facades\Input;
use DB;
use App\Quotation;

class JLPTcontroller extends BaseController
{
    public function showTest(){
        $level=Input::get('level');
        $type=Input::get('type');
        $num=Input::get('num');
        if($level!='0'&&$type!='0'&&$num!='0'){

            $quiz=DB::select("select CauHoi,DapAnA,DapAnB,DapAnC,DapAnD,DapAnDung from $type$level ORDER BY RAND() LIMIT $num;");
            
            return view('loadjlpt',['quiz'=>$quiz,'level'=>$level,'type'=>$type,'num'=>$num]);
        }
        else {
            return view('jlpttest');
        }
    }
}