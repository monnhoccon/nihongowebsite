@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lesson
                    <small>List</small>
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
                    <th>Hình Đại Diện</th>
                    <th>Cấp</th>
                    <th>Loại</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lesson as $ls)
                <tr class="odd gradeX" align="center">
                    <td>{{$ls->id}}</td>
                    <td>{{$ls->Title}}</td>
                    <td>
                        <img width="250px" height="150px" src="{{asset('images/lesson/')}}/{{$ls->Hinh}}" alt="{{$ls->Hinh}}">
                    </td>
                    <td>{{$ls->idLevel}}</td>
                    <td>{{$ls->idType}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/lesson/delete/{{$ls->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/lesson/edit/{{$ls->id}}">Edit</a></td>
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