
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script>
        window.Laravel =<?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <base href="{{asset('')}}">
    <title>Yamada | Trung tâm tiếng Nhật</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/ico/icon.png')}}">
</head>

<body>

{{--oncopy="return false" oncut="return false" onpaste="return false"--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@include('header')
@yield('content')
<footer id="footer">

    @if(session('alert'))
       <script>
           alert('{{session('alert')}}');
       </script>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="{{asset('images/home/under.png')}}" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">
                    <h2>Cơ Sở</h2>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img style="border-radius: 50%" src="{{asset('images/home/coso1.png')}}" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Cơ Sở 1:</blockquote>
                            <h3><a href="http://facebook.com/tinhyeutiengnhat.edu.vn">Số 1 Phạm Văn Đồng, Mai Dịch,Cầu Giấy, Hà Nội</a></h3>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img style="border-radius: 50%"  src="{{asset('images/home/coso2.png')}}" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Cơ Sở 2:</blockquote>
                            <h3><a href="http://facebook.com/tinhyeutiengnhat.edu.vn">207 Giải Phóng, Đồng Tâm, Hai Bà Trưng, Hà Nội</a></h3>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img style="border-radius: 50%"  src="{{asset('images/home/coso3.png')}}" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Cơ Sở 3:</blockquote>
                            <h3><a href="http://facebook.com/tinhyeutiengnhat.edu.vn">73, Nguyễn Chí Thanh, Phường Láng Hạ, Quận Đống Đa, Hà Nội</a></h3>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img style="border-radius: 50%"  src="{{asset('images/home/coso4.png')}}" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Cơ Sở 4:</blockquote>
                            <h3><a href="http://facebook.com/tinhyeutiengnhat.edu.vn">TRƯỜNG ĐẠI HỌC THỦY LỢI

                                    Địa chỉ : 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI.</a></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="contact-form bottom">
                    <h2>Đăng kí học Offline tại <br>Yamada Center</h2>
                    <form name="contact-form" method="post" action="sendmessage">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Họ Tên">
                        </div>

                        <div class="form-group">
                            <input type="phone" name="phone" class="form-control" required="required" placeholder="Số điện thoại">
                        </div>

                        <div class="form-group">

                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input type="text" name="birthday" class="form-control" placeholder="Ngày Sinh">
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder="Nội dung"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Gửi">
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2>Liên hệ</h2>
                    <address>
                        E-mail: <a href="mailto:yamadasenta@gmail.com">Yamadasenta@gmail.com</a> <br>
                        Hotline : 0462 591 410 <br>
                    </address>
                    <h2>Địa chỉ</h2>
                    <address>
                        Văn Phòng : Tầng 3, Tòa nhà VietcomBank, Số 52, Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội <br>
                        Website:
                        <a href="http://yamada.edu.vn">http://yamada.edu.vn</a>
                         <br>
                    </address>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; Yamada Center 2017. All Rights Reserved.</p>
                    <p>Rewrite by <a target="_blank" href="http://facebook.com/caunhocsabishii">Nvkhoi</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
