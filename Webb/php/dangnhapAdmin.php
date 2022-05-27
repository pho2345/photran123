<?php
	
	session_start();
	require('common.php');
	if(isLogined()==true)
	{
		if($_SESSION['login']['MaQuyen']=="1" || $_SESSION['login']['MaQuyen']=="2" )
			header("Location:admin.php");
		else 
		{
			echo "alert('Bạn không có quyền vào trang này')";
			header("Location:../index.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Nhà sách OnePiece</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
		<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
		<!--<script type="text/javascript" language="javascript" src="../js/bootstrap.js"></script>-->
		<script type="text/javascript" language="javascript" src="../js/showBook.js"></script>
		<script type="text/javascript" language="javascript" src="../js/validateAdmin.js"></script>
		
		<!-- MetisMenu CSS -->
    <link href="../css/admin/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/admin/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/admin/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/admin/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Đăng nhập</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" name='dangnhapadmin' action='xulydangnhapAdmin.php' method='post' onsubmit='return validateFormLoginAdmin()'>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Tên đăng nhập" name="tendangnhap" type="text" autofocus value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mật khẩu" name="matkhau" type="password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="nhomatkhau">Nhớ mật khẩu
                                        </label>
                                    </div><i style="color:red" id='loidn'><?php if(isset($_GET['loidangnhap']) && $_GET['loidangnhap']=="1" ) echo "Tên đăng nhập hoặc mật khẩu không đúng" ?></i>
                                    <!-- Change this to a button or input when using this as a form -->
									<div class="form-group">
                                        <input class="form-control" name="dangnhap" type="hidden" value="1">
                                    </div>
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Đăng nhập">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
