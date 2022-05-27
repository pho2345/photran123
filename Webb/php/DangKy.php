<!DOCTYPE html>
<html lang="en">

<head>
	<title>Đăng ký</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
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
	<!-- <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css"> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript" language="javascript" src="../js/function.js"></script>
	<style>
		
	</style>
	<!--===============================================================================================-->
</head>

<body>

	<div class="container-login100" style="background-image: url('../images/bg-02.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
	<form action="sanpham.php" method="post" >
				<span class="login100-form-title p-b-37">
					Đăng Ký
				</span>

				<div class="wrap-input100  m-b-20" data-validate="Nhập tên đăng nhập">
					<input class="input100" type="text" name="username" id="username" placeholder="Tên đăng nhập">
					<span style="padding-left:10px" class="hideMe" id="errlogin"></span>
				</div>

				<div class="wrap-input100  m-b-25" data-validate="Nhập email">
					<input class="input100" type="text" name="email" id="email" placeholder="Email">
					<span style="padding-left:10px" class="hideMe" id="erremail"></span>
				</div>

				<div class="wrap-input100  m-b-25" data-validate="Nhập mật khẩu">
					<input class="input100" type="password" name="pass" id="pass" placeholder="Mật khẩu">
					<span style="padding-left:10px" class="hideMe" id="errpass"></span>
				</div>

				<div class="wrap-input100  m-b-25" data-validate="Nhập lại mật khẩu">
					<input class="input100" type="password" name="repass" id="repass" placeholder="Nhập lại mật khẩu">
					<span style="padding-left:10px" class="hideMe" id="errrepass"></span>
				</div>

				<div class="wrap-input100  m-b-25" data-validate="Nhập họ và tên">
					<input class="input100" type="text" name="name" id="name" placeholder="Họ và tên">
					<span style="padding-left:10px" class="hideMe" id="errname"></span>
				</div>

				<div class="wrap-input100  m-b-25" data-validate="Nhập SĐT">
					<input class="input100" type="text" name="phone" id="phone" placeholder="SĐT">
					<span style="padding-left:10px" class="hideMe" id="errphone"></span>
				</div>

				<div class="wrap-input100  m-b-25" data-validate="Nhập Địa chỉ">
					<input class="input100" type="text" name="address" id="address" placeholder="Địa chỉ">
					<span style="padding-left:10px" class="hideMe" id="erraddress"></span>
				</div>

				<div class="text-center p-t-5 p-b-20">
					<span class="txt3" id="kiemtra">

					</span>
				</div>

				<div class="container-login100-form-btn p-b-20">
					<input type="submit" class="login100-form-btn" value="Đăng ký" id="register" onclick="submitdangky()">


				</div>

				<div class="text-center">
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