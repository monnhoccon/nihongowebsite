@extends('Layout')
@section('content')

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Học tiếng Nhật cùng Yamada Center</h1>
                            <p>Hãy cố gắng học tập thật tốt nhé!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

        <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
            <div class="row">

                <div class="col-sm-4" id="bv">
                    <a href="lesson/n5"><img id="bh" src="{{asset('images/home/bh1.png')}}" class="img-responsive" alt="bh1"  /></a>

                    <h2>Bài Học N5</h2>
                    <p>
                        Tổng hợp các bài học cấp độ N5.
                    </p>
                    <p>
                        <a class="btn btn-default" href="lesson/n5">Xem thêm &raquo;</a>
                    </p>
                </div>
                <div class="col-sm-4" id="bv">
                    <a href="lesson/n4"><img id="bh" src="{{asset('images/home/bh2.png')}}" class="img-responsive" alt="bh2" /></a>
                    <h2>Bài Học N4</h2>
                    <p>
                        Tổng hợp các bài học cấp độ N4.
                    </p>
                    <p>
                        <a class="btn btn-default" href="lesson/n4">Xem thêm &raquo;</a>
                    </p>
                </div>
                <div class="col-sm-4" id="bv">
                    <a href="lesson/n3"><img id="bh" src="{{asset('images/home/bh3.png')}}"   class="img-responsive" alt="bh3" /></a>

                    <h2>Bài Học N3</h2>
                    <p>
                        Tổng hợp các bài học cấp độ N3.
                    </p>
                    <p>
                        <a class="btn btn-default" href="lesson/n3">Xem thêm &raquo;</a>
                    </p>
                </div>

            </div>
        </div>
        <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
            <div class="row">
                <div class="col-sm-4" id="bv">
                    <a href="lesson/n2"><img  id="bh" src="{{asset('images/home/bh4.png')}}" class="img-responsive" alt="bh4" /></a>

                    <h2>Bài Học N2</h2>
                    <p>
                        Tổng hợp các bài học cấp độ N2.
                    </p>
                    <p>
                        <a class="btn btn-default" href="lesson/n2">Xem thêm &raquo;</a>
                    </p>
                </div>
                <div class="col-sm-4" id="bv">
                    <a href="lesson/n1"><img  id="bh" src="{{asset('images/home/bh5.png')}}" class="img-responsive" alt="bh5"  /></a>

                    <h2>Bài Học N1</h2>
                    <p>
                        Tổng hợp các bài học cấp độ N1.
                    </p>
                    <p>
                        <a class="btn btn-default" href="lesson/n1">Xem thêm &raquo;</a>
                    </p>
                </div>
            </div>
        </div>

@endsection
