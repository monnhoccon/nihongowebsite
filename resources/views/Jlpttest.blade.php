@extends('Layout')
@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 style="color: #FFF;" class="title">Thi thử JLPT</h1>
                            <p style="color: #FFF;">Chúc các bạn làm bài tốt nhé</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->
    <div class="container" style="padding-left: 0;padding-right: 0;padding-top: 50px;">
        <div class="row">
            <div class="col-sm-6">
               <form method="post" name="quizForm" action="loadjlpt">
                    <div>
                        <ul>
                            <ul style="list-style-type: none;">
                                <li>

                                    <ul>

                                        <div class="form-group">

                                            {{Form::select('level',[
                                            'Chọn cấp độ',
                                            'n5'=>'N5',
                                            'n4'=>'N4',
                                            'n3'=>'N3',
                                            'n2'=>'N2',
                                            'n1'=>'N1'
                                            ],null,['class' => 'form-control input-lg'])}}
                                            
                                        </div>
                                    </ul>
                                    <ul>

                                        <div class="form-group">
                                            {{Form::select('type',['Chọn thể loại','np'=>'Ngữ Pháp','tv'=>'Từ Vựng','ch'=>'Chữ Hán','dh'=>'Đọc Hiểu'],null,['class' => 'form-control input-lg'])}}
                                        </div>
                                    </ul>

                                    <ul>
                                        <div class="form-group">
                                            {{Form::select('num',['Chọn số câu','10'=>'10','20'=>'20','30'=>'30','40'=>'40','50'=>'50'],null,['class' => 'form-control input-lg'])}}
                                        </div>
                                    </ul>

                                    <ul>
                                        {{--<input type='button' id="btnStart" value='Bắt đầu' title='Bắt đầu!'/>--}}
                                        <button type="submit" class="btn btn-lg btn-info" id="btnStart" value="Start" title="Bắt đầu">Bắt đầu</button>
                                    </ul>
                                    <ul>
                                                                            
                                    </ul>
                                    <ul>
                                        
                                    </ul>           
                                </li>
                        </ul>
                        </ul>
                    </div>
                   {{ csrf_field() }}
                </form>
                
            </div>

        </div>

    </div>
@endsection