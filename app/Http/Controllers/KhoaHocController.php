<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use App\KhoaHoc;
use App\KhoaHocTags;
use DB;

class KhoaHocController extends BaseController
{

    public function showLichKhaiGiang(){
        $khoahoc=DB::select("select Title,Hinh,NoiDungTomTat,TieuDeKhongDau from khoahoc WHERE Loai='lichkhaigiang'");
        return view('khoahoc.lichkhaigiang',['khoahoc'=>$khoahoc]);
    }

    public function showLichKhaiGiangChiTiet($tieude){
        $tags=DB::select("select name,name_tags,type from khoahoctags ORDER BY RAND() LIMIT 5");
        $khoahoc=DB::select("select Title,Body,TieuDeKhongDau from khoahoc where TieuDeKhongDau='$tieude' and Loai='lichkhaigiang'");
        return view("khoahoc.index",['khoahoc'=>$khoahoc])->with('tags',$tags)->with('tieude',$tieude);
    }

    public function showSoCapN5(){
        $khoahoc=DB::select("select Title,Hinh,NoiDungTomTat,TieuDeKhongDau from khoahoc where Loai='socapn5'");
        return view('khoahoc.socapn5',['khoahoc'=>$khoahoc]);
    }

    public function showSoCapN5ChiTiet($tieude){
        $tags=DB::select("select name,name_tags,type from khoahoctags ORDER BY RAND() LIMIT 5");
        $khoahoc=DB::select("select Title,Body,TieuDeKhongDau from khoahoc where TieuDeKhongDau='$tieude' and Loai='socapn5'");
        return view("khoahoc.index",['khoahoc'=>$khoahoc])->with('tags',$tags)->with('tieude',$tieude);
    }

    public function showSoCapN4(){
        $khoahoc=DB::select("select Title,Hinh,NoiDungTomTat,TieuDeKhongDau from khoahoc WHERE Loai='socapn4'");
        return view('khoahoc.socapn4',['khoahoc'=>$khoahoc]);
    }

    public function showSoCapN4ChiTiet($tieude){
        $tags=DB::select("select name,name_tags,type from khoahoctags ORDER BY RAND() LIMIT 5");
        $khoahoc=DB::select("select Title,Body,TieuDeKhongDau from khoahoc where TieuDeKhongDau='$tieude' and Loai='socapn4'");
        return view("khoahoc.index",['khoahoc'=>$khoahoc])->with('tags',$tags)->with('tieude',$tieude);
    }


    public function showTrungCapN3(){
        $khoahoc=DB::select("select Title,Hinh,NoiDungTomTat,TieuDeKhongDau from khoahoc WHERE Loai='trungcapn3'");
        return view('khoahoc.trungcapn3',['khoahoc'=>$khoahoc]);
    }

    public function showTrungCapN3ChiTiet($tieude){
        $tags=DB::select("select name,name_tags,type from khoahoctags ORDER BY RAND() LIMIT 5");
        $khoahoc=DB::select("select Title,Body,TieuDeKhongDau from khoahoc where TieuDeKhongDau='$tieude' AND Loai='trungcapn3'");
        return view("khoahoc.index",['khoahoc'=>$khoahoc])->with('tags',$tags)->with('tieude',$tieude);
    }

    public function showCaoCapN2(){
        $khoahoc=DB::select("select Title,Hinh,NoiDungTomTat,TieuDeKhongDau from khoahoc WHERE Loai='caocapn2'");
        return view('khoahoc.caocapn2',['khoahoc'=>$khoahoc]);
    }

    public function showCaoCapN2ChiTiet($tieude){
        $tags=DB::select("select name,name_tags,type from khoahoctags ORDER BY RAND() LIMIT 5");
        $khoahoc=DB::select("select Title,Body,TieuDeKhongDau from khoahoc where TieuDeKhongDau='$tieude' AND Loai='caocapn2'");
        return view("khoahoc.index",['khoahoc'=>$khoahoc])->with('tags',$tags)->with('tieude',$tieude);
    }

    public function showCaoCapN1(){
        $khoahoc=DB::select("select Title,Hinh,NoiDungTomTat,TieuDeKhongDau from khoahoc WHERE Loai='caocapn1'");
        return view('khoahoc.caocapn2',['khoahoc'=>$khoahoc]);
    }

    public function showCaoCapN1ChiTiet($tieude){
        $tags=DB::select("select name,name_tags,type from khoahoctags ORDER BY RAND() LIMIT 5");
        $khoahoc=DB::select("select Title,Body,TieuDeKhongDau from khoahoc where TieuDeKhongDau='$tieude' AND Loai='caocapn1'");
        return view("khoahoc.index",['khoahoc'=>$khoahoc])->with('tags',$tags)->with('tieude',$tieude);
    }

    public function getList(){
        $khoahoc= KhoaHoc::all();
        return view('admin.khoahoc.danhsachkhoahoc',['khoahoc'=>$khoahoc]);
    }
    public function getEdit($id){
        $khoahoc=KhoaHoc::find($id);
        return view('admin.khoahoc.edit',['khoahoc'=>$khoahoc]);
    }
    
    public function postEdit(Request $request,$id){
        $detail= KhoaHoc::find($id);
        $tagsold= $detail->TieuDeKhongDau;
        DB::delete("delete from lessontags WHERE name='$tagsold'");
        $this->validate($request,
            [
                'Title'=>'required|min:3|max:500',
                'NoiDungTomTat'=>'required|min:25|max:1000',
                'Loai'=>'required|min:1',
                'Body'=>'required|min:255',
                'hinhDaiDien'=>'required',
            ],
            [
                'hinhDaiDien'=>'Bạn chưa chọn ảnh đại diện',
                'Body.required'=>'Nội dung tối thiểu 255 kí tự',
                'Body.min'=>'Nội dung tối thiểu 255 kí tự',
                'Loai.required'=>'Chưa chọn mục',
                'Loai.min'=>'Chưa chọn mục',
                'Title.required'=>'Bạn chưa nhập Tên Bài',
                'Title.min'=>'Nhập tiêu đề lớn hơn 3 kí tự',
                'Title.max'=>'Nhập tiêu đề quá kí tự cho phép',
                'NoiDungTomTat.min'=>'Nhập Nội Dung Tóm Tắt lớn hơn 25 kí tự',
                'NoiDungTomTat.max'=>'Nhập Nội Dung Tóm Tắt nhỏ hơn 1000 kí tự',
            ]);
        $detail->Title=$request->Title;
        $tieude=$request->Title;
        $tieudekhongdau=changeTitle($tieude);
        $detail->TieuDeKhongDau=$tieudekhongdau;

        $tags=new KhoaHocTags;
        $tags->name_tags=$request->Title;
        $tags->name=$tieudekhongdau;
        $tags->type=$request->Loai;


        $detail->Loai=$request->Loai;
        $detail->Body=$request->Body;
        $detail->NoiDungTomTat=$request->NoiDungTomTat;

        if($request->hasFile('hinhDaiDien')){


            $file=$request->file('hinhDaiDien');
            $format = $file->getClientOriginalExtension();
            if($format!='jpg' && $format!='jpeg' && $format!='png'){
                return redirect('admin/khoahoc/add/')->with('failed','Sai định dạng file ảnh');
            }
            $nameold=$detail->Hinh;
            while (file_exists('images/khoahoc/'.$nameold)){
                unlink('images/khoahoc/'.$nameold);
            }
            $name= $file->getClientOriginalName();
            $Hinh= str_random(3)."_".$name;
            while (file_exists('images/khoahoc/'.$Hinh)){
                $Hinh= str_random(3)."_".$name;
            }
            $file->move("images/khoahoc",$Hinh);
            $detail->Hinh=$Hinh;
        }
        else{
            $detail->Hinh="";
        }
        $detail->save();
        $tags->save();

        return redirect('admin/khoahoc/edit/'.$id)->with('alert','Sửa thành công');

    }

    public function delete($id){
        $khoahoc=KhoaHoc::find($id);
        $tagsold= $khoahoc->TieuDeKhongDau;
        DB::delete("delete from khoahoctags WHERE name='$tagsold'");
        $khoahoc->delete();
        return redirect('admin/khoahoc/list')->with('alert','Đã xóa thành công');
    }
    public function getAdd(){
        return view('admin.khoahoc.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,
            [
                'Title'=>'required|min:3|max:500',
                'NoiDungTomTat'=>'required|min:25|max:1000',
                'Loai'=>'required|min:1',
                'Body'=>'required|min:255',
                'hinhDaiDien'=>'required',
            ],
            [
                'hinhDaiDien'=>'Bạn chưa chọn ảnh đại diện',
                'Body.required'=>'Nội dung tối thiểu 255 kí tự',
                'Body.min'=>'Nội dung tối thiểu 255 kí tự',
                'Loai.required'=>'Chưa chọn mục',
                'Loai.min'=>'Chưa chọn mục',
                'Title.required'=>'Bạn chưa nhập Tên Bài',
                'Title.min'=>'Nhập tiêu đề lớn hơn 3 kí tự',
                'Title.max'=>'Nhập tiêu đề quá kí tự cho phép',
                'NoiDungTomTat.min'=>'Nhập Nội Dung Tóm Tắt lớn hơn 25 kí tự',
                'NoiDungTomTat.max'=>'Nhập Nội Dung Tóm Tắt nhỏ hơn 1000 kí tự',
            ]);
        $detail= new KhoaHoc;
        $tags= new KhoaHocTags;
        $detail->Title=$request->Title;
        $tieude=$request->Title;
        $tieudekhongdau=changeTitle($tieude);

        $tags->name_tags=$request->Title;
        $tags->name=$tieudekhongdau;
        $tags->type=$request->Loai;

        $detail->TieuDeKhongDau=$tieudekhongdau;
        $detail->Loai=$request->Loai;
        $detail->Body=$request->Body;
        $detail->NoiDungTomTat=$request->NoiDungTomTat;

        if($request->hasFile('hinhDaiDien')){

            $file=$request->file('hinhDaiDien');
            $format = $file->getClientOriginalExtension();
            if($format!='jpg' && $format!='jpeg' && $format!='png'){
                return redirect('admin/khoahoc/add/')->with('failed','Sai định dạng file ảnh');
            }
            $name= $file->getClientOriginalName();
            $Hinh= str_random(3)."_".$name;
            while (file_exists('images/khoahoc'.$Hinh)){
                $Hinh= str_random(3)."_".$name;
            }
            $file->move("images/khoahoc",$Hinh);
            $detail->Hinh=$Hinh;
        }
        else{
            $detail->Hinh="";
        }
        $detail->save();
        $tags->save();
        return redirect('admin/khoahoc/add')->with('alert','Thêm thành công');
    }
}
