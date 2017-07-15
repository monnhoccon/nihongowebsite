@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tiêu Đề: {{$khoahoc->Title}}
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
                <form action="admin/khoahoc/edit/{{$khoahoc->id}}" method="POST" enctype="multipart/form-data">
                    <input hidden name="_token" value="{{csrf_token()}}"/>
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
                                filebrowserBrowseUrl : '../kcfinder/browse.php?opener=ckeditor&type=files',
                                filebrowserImageBrowseUrl : '../kcfinder/browse.php?opener=ckeditor&type=images',
                                filebrowserFlashBrowseUrl : '../kcfinder/browse.php?opener=ckeditor&type=flash',
                                filebrowserUploadUrl : '../kcfinder/upload.php?opener=ckeditor&type=files',
                                filebrowserImageUploadUrl : '../kcfinder/upload.php?opener=ckeditor&type=images',
                                filebrowserFlashUploadUrl : '../kcfinder/upload.php?opener=ckeditor&type=flash'
                            });
                        </script>

                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
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