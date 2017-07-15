<?php
/**
 * Created by PhpStorm.
 * User: NVKHOI
 * Date: 3/15/2017
 * Time: 9:05 AM
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use App\Lesson;
use App\LessonTags;
use DB;

class LessonController extends BaseController
{
    public function showLesson($level){
        
        switch ($level) {
            case 'n5':
                return view('lesson/type')->with('level',$level);
                break;
            case 'n4':
                return view('lesson/type')->with('level',$level);
                break;
            case 'n3':
                return view('lesson/type')->with('level',$level);
                break;
            case 'n2':
                return view('lesson/type')->with('level',$level);
                break;
            case 'n1':
                return view('lesson/type')->with('level',$level);
                break;
            default:
                return view('404');
                break;
    }
    }
    public function showLessonDetail($level,$type){
        $lesson=DB::select("select Title,Hinh,Body,NoiDungTomTat,TieuDeKhongDau from lesson where idType='$type' and idLevel='$level'");
        switch ($type) {
            case 'np':
                return view("lesson.np",['lesson'=>$lesson])->with('level',$level)->with('type',$type);
                break;
            case 'kanji':
                return view("lesson.kanji",['lesson'=>$lesson])->with('level',$level)->with('type',$type);
                break;
            case 'tv':
                return view("lesson.tv",['lesson'=>$lesson])->with('level',$level)->with('type',$type);
                break;
            default:
                return view('404');
                break;
        }
    }
    public function showBaiHoc($level,$type,$tieude){
        $tags=DB::select("select name,name_tags from lessontags ORDER  BY RAND() LIMIT 5");
        $lesson=DB::select("select Title,Hinh,Body,NoiDungTomTat,TieuDeKhongDau from lesson where idType='$type' and idLevel='$level' and TieuDeKhongDau='$tieude'");
        return view("lesson.index",['lesson'=>$lesson])->with('level',$level)->with('type',$type)->with('tags',$tags);
    }

    public function getList(){
        $lesson= Lesson::all();
        return view('admin.lesson.lessonlist',['lesson'=>$lesson]);
    }
    public function getEdit($id){
        $lesson=Lesson::find($id);
        return view('admin.lesson.edit',['lesson'=>$lesson]);
    }
    public function postEdit(Request $request,$id){
        $detail= Lesson::find($id);
        $tagsold=$detail->TieuDeKhongDau;
        DB::delete("delete from lessontags WHERE name='$tagsold'");
        $this->validate($request,
            [
                'Title'=>'required|min:3|max:500',
                'Level'=>'required|min:1',
                'Type'=>'required|min:1',
                'NoiDungTomTat'=>'required|min:20|max:1000',
                'Body'=>'required|min:255',
                'hinhDaiDien'=>'required',
            ],
            [
                'hinhDaiDien'=>'Bạn chưa chọn ảnh đại diện',
                'Level.min'=>'Bạn chưa chọn Cấp',
                'Level.required'=>'Bạn chưa chọn cấp',
                'Type.required'=>'Bạn chưa chọn loại',
                'Type.min'=>'Bạn chưa chọn Loại',
                'Body.required'=>'Nội dung tối thiểu 255 kí tự',
                'Body.min'=>'Nội dung tối thiểu 255 kí tự',
                'Title.required'=>'Bạn chưa nhập Tên Bài',
                'Title.min'=>'Nhập tiêu đề lớn hơn 3 kí tự',
                'Title.max'=>'Nhập tiêu đề quá kí tự cho phép',
                'NoiDungTomTat.min'=>'Nhập Nội Dung Tóm Tắt lớn hơn 25 kí tự',
                'NoiDungTomTat.max'=>'Nhập Nội Dung Tóm Tắt nhỏ hơn 1000 kí tự',
            ]);
        $detail->Title=$request->Title;
        $tieude=$request->Title;
        $tieudekhongdau=changeTitle($tieude);

        $tags=new LessonTags;
        $tags->name=$tieudekhongdau;
        $tags->name_tags=$request->Title;

        $detail->TieuDeKhongDau=$tieudekhongdau;
        $detail->idLevel=$request->Level;
        $detail->idType=$request->Type;
        $detail->Body=$request->Body;
        $detail->NoiDungTomTat=$request->NoiDungTomTat;

        if($request->hasFile('hinhDaiDien')){


            $file=$request->file('hinhDaiDien');
            $format = $file->getClientOriginalExtension();
            if($format!='jpg' && $format!='jpeg' && $format!='png'){
                return redirect('admin/lesson/add/')->with('failed','Sai định dạng file ảnh');
            }
            $nameold=$detail->Hinh;
            while (file_exists('images/lesson/'.$nameold)){
                unlink('images/lesson/'.$nameold);
            }
            $name= $file->getClientOriginalName();
            $Hinh= str_random(3)."_".$name;
            while (file_exists('images/lesson/'.$Hinh)){
                $Hinh= str_random(3)."_".$name;
            }
            $file->move("images/lesson",$Hinh);
            $detail->Hinh=$Hinh;
        }
        else{
            $detail->Hinh="";
        }
        $detail->save();
        $tags->save();

        return redirect('admin/lesson/edit/'.$id)->with('alert','Sửa thành công');

    }
    public function delete($id){
        $lesson=Lesson::find($id);
        $tagsold=$lesson->TieuDeKhongDau;
        DB::delete("delete from lessontags WHERE name='$tagsold'");
        $lesson->delete();
        return redirect('admin/lesson/list')->with('alert','Đã xóa thành công');
    }
    public function getAdd(){
        return view('admin.lesson.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,
            [
                'Title'=>'required|min:3|max:500',
                'Level'=>'required|min:1',
                'Type'=>'required|min:1',
                'NoiDungTomTat'=>'required|min:20|max:1000',
                'Body'=>'required|min:255',
                'hinhDaiDien'=>'required',
            ],
            [
                'hinhDaiDien'=>'Bạn chưa chọn ảnh đại diện',
                'Level.min'=>'Bạn chưa chọn Cấp',
                'Level.required'=>'Bạn chưa chọn cấp',
                'Type.required'=>'Bạn chưa chọn loại',
                'Type.min'=>'Bạn chưa chọn Loại',
                'Body.required'=>'Nội dung tối thiểu 255 kí tự',
                'Body.min'=>'Nội dung tối thiểu 255 kí tự',
                'Title.required'=>'Bạn chưa nhập Tên Bài',
                'Title.min'=>'Nhập tiêu đề lớn hơn 3 kí tự',
                'Title.max'=>'Nhập tiêu đề quá kí tự cho phép',
                'NoiDungTomTat.min'=>'Nhập Nội Dung Tóm Tắt lớn hơn 20 kí tự',
                'NoiDungTomTat.max'=>'Nhập Nội Dung Tóm Tắt nhỏ hơn 1000 kí tự',
            ]);

        $detail= new Lesson;
        $detail->Title=$request->Title;
        $tieude=$request->Title;
        $tieudekhongdau=changeTitle($tieude);

        $tags=new LessonTags;
        $tags->name=$tieudekhongdau;
        $tags->name_tags=$request->Title;

        $detail->TieuDeKhongDau=$tieudekhongdau;
        $detail->idLevel=$request->Level;
        $detail->idType=$request->Type;
        $detail->Body=$request->Body;
        $detail->NoiDungTomTat=$request->NoiDungTomTat;
        if($request->hasFile('hinhDaiDien')){

            $file=$request->file('hinhDaiDien');
            $format = $file->getClientOriginalExtension();
            if($format!='jpg' && $format!='jpeg' && $format!='png'){
                return redirect('admin/lesson/add/')->with('failed','Sai định dạng file ảnh');
            }
            $name= $file->getClientOriginalName();
            $Hinh= str_random(3)."_".$name;
            while (file_exists('images/lesson'.$Hinh)){
                $Hinh= str_random(3)."_".$name;
            }
            $file->move("images/lesson",$Hinh);
            $detail->Hinh=$Hinh;
        }
        else{
            $detail->Hinh="";
        }
        $detail->save();
        $tags->save();
        return redirect('admin/lesson/add')->with('alert','Thêm thành công');
    }

}