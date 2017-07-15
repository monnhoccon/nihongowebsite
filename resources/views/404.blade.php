@extends('Layout')
@section('content')
    <section id="error-page">
        <div class="error-page-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="bg-404">
                                <div class="error-image">                                
                                    <img class="img-responsive" src="{{asset('images/404.png')}}" alt="404">  
                                </div>
                            </div>
                            <h2>Không tìm thấy trang này</h2>
                            <p>Trang bạn vừa vào không tồn tại hoặc có thể bạn không có quyền truy cập trang này. Vui lòng quay trở lại trang chủ</p>
                            <a href="/" class="btn btn-error">TRỞ LẠI TRANG CHỦ</a>
                            <div class="social-link">
                                <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                                <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection