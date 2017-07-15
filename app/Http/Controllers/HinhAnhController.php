<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HinhAnh;

class HinhAnhController extends Controller
{
    public function getList(){
        $images= HinhAnh::all();
        return view('admin.hinhanh.danhsachhinhanh')->with('images',$images);
    }
    public function getEdit($id){
        $images=HinhAnh::find($id);
        return view('admin.hinhanh.edit',['images'=>$images]);
    }
    public function postEdit(Request $request,$id){
        $images=HinhAnh::find($id);
        $this->validate($request,
            [
                'hinhAnh'=>'required',
            ],
            [
                'hinhAnh'=>'Bạn chưa chọn ảnh',
            ]);

        if($request->hasFile('hinhAnh')){

            $file=$request->file('hinhAnh');
            $format = $file->getClientOriginalExtension();
            if($format!='jpg' && $format!='jpeg' && $format!='png'){
                return redirect('admin/hinhanh/edit/')->with('failed','Sai định dạng file ảnh');
            }
            $nameold=$images->tenanh;
            while (file_exists("images/$images->noichua/$nameold")){
                unlink("images/$images->noichua/$nameold");
            }
            $file->move("images/$images->noichua",$nameold);
        }
        else{
            return redirect('admin/hinh/edit/'.$id)->with('failed','Sửa thất bại');
        }
        $images->save();
        return redirect('admin/hinhanh/edit/'.$id)->with('alert','Sửa thành công');

    }
}
