@extends('Layout')
@section('content')
    <div class="container">
        <div class="row" id="baiviet">
            <h2 style="color: #00AEEF;font-size: 35px; border: 2px solid;-webkit-animation: hue 15s infinite linear;"><?php if($type=="tv"){echo "TỪ VỰNG";}
                                elseif($type=="np"){echo "NGỮ PHÁP";}
                                else{
                                    echo "KANJI";}
                ?> <?php echo strtoupper($level);?></h2>
            @foreach($lesson as $ls)
                <h1 align="center">{{$ls->Title}}</h1>
            <br>
                <div class="lesson-content"><?php echo $ls->Body?></div>
            @endforeach
            <div>Bài viết liên quan:</div>
            @foreach($tags as $tag)
                <a href="lesson/{{$level}}/{{$type}}/{{$tag->name}}">{{$tag->name_tags}}</a>
                <span><br></span>
                @endforeach
        </div>
        <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                <div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/87XNE1PC38r.js?version=42#channel=f2b3be33eb82554&amp;origin=http%3A%2F%2Fyamada.edu.vn" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/87XNE1PC38r.js?version=42#channel=f2b3be33eb82554&amp;origin=http%3A%2F%2Fyamada.edu.vn" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="f11a8683c6ebae8" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" src="https://www.facebook.com/connect/ping?client_id=189738071197131&amp;domain=yamada.edu.vn&amp;origin=1&amp;redirect_uri=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F87XNE1PC38r.js%3Fversion%3D42%23cb%3Df76ba4c8e3ef58%26domain%3Dyamada.edu.vn%26origin%3Dhttp%253A%252F%252Fyamada.edu.vn%252Ff2b3be33eb82554%26relation%3Dparent&amp;response_type=token%2Csigned_request%2Ccode&amp;sdk=joey" style="display: none;"></iframe></div></div></div>
        <div class="panel-heading" style="text-align:center">
            HỖ TRỢ GIẢI THÍCH <?php if($type=="tv"){echo "TỪ VỰNG";}
            elseif($type=="np"){echo "NGỮ PHÁP";}
            else{
                echo "KANJI";}
            ?> 24/24
        </div>
        <div class="panel-body" style="height:450px; overflow-y:auto;">
            <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-href="http://kawa.edu.vn/{{$type}}" data-numposts="10" data-width="100%" fb-xfbml-state="rendered"><span style="height: 1909px;"><iframe id="f28b9ed3d6c848" name="f310a6b7221f31" scrolling="no" title="Facebook Social Plugin" class="fb_ltr fb_iframe_widget_lift" src="https://www.facebook.com/plugins/comments.php?api_key=189738071197131&amp;channel_url=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F87XNE1PC38r.js%3Fversion%3D42%23cb%3Df39d807d23f3504%26domain%3Dyamada.edu.vn%26origin%3Dhttp%253A%252F%252Fyamada.edu.vn%252Ff2b3be33eb82554%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fyamada.edu.vn%2F{{$type}}&amp;locale=vi_VN&amp;numposts=10&amp;sdk=joey&amp;width=100%25" style="border: none; overflow: hidden; height: 1909px; width: 100%;"></iframe></span></div>
        </div>

    </div>
@endsection