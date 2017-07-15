@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách Hình Ảnh Thay Thế
                    </h1>
                </div>
                @if(session('alert'))
                    <div class="alert alert-success">
                        {{session('alert')}}
                    </div>
            @endif
            <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên Ảnh</th>
                        <th>Hình ảnh</th>
                        <th>Nơi Chứa</th>
                        <th>Kích thước</th>
                        <th>Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $img)
                        <tr class="odd gradeX" align="center">
                            <td>{{$img->id}}</td>
                            <td>{{$img->tenanh}}</td>
                            <td>
                                <img width="250px" height="150px" src="{{asset('images/')}}/{{$img->noichua}}/{{$img->tenanh}}" alt="{{$img->tenanh}}">
                            </td>
                            <td>{{$img->noichua}}</td>
                            
                            <td>{{$img->kichthuoc}}</td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/hinhanh/edit/{{$img->id}}">Sửa</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection