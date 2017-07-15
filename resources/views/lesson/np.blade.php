@extends('Layout')
@section('content')

<div class="container">
    <div class="row">
        <div>
            <div style="height: 140px;border-radius:10px;background-image: url('{{asset('images/main/bar.png')}}');-webkit-animation: hue 15s infinite linear;">
                <h1 class="text-center" style="color:#FFF; padding-top: 50px;text-transform: uppercase">Ngữ Pháp <?php echo strtoupper($level);?></h1>
            </div>

            <div class="container"  style="padding-top: 50px;">
                <div class="row">
                    @foreach($lesson as $ls)
                        <div class="col-sm-4" id="bh">
                            <div class="lesson-nguphap">
                                <a href="lesson/{{$level}}/{{$type}}/{{$ls->TieuDeKhongDau}}">
                                    <div class="khung-anh-type">
                                        <img  id="anh-type" src="{{asset('images/lesson')}}/{{$ls->Hinh}}" class="img-responsive" alt="{{$ls->Hinh}}" />
                                    </div>
                                </a>
                                <h2>{{$ls->Title}}</h2>
                                <p>
                                    {{$ls->NoiDungTomTat}}
                                </p>
                            </div>

                        </div>
                    @endforeach
                </div>

            </div>


        </div>

    </div>

</div>


@endsection