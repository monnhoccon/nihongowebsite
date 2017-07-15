@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh Sách Tin Đăng Mục Khóa Học
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
                    <th>Tiêu Đề</th>
                    <th>Mục</th>
                    <th>Hình Đại Diện</th>
                    <th>Nội Dung Tóm Tắt</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($khoahoc as $kh)
                <tr class="odd gradeX" align="center">
                    <td>{{$kh->id}}</td>
                    <td>{{$kh->Title}}</td>
                    <td>{{$kh->Loai}}</td>
                    <td>
                        <img width="250px" height="150px" src="{{asset('images/khoahoc/')}}/{{$kh->Hinh}}" alt="{{$kh->Hinh}}">
                    </td>
                    <td>{{$kh->NoiDungTomTat}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khoahoc/delete/{{$kh->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/khoahoc/edit/{{$kh->id}}">Edit</a></td>
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