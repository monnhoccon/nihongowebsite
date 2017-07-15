@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm Cho Mục Khóa Học
                </h1>
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
                @if(session('alert'))
                    <div class="alert alert-success">
                        {{session('alert')}}
                    </div>
                    @endif
                <form action="admin/khoahoc/add" method="POST" enctype="multipart/form-data">
                    <input hidden name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Loại muốn thêm</label>
                        <select name="Loai" class="form-control">
                            <option value="">Chọn Loại Muốn Thêm</option>
                            <option value="lichkhaigiang">Lịch Khai Giảng</option>
                            <option value="socapn5">Sơ Cấp N5</option>
                            <option value="socapn4">Sơ Cấp N4</option>
                            <option value="trungcapn3">Trung Cấp N3</option>
                            <option value="caocapn2">Cao Cấp N2</option>
                            <option value="caocapn1">CaoN1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tiêu Đề:</label>
                        <input class="form-control" name="Title" placeholder="Tiêu Đề" />
                    </div>
                    <div style="padding-bottom: 10px;">
                        <label>Chọn Ảnh Đại Diện</label>
                        <input title="Chọn Ảnh Đại Diện" type="file" name="hinhDaiDien" id="hinhDaiDien">
                    </div>
                    <div class="form-group">
                        <div>
                            <label>Nội Dung Tóm Tắt</label>
                        </div>
                        <textarea name="NoiDungTomTat" id="NoiDungTomTat" cols="50" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea name="Body" id="Body"></textarea>
                        <script src="{{asset('ckeditor/ckeditor.js') }}"></script>
                        <script>
                            CKEDITOR.replace('Body',{
                                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                            });
                        </script>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
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