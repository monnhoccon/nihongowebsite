<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trung tâm tiếng Nhật Yamada">
    <meta name="author" content="">

    <title>Admin - Login</title>
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng Nhập Admin</h3>
                </div>
                <div class="panel-body">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                    <form role="form" action="admin/login" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="user" id="user" type="user" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" id="pass" type="password" value="">
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            {{csrf_field()}}
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="asset_admin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="asset_admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="asset_admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="asset_admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
