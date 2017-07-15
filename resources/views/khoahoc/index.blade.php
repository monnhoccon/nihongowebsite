@extends('Layout')
@section('content')

    <div class="container">
        <div class="row">
            <style>
                div img {
                    text-align: center;
                }
            </style>
            @foreach($khoahoc as $kh)
                <h1 align="center">{{$kh->Title}}</h1>
                <br>
                <div>
                    <?php echo $kh->Body?>
                </div>
            @endforeach
            <div>
                <p>Bài viết liên quan:</p>
                @foreach($tags as $tag)
                    <a href="khoahoc/{{$tag->type}}/{{$tag->name}}">{{$tag->name_tags}}</a>
                @endforeach
            </div>
        </div>

    </div>

@endsection