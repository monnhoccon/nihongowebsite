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

<div class="container" style="padding-left: 0;padding-right: 0;padding-top: 50px;">
    <div class="row">
        <div>
            <form method="post" name="quizForm" action="loadjlpt">
                <div>
                        <ul style="list-style-type: none;">
                            <li>
                                <ul>
                                    <div class="form-group col-sm-4">

                                        <label style="font-size: 20px;">Cấp độ:</label>
                                        {{Form::select('level',[
                                        'Chọn cấp độ',
                                        'n5'=>'N5',
                                        'n4'=>'N4',
                                        'n3'=>'N3',
                                        'n2'=>'N2',
                                        'n1'=>'N1'
                                        ],$level,['class' => 'form-control input-lg'])}}

                                    </div>
                                </ul>
                                <ul>
 
                                    <div class="form-group col-sm-4">
                                        <label style="font-size: 20px;">Thể loại:</label>
                                        {{Form::select('type',['Chọn thể loại','np'=>'Ngữ Pháp','tv'=>'Từ Vựng','ch'=>'Chữ Hán','dh'=>'Đọc Hiểu'],$type,['class' => 'form-control input-lg'])}}
                                    </div>
                                </ul>

                                <ul>
                                    <div class="form-group col-sm-4">
                                        <label style="font-size: 20px;">Số câu hỏi:</label>
                                        {{Form::select('num',['Chọn số câu','10'=>'10','20'=>'20','30'=>'30','40'=>'40','50'=>'50'],$num,['class' => 'form-control input-lg','id'=>'num'])}}
                                    </div>
                                </ul>

                                <ul>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-lg btn-info" id="btnStart" value="Start" title="Bắt đầu">Bắt đầu</button>
                                </div>
                                    
                                </ul>
                                <ul>

                                </ul>
                                <ul>

                                </ul>
                            </li>

                        </ul>
                </div>

                {{ csrf_field() }}

            </form>
        </div>

    </div>

</div>
<div class="container" style="padding-top: 50px;">
    <div class="row">

        <div class="text-center margin-bottom">
            <button id="startTimer" hidden onclick="onTimer()">Start</button>
            <button class="btn btn-danger" onclick="onPause()">Tạm dừng</button>
            <button class="btn btn-success" onclick="onResume()">Tiếp tục</button>
        </div>
        <div align="center">
            <div>
                <p style="font-size: 30px;">Thời gian làm bài: <span id="minutes"></span> Phút <span id="seconds"></span> Giây</p>
                <script>
                    $(document).ready(function(){
                        $('#startTimer').trigger('click');
                    });
                    m = <?php echo $num-1; ?>;
                    s = 60;
                    var isPaused = false;
                    function onPause() {
                        isPaused=true;
                    }
                    function onResume() {
                        isPaused=false;
                        onTimer();
                    }
                    function onTimer() {
                        if(!isPaused){
                            document.getElementById('minutes').innerHTML = m;
                            document.getElementById('seconds').innerHTML = s;
                            s--;

                            if (s < 0) {
                                m=m-1;
                                document.getElementById('minutes').innerHTML = m;
                                s=60;
                                setTimeout(onTimer, 1000);
                                if(m<0){
                                    alert('Thời gian làm bài đã hết!');
                                    $('#btnCheck').trigger('click');
                                }
                            }
                            else {
                                setTimeout(onTimer, 1000);
                            }
                        }
                    }
                </script>
            </div>
            <label style="font-size: 30px;text-decoration: underline;margin-top: 10px">Bài làm</label>
        </div>
        <table style="margin-left:15%;margin-right:8%;font-size: 22px;line-height:35px;">
            @php
                $idRd = 1;
            @endphp
            @foreach ($quiz as $qz)
                <tr>
                    <td id="{{$idRd}}">
                        Câu {{$idRd}}:
                        <?php echo $qz->CauHoi;?>
                    </td>
                </tr>
            <tr>
                <td style="padding-left:5%;">
                    <input type="radio" name="{{$idRd}}_radio" value="A"><?php echo $qz->DapAnA;?><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:5%;">
                    <input type="radio" name="{{$idRd}}_radio" value="B"><?php echo $qz->DapAnB;?><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:5%;">
                    <input type="radio" name="{{$idRd}}_radio" value="C"><?php echo $qz->DapAnC;?><br>
                </td>
            </tr>
            <tr>
                <td style="padding-left:5%;">
                    <input type="radio" name="{{$idRd}}_radio" value="D"><?php echo $qz->DapAnD;?><br>
                </td>
            </tr>

                <input type="text" hidden name="{{$idRd}}_radio" value="{{$qz->DapAnDung}}">
                @php
                    $idRd = $idRd+1;
                @endphp
            @endforeach
        </table>

    </div>
    <div align="center" >
        <input type="button" class="btn btn-lg btn-success" name="btnCheck" id="btnCheck" title="Kiểm tra kết quả" value="Kiểm tra kết quả">
        <script>
            $('#btnCheck').unbind("click").click(function() {
                onPause();
            var countR = 0;
            var countW = 0;
            var total = $('#num option:selected').val();
            for (var i = 1; i <= total; i ++) {
                var dapanchon = $("input[name='"+i+"_radio']:checked").val();
                var dapandung = $("input[name='"+i+"_radio']").val();

                if (dapanchon == dapandung) {
                    countR = countR + 1;
                    $("#"+i+"").removeClass('ui-state-error');
                    $("#"+i+"").addClass('ui-state-highlight');
                } else {
                    countW = countW + 1;
                    // Set backgroud for wrong answer
                    $("#"+i+"").addClass('ui-state-error');
                }

                $('#quizResult').html('<span title="Kết quả đạt được" style="color:red;" >Kết quả：</span> ' + countR + '/' + total);
            }

            if (countR < total) {
                alert('Điểm: ' + countR + '/' + total + '. Cố gắng lên bạn!');
            } else {
                alert('Điểm: ' +countR + '/' + total +'. Xuất sắc!');
            }
            });

        </script>
    </div>

</div>


@endsection
