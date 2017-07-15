@extends('Layout')
@section('content')

    <div class="container">
        <div class="row">
            <div style="height: 140px;border-radius:10px;-webkit-animation: hue 15s infinite linear;background-image: url('{{asset('images/main/bar.png')}}')">
                <h1 class="text-center" style="color:#FFF; padding-top: 50px;text-transform: uppercase">Kanji <?php echo strtoupper($level);?></h1>
                <div class="container"  style="padding-top: 50px;">
                    <div class="row">
                        @foreach($lesson as $ls)
                            <div class="col-sm-3" id="bh">
                                <a href="lesson/{{$level}}/{{$type}}/{{$ls->TieuDeKhongDau}}">
                                    <div class="khung-anh-type">
                                        <img  id="anh-type" src="{{asset('images/lesson')}}/{{$ls->Hinh}}" class="img-responsive" alt="{{$ls->Hinh}}" />
                                    </div>
                                </a>
                                <h2>{{$ls->Title}}</h2>
                                <p>
                                    {{$ls->NoiDungTomTat}}
                                </p>
                                <p>
                                    <a class="btn btn-default" href="lesson/{{$level}}/{{$type}}/{{$ls->TieuDeKhongDau}}">Xem thêm &raquo;</a>
                                </p>
                            </div>
                        @endforeach
                    </div>

                </div>


            </div>

        </div>

    </div>



@endsection