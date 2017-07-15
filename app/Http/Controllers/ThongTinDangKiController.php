<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThongTinDangKi;

class ThongTinDangKiController extends Controller
{
    public function getList(){
        $thongtindangki= ThongTinDangKi::all();
        return view('admin.thongtindangki.thongtindangki')->with('thongtindangki',$thongtindangki);
    }
}
