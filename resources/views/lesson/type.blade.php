@extends('Layout')
@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 style="color: #FFFFFF;" class="title">Bài học <?php echo strtoupper($level);?></h1>
                            <p style="color: #FFF;">Bạn vui lòng chọn phần mình muốn học nhé</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="padding-top: 50px;">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="lesson-type-content">
                <div class="person-thumb">
                <a href="lesson/{{$level}}/np"><img class="img-responsive" id="anh-type" src="{{asset('images/main/nguphapimage.jpg')}}"/></a>
                <div class="content-1">
                    <a href="lesson/{{$level}}/np">
                        <h5>Khóa học cho người mới bắt đầu</h5>
                        <h5>Vào học ngay</h5>
                    </a>
                </div>
                </div>
                <div>
                    <h2>Ngữ Pháp</h2>
                    <p>
                        Tổng hợp các bài học về Ngữ Pháp.
                    </p>
                </div>
                </div>

            </div>
            <div class="col-md-4 text-center">
                <div class="lesson-type-content">
                    <div class="person-thumb">


                <a href="lesson/{{$level}}/tv"><img class="img-responsive" id="anh-type" src="{{asset('images/main/tuvungimage.jpg')}}" width="315px" height="175px"/></a>
                    <div class="content-1">
                        <a href="lesson/{{$level}}/tv">
                            <h5>Khóa học về từ vựng</h5>
                            <h5>Vào học ngay</h5>
                        </a>
                    </div>
                    </div>
                    <div>

                <h2>Từ Vựng</h2>
                <p>
                    Tổng hợp các bài học về Từ Vựng.
                </p>
                    </div>
            </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="lesson-type-content">
                <div class="person-thumb">
                <a href="lesson/{{$level}}/kanji"><img class="img-responsive" id="anh-type" src="{{asset('images/main/kanjiimage.jpg')}}" width="315px" height="175px"/></a>
                <div class="content-1">
                    <a href="lesson/{{$level}}/kanji">
                        <h5>Khóa học về từ vựng</h5>
                        <h5>Vào học ngay</h5>
                    </a>
                </div>
                </div>
                <div>

                <h2>Kanji</h2>
                <p>
                    Tổng hợp các bài học về Kanji.
                </p>
                </div>
            </div>
        </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-sm-6">
                <div class="lesson-type-left" style="background: url({{asset('images/main/thi-thu-image.jpg')}});background-position: center;background-size: cover;">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="lesson-type-right">
                    <h1>Bạn muốn thử sức mình với những câu hỏi cực kì hóc búa trong đề thi Năng Lực Tiếng Nhật</h1>
                    <h2><a href="jlpttest">Nhấp vào đây để trải nghiệm ngay nhé!</a></h2>
                </div>
            </div>
        </div>
    </div>

@endsection