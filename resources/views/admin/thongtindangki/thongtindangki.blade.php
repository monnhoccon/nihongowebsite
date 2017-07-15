@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách Thông tin đăng kí
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
                        <th>Tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Ngày sinh</th>
                        <th>Tin nhắn</th>
                        <th>Ngày đăng kí</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($thongtindangki as $ttdk)
                        <tr class="odd gradeX" align="center">
                            <td>{{$ttdk->id}}</td>
                            <td>{{$ttdk->name}}</td>
                            <td>{{$ttdk->phone}}</td>
                            <td>{{$ttdk->email}}</td>
                            <td>{{$ttdk->birthday}}</td>
                            <td>{{$ttdk->message}}</td>
                            <td>{{$ttdk->date}}</td>
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