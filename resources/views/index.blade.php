@extends('layout')
@section('content')
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Chúng tôi luôn muốn mang đến cho bạn trải nghiệm tốt nhất</h1>
                        <p>Hãy là người đầu tiên trải nghiệm hệ thống giáo dục trực tuyến Kawa.edu.vn.</p>
                        <a href="jlpttest" class="btn btn-common">Thử làm đề thi</a>
                    </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section class="section section-dark section-heading yamada-blue" id="section-one">
        <div class="site-width">
            <h2 class="col-6-fixed wow slideInLeft" data-wow-duration="0.8s">
                Một vài lý do vì sao các bạn học viên tin chọn <br> Yamada Center.
            </h2>
        </div>
    </section>

    <div class="container" id="container-full-width">
        <section class="section section-home-right-ads light-gray">
            <div class="site-width">
                <div class="cols-row">
                    <div class="col-sm-5 section-intro-content">
                        <h1 class="section-sub-heading border-yellow ng-isolate-scope rs-trigger-visible wow zoomIn" data-rs-trigger="bannerOne">
                            Lợi ích
                        </h1>
                        <h2 class="wow fadeInLeft">
                            Xây dựng ngôi nhà chung cùng nhau học tiếng Nhật.
                        </h2>
                        <p class="font-large wow fadeInLeft">
                            Chẳng bao giờ có loại thuốc bổ chữa được những căn bệnh xã hội hữu hiệu tốt hơn một mái ấm khỏe khoắn và hạnh phúc. Chẳng bao giờ có nguồn ổn định xã hội lớn hơn một gia đình yêu thương và biết cảm thông. Chẳng bao giờ có cách giúp trẻ em hạnh phúc tốt hơn lời tâm tình của bậc cha mẹ sáng suốt và trìu mến.
                        </p>
                        <p class="font-large wow zoomIn">
                            <a class="link-more" href="about">>Xem thêm giới thiệu về Yamada<</a>
                        </p>
                    </div>

                    <div class="col-sm-6 col-offset-1 position-rel">
                        <img class="img-responsive ben wow bounceInRight" src="images/home/gioithieu1.jpg" alt="gioithieu1">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container" id="container-full-width">
        <section class="section section-home-right-ads light-gray">
            <div class="site-width">
                <div class="cols-row">
                    <div class="col-sm-6 col-offset-1 position-rel">
                        <img class="img-responsive con" src="images/home/gioithieu2.jpg" alt="gioithieu2">
                    </div>
                    <div class="col-sm-5 section-intro-content">
                        <h1 class="section-sub-heading border-yellow ng-isolate-scope rs-trigger-visible wow zoomIn" data-rs-trigger="bannerOne">
                            Kết Nối Tự Hào
                        </h1>
                        <h2 class="wow fadeInRight">
                             Học hỏi tất cả lĩnh vực kiến thức và văn hóa.
                        </h2>
                        <p class="font-large wow fadeInRight">
                            Trẻ nhỏ sẽ không nhớ bạn vì vật chất bạn cho chúng, mà vì tình cảm bạn dành cho chúng.
                        </p>
                        <p class="font-large wow zoomIn">
                            <a class="link-more" href="about">>Xem thêm giới thiệu về Yamada<</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
            <div class="row">
                <div class="col-sm-4 wow slideInLeft">
                <div class="khoi-bai-hoc">
                    <div class="team-single-wrapper">
                        <div class="team-single">
                            <div class="person-thumb">
                                <a href="lesson/n5"><img id="anh" src="images/home/bh1.png" class="img-responsive" alt="anh1"  /></a>
                                <div class="content-1">
                                <a href="lesson/n5">
                                    <h5>Khóa học cho người mới bắt đầu</h5>
                                <h5>Vào học ngay</h5>
                                </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="title-bai-hoc">
                        <h2>Bài Học N5</h2>
                        <p>
                            Tổng hợp các bài học cấp độ N5.
                        </p>
                    </div>
                </div>
                </div>
                <div class="col-sm-4 wow slideInUp">
                <div class="khoi-bai-hoc">
                    <div class="team-single-wrapper">
                        <div class="team-single">
                            <div class="person-thumb">
                                <a href="lesson/n4"><img id="anh" src="images/home/bh2.png" class="img-responsive" alt="anh2" /></a>
                                <div class="content-1">
                                    <a href="lesson/n5">
                                        <h5>Khóa học cho người mới bắt đầu</h5>
                                        <h5>Vào học ngay</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="social-profile">
                                <ul class="nav nav-pills">
                                    <li><a href="lesson/n4"><i class="fa">  <p style="font-size:20px;">Vào học</p></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="title-bai-hoc">
                    <h2>Bài Học N4</h2>
                    <p>
                        Tổng hợp các bài học cấp độ N4.
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-sm-4 wow slideInRight">
                <div class="khoi-bai-hoc">
                    <div class="team-single-wrapper">
                        <div class="team-single">
                            <div class="person-thumb">
                                <a href="lesson/n3"><img id="anh" src="images/home/bh3.png"   class="img-responsive" alt="anh3" /></a>
                                <div class="content-1">
                                    <a href="lesson/n5">
                                        <h5>Khóa học cho người có kiến thức cơ bản</h5>
                                        <h5>Vào học ngay</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="social-profile">
                                <ul class="nav nav-pills">
                                    <li><a href="lesson/n3"><i class="fa">  <p style="font-size:20px;">Vào học</p></i></a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="title-bai-hoc">
                    <h2>Bài Học N3</h2>
                    <p>
                        Tổng hợp các bài học cấp độ N3.
                    </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
            <div class="row">
                <div class="col-sm-4 wow slideInLeft">
                <div class="khoi-bai-hoc">
                    <div class="team-single-wrapper">
                        <div class="team-single">
                            <div class="person-thumb">
                                <a href="lesson/n2"><img  id="anh" src="images/home/bh4.png" class="img-responsive" alt="anh4" /></a>
                                <div class="content-1">
                                    <a href="lesson/n5">
                                        <h5>Khóa học cho người có kiến thức rộng</h5>
                                        <h5>Vào học ngay</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="social-profile">
                                <ul class="nav nav-pills">
                                    <li><a href="lesson/n2"><i class="fa">  <p style="font-size:20px;">Vào học</p></i></a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="title-bai-hoc">
                    <h2>Bài Học N2</h2>
                    <p>
                        Tổng hợp các bài học cấp độ N2.
                    </p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 wow slideInRight">
                <div class="khoi-bai-hoc">
                    <div class="team-single-wrapper">
                        <div class="team-single">
                            <div class="person-thumb">
                                <a href="lesson/n1"><img  id="anh" src="images/home/bh5.png" class="img-responsive" alt="anh5"  /></a>
                                <div class="content-1">
                                    <a href="lesson/n5">
                                        <h5>Khóa học cho người có kiến thức chuyên sâu.</h5>
                                        <h5>Vào học ngay</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="social-profile">
                                <ul class="nav nav-pills">
                                    <li><a href="lesson/n1"><i class="fa"><p style="font-size:20px;">Vào học</p></i></a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="title-bai-hoc">
                    <h2>Bài Học N1</h2>
                    <p>
                        Tổng hợp các bài học cấp độ N1.
                    </p>
                    </div>
                </div>
            </div>
            </div>
        </div>

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image1.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Thành công luôn ở trước mắt!</h2>
                        <P>Thêm một chút bền bỉ, một chút nỗ lực, và điều tưởng chừng như là thất bại vô vọng có thể biến thành thành công rực rỡ.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Nắm bắt cơ hội!</h2>
                        <P>Cơ hội giống như bình minh. Nếu bạn chờ quá lâu, bạn sẽ bỏ lỡ nó.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image2.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image3.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Đam mê cháy bỏng!</h2>
                        <P>Những ước mơ không chết chừng nào bạn còn nuôi dưỡng nó bằng niềm đam mê.</P>
                    </div>
                </div>

                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Ước mơ đến Nhật Bản không còn xa vời!</h2>
                        <P>
                            Đến với trung tâm Tiếng Nhật Yamada, bạn sẽ được trau dồi khả năng giao tiếp, sự tự tin trên con đường trinh phục đất nước mặt trời mọc.
                        </P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image4.png" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

     <!--/#features-->
    <div class="container-fluid" id="slide">
        <div class="carousel slide carousel-banner" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner" role="listbox">
                <div class="item one active">
                    <div class="carousel-caption hidden-xs target">
                        <div class="container container-carousel wow slideInUp">
                            <h3 class="title-des">Đội ngũ đào tạo</h3>
                            <div class="row description-carousel">
                                <div class="col-sm-6 align-right">
                                    <p><i aria-hidden="true" class="fa fa-check-square-o"></i>Đội ngũ giáo viên dày dặn kinh nghiệm
                                    </p>
                                </div>
                                <div class="col-sm-6 align-left">
                                    <p><i aria-hidden="true" class="fa fa-paper-plane"></i>Môi trường học chuyên nghiệp, sạch đẹp
                                    </p>
                                </div>
                            </div>
                            <a class="btnKhamPha" href="/register">Đăng Kí Học</a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-sm-12 textslide">
                            <div class="textline text-center">
                                <div class="line1">
                                    TRUNG TÂM TIẾNG NHẬT <span class="textlinecolor1">YAMADA.</span> </div>
                                <div class="line2">
                                    Học Tiếng Nhật <br> <span class="textlinecolor2">Miễn phí 100%.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item two">
                    <div class="carousel-caption hidden-xs target">
                        <div class="container container-carousel myslideInUp">
                            <h3 class="title-des">Học mà chơi - Chơi mà học</h3>
                            <div class="row description-carousel">
                                <div class="col-sm-6 align-right">
                                    <p><i aria-hidden="true" class="fa fa-check-square-o"></i>Đội ngũ giáo viên dày dặn kinh nghiệm
                                    </p>
                                </div>
                                <div class="col-sm-6 align-left">
                                    <p><i aria-hidden="true" class="fa fa-paper-plane"></i>Môi trường học chuyên nghiệp, sạch đẹp
                                    </p>
                                </div>
                            </div>
                            <a class="btnKhamPha" href="/register">Đăng Kí Học</a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-sm-12 textslide">
                            <div class="textline text-center">
                                <div class="line1">
                                    TRUNG TÂM TIẾNG NHẬT <span class="textlinecolor1">YAMADA.</span>  </div>
                                <div class="line2">
                                    Học Tiếng Nhật <br> <span class="textlinecolor2">Miễn phí 100%.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item three">
                    <div class="carousel-caption hidden-xs target">
                        <div class="container container-carousel myslideInUp">
                            <h3 class="title-des">Trung tâm Yamada</h3>
                            <div class="row description-carousel">
                                <div class="col-sm-6 align-right">
                                    <p><i aria-hidden="true" class="fa fa-check-square-o"></i>Đội ngũ giáo viên dày dặn kinh nghiệm
                                    </p>
                                </div>
                                <div class="col-sm-6 align-left">
                                    <p><i aria-hidden="true" class="fa fa-paper-plane"></i>Môi trường học chuyên nghiệp, sạch đẹp
                                    </p>
                                </div>
                            </div>
                            <a class="btnKhamPha" href="/register">Đăng Kí Học</a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-sm-12 textslide">
                            <div class="textline text-center">
                                <div class="line1">
                                    TRUNG TÂM TIẾNG NHẬT <span class="textlinecolor1">YAMADA.</span>  </div>
                                <div class="line2">
                                    Học Tiếng Nhật <br> <span class="textlinecolor2">Miễn phí 100%.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item four">

                    <div class="carousel-caption hidden-xs target">
                        <div class="container container-carousel myslideInUp">
                            <h3 class="title-des">Học mà chơi - Chơi mà học</h3>
                            <div class="row description-carousel">
                                <div class="col-sm-6 align-right">
                                    <p><i aria-hidden="true" class="fa fa-check-square-o"></i>Đội ngũ giáo viên dày dặn kinh nghiệm
                                    </p>
                                </div>
                                <div class="col-sm-6 align-left">
                                    <p><i aria-hidden="true" class="fa fa-paper-plane"></i>Môi trường học chuyên nghiệp, sạch đẹp
                                    </p>
                                </div>
                            </div>
                            <a class="btnKhamPha" href="/register">Đăng Kí Học</a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-sm-12 textslide">
                            <div class="textline text-center">
                                <div class="line1">
                                    TRUNG TÂM TIẾNG NHẬT <span class="textlinecolor1">YAMADA.</span>  </div>
                                <div class="line2">
                                    Học Tiếng Nhật <br> <span class="textlinecolor2">Miễn phí 100%.</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item five">
                    <div class="carousel-caption hidden-xs target">
                        <div class="container container-carousel myslideInUp">
                            <h3 class="title-des">Học mà chơi - Chơi mà học</h3>
                            <div class="row description-carousel">
                                <div class="col-sm-6 align-right">
                                    <p><i aria-hidden="true" class="fa fa-check-square-o"></i>Đội ngũ giáo viên dày dặn kinh nghiệm
                                    </p>
                                </div>
                                <div class="col-sm-6 align-left">
                                    <p><i aria-hidden="true" class="fa fa-paper-plane"></i>Môi trường học chuyên nghiệp, sạch đẹp
                                    </p>
                                </div>
                            </div>
                            <a class="btnKhamPha" href="/register">Đăng Kí Học</a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-sm-12 textslide">
                            <div class="textline text-center">
                                <div class="line1">
                                    TRUNG TÂM TIẾNG NHẬT <span class="textlinecolor1">YAMADA.</span>  </div>
                                <div class="line2">
                                    Học Tiếng Nhật <br> <span class="textlinecolor2">Miễn phí 100%.</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href=".carousel-banner" role="button" data-slide="prev" onclick="abortNext()">
                <i aria-hidden="true" class="fa fa-angle-left"></i>
            </a>
            <a id="nextImage" class="right carousel-control" href=".carousel-banner" role="button" data-slide="next">
                <i aria-hidden="true" class="fa fa-angle-right"></i>
            </a>
        </div>

    </div>



@endsection