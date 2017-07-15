<?php

use Illuminate\Support\Facades\Input;

Route::get('404',function(){
	return view('404');
});

Route::get('/',function(){
    return view('index');
});
Route::get('home',function(){
    return view('index');
});

Route::get('about','AboutController@showAbout');

Route::get('contact','ContactController@showContact');

Route::get('register','RegisterController@showRegister');

Route::group(['prefix'=>'khoahoc'],function (){
    Route::get('lichkhaigiang','KhoaHocController@showLichKhaiGiang');
    Route::get('socapn5','KhoaHocController@showSoCapN5');
    Route::get('socapn4','KhoaHocController@showSoCapN4');
    Route::get('trungcapn3','KhoaHocController@showTrungCapN3');
    Route::get('caocapn2','KhoaHocController@showCaoCapN2');
    Route::get('caocapn1','KhoaHocController@showCaoCapN1');

    Route::get('lichkhaigiang/{tieude}','KhoaHocController@showLichKhaiGiangChiTiet');
    Route::get('socapn5/{tieude}','KhoaHocController@showSoCapN5ChiTiet');
    Route::get('socapn4/{tieude}','KhoaHocController@showSoCapN4ChiTiet');
    Route::get('trungcapn3/{tieude}','KhoaHocController@showTrungCapN3ChiTiet');
    Route::get('caocapn2/{tieude}','KhoaHocController@showCaoCapN2ChiTiet');
    Route::get('caocapn1/{tieude}','KhoaHocController@showCaoCapN1ChiTiet');
});

Route::get('lesson/{level}','LessonController@showLesson');

Route::get('lesson/{level}/{type}','LessonController@showLessonDetail');

Route::get('lesson/{level}/{type}/{tieude}','LessonController@showBaiHoc');

Route::get('lesson',function(){
    return view('Lesson');
});

Route::get('jlpttest',function(){
	return view('Jlpttest');
});
Route::get('loadjlpt',function(){
	return view('Jlpttest');
});

Route::post('loadjlpt','JLPTcontroller@showTest');

Route::post('sendmessage',function(){
	$name= Input::get('name');
	$phone = Input::get('phone');
	$email= Input::get('email');
	$birthday=Input::get('birthday');
	$message=Input::get('message');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $time = date("Y-m-d h:i:sa");
    if($name!="" && $phone!="" && $message!=""){
		DB::insert('insert into usermessages(name,phone,email,birthday,message,date) VALUES(?,?,?,?,?,?)',[$name,$phone,$email,$birthday,$message,$time]);
	}
	return redirect('home')->with('alert','Cảm ơn bạn đã gửi tin cho Trung tâm');
});

Route::group(['prefix'=>'admin',],function() {
        Route::group(['prefix' => 'login', 'middleware' => 'checkLogin'], function () {
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
        });
});
Route::group(['prefix'=>'admin','middleware'=>'checkAdmin'],function(){
            Route::group(['prefix'=>'layout'],function(){
            Route::get('index','HomeController@getView');
            Route::get('logout','HomeController@getLogout');
        });

        Route::group(['prefix' => 'lesson'], function () {
            Route::get('list', 'LessonController@getList');
            Route::get('edit/{id}', 'LessonController@getEdit');
            Route::post('edit/{id}', 'LessonController@postEdit');
            Route::get('delete/{id}', 'LessonController@delete');
            Route::get('add', 'LessonController@getAdd');
            Route::post('add', 'LessonController@postAdd');
            });
        Route::group(['prefix'=>'khoahoc'],function (){
            Route::get('list','KhoaHocController@getList');
            Route::get('edit/{id}','KhoaHocController@getEdit');
            Route::post('edit/{id}','KhoaHocController@postEdit');
            Route::get('delete/{id}','KhoaHocController@delete');
            Route::get('add','KhoaHocController@getAdd');
            Route::post('add','KhoaHocController@postAdd');
        });
        Route::group(['prefix'=>'hinhanh'],function (){
            Route::get('list','HinhAnhController@getList');
            Route::get('edit/{id}','HinhAnhController@getEdit');
            Route::post('edit/{id}','HinhAnhController@postEdit');
        });
        Route::group(['prefix'=>'thongtindangki'],function(){
            Route::get('list','ThongTinDangKiController@getList');
        });

});
Route::get('/{a}','DirectController@checkPage');
Route::get('/{a}/{b}','DirectController@checkPage');
Route::get('/{a}/{b}/{c}','DirectController@checkPage');
Route::get('/{a}/{b}/{c}/{d}','DirectController@checkPage');
Route::get('/{a}/{b}/{c}/{d}/{e}','DirectController@checkPage');




