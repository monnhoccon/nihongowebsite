@extends('Layout')
@section('content')

    <header>
        <style>
            #anh{
                opacity: 1;
                -webkit-transition: opacity;
                -webkit-transition-timing-function: ease-out;
                -webkit-transition-duration: 500ms;
            }
            #anh:hover{
                opacity: .5;
                -webkit-transition: opacity;
                -webkit-transition-timing-function: ease-out;
                -webkit-transition-duration: 500ms;
            }
        </style>
    </header>
    <div class="container">
        <div class="row">
            <div>
                <h1 style="color: #EF383E;text-align:center;border:1px solid;">Cao Cấp N1</h1>
                <br>
                <div class="container">
                    @foreach($khoahoc as $kh)
                        <div class="row">

                            <div class="col-sm-3">
                                <a href="khoahoc/caocapn1/{{$kh->TieuDeKhongDau}}">
                                    <img id="anh" src="{{asset('images/khoahoc')}}/{{$kh->Hinh}}" class="img-responsive" alt="{{$kh->Hinh}}" />
                                </a>
                            </div>
                            <div class="col-sm-9">
                                <h2>{{$kh->Title}}</h2>
                                <p>
                                    {{$kh->NoiDungTomTat}}
                                </p>
                                <p>
                                    <a href="khoahoc/caocapn1/{{$kh->TieuDeKhongDau}}">Xem thêm &raquo;</a>
                                </p>
                            </div>

                        </div>
                    @endforeach

                </div>


            </div>

        </div>

    </div>


@endsection