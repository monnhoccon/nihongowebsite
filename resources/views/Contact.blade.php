@extends('Layout')
@section('content')
    <header>
        <style>
            #map {
                width: auto;
                height: 400px;
                border-radius: 10px;
                background-color: #FFF;
            }
        </style>
    </header>
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title" style="color: #FFF;">Liên Hệ Với Chúng Tôi</h1>
                            <p style="color: #FFF;">Trung Tâm Tiếng Nhật Yamada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
    <div id="map-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">


                <div id="map">
                <script>
                    function initMap() {
                        var uluru = {lat: 21.036643, lng: 105.77884599999993};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 13,
                            center: uluru
                        });
                        var infowindow = new google.maps.InfoWindow({content:'<strong>O XINH VN</strong><br>52 Hồ Tùng Mậu Hà Nội<br>'});
                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map
                        });
                        infowindow.open(map,marker);
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFee9KUEEdwqCLi4jvfXfG_FLuohdbBk&callback=initMap">
                </script>
                </div>
                </div>
                <div class="col-sm-4">
                    <h2>Liên hệ</h2>
                    <address>
                        E-mail: <a href="mailto:yamadasenta@gmail.com">Yamadasenta@gmail.com</a> <br>
                        Phone: 0462 591 410<br>
                        Fax: 0463 271 393 <br>
                    </address>
                    <h2>Địa Chỉ</h2>
                    <address>
                        52 Hồ Tùng Mậu, <br>
                        Cầu Giấy, <br>
                        Hà Nội, <br>
                        Việt Nam. <br>
                    </address>
                </div>
            </div>
        </div>
    </div>

@endsection