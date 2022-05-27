<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('../images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
			<form class="login100-form validate-form" name="formdangnhap" method="post"  action="xulydangnhapUser.php" onsubmit="ktdangnhap()">
				<span class="login100-form-title p-b-37">
					Đăng Nhập
				</span>

				<div class="wrap-input100   m-b-20" data-validate="Nhập tên đăng nhập hoặc email ">
					<input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-25" data-validate = "Nhập mật khẩu">
					<input class="input100" type="password" name="pass" placeholder="Mật khẩu">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 m-b-25">
					<input class="input100" type="hidden" name="dangnhap" value="1">
					<span class="focus-input100"></span>
				</div>
				
				<div class="text-center p-t-10 p-b-20">
					<span>
						<input type="checkbox" name="nhomatkhau">
					</span>
					<span class="txt1">
						Nhớ mật khẩu
					</span>
				</div>

				<div class="text-center p-t-5 p-b-20">
					<span class="txt3" id="kiemtra">
						<i style="color:red"><?php if(isset($_GET['loidangnhap']) && $_GET['loidangnhap']=="1" ) echo "Tên đăng nhập hoặc mật khẩu không đúng" ?></i>
					</span>
				</div>
				
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit"  >
						Đăng nhập
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Hoặc đăng nhập với
					</span>
				</div>

				<div class="flex-c p-b-45">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="../images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center">
					<a href="DangKy.php" class="txt2 hov1 m-r-10">
						Đăng ký
					</a>
					|
					<a href="../index.php" class="txt2 hov1 m-l-10">
						Quay lại
					</a>	
						
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>
	<script src="../js/Validate.js"></script>

</body>
</html>
