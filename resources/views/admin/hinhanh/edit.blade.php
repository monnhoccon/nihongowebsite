@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thay đổi ảnh
                    </h1>
                    <img style="border-radius: 10px;" width="500px" height="350px" src="images/{{$images->noichua}}/{{$images->tenanh}}" alt="{{$images->tenanh}}">
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('failed'))
                        <div class="alert alert-danger">
                            {{session('failed')}}
                        </div>
                    @endif
                    @if(session('alert'))
                        <div class="alert alert-success">
                            {{session('alert')}}
                        </div>
                    @endif
                    <form action="admin/hinhanh/edit/{{$images->id}}" method="POST" enctype="multipart/form-data">
                        <input hidden name="_token" value="{{csrf_token()}}"/>

                        <div style="padding-bottom: 10px;">
                            <label>Chọn Ảnh thay thế</label>
                            <input title="Chọn Ảnh Thay Thế" type="file" name="hinhAnh" id="hinhAnh">
                        </div>
                        <div class="form-group">
                            <div>
                                <label>Vui lòng chọn ảnh có kích thước:{{$images->kichthuoc}}</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        {{csrf_field()}}
                    </form>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection