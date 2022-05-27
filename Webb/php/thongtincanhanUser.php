<?php 
	ini_set('session.auto_start',0);
	ini_set('session.cookie_lifetime',0);
	include 'sl.php';
	require('common.php');
	if(isLogined()==false)
	{
			header("Location:DangNhap.php");
	}
	//đã đang nhập
	if(isLogined()==true)
		// kiểm tra đây là khách hàng thì về trang chủ kh
		if($_SESSION['login']['MaQuyen'] == "1" || $_SESSION['login']['MaQuyen'] == "2" )
		{
				header("Location:admin.php");
		}
		
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nhà sách OnePiece</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" language="javascript" src="../js/showBook.js"></script>
	<script type="text/javascript" language="javascript" src="../js/validateAdmin.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/chitietsach.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" language="javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="../js/giohang.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery.min.js"></script>
</head>
<body>
	<!--------------- header --------------->
	<nav class="navbar navbar-inverse " style="border-radius:0px">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="../index.php" title="Trang chủ"><img src="../images/onepiece.PNG" style="margin:-16px" width="200px" height="52px" alt="logo-trang chủ"></a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">

				<div class="row">    
					<div class="col-md-5 col-md-offset-2">
						<form class="navbar-form navbar-left" action="" name="searchIndex">
							<div class="input-group" >
								<input type="text" class="form-control" placeholder="Tìm kiếm" name="search" size="44">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</div>
							</div>
						</form>	
					</div>

					<ul class="nav navbar-nav navbar-right" >
						<li id="loginn"><a href="DangNhap.php"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
						<li id="logout" class=""><a href="DangKy.php"><span class="glyphicon glyphicon-log-in"></span> Đăng ký</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!---------------- slder ----------------->
	<div id="carousel-1" class="carousel slide multi-item-carousel" data-ride="carousel" style="margin-top:-20px;height:350px">
		<ol class="carousel-indicators">
			<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-1" data-slide-to="1"></li>
			<li data-target="#carousel-1" data-slide-to="2"></li>
			<li data-target="#carousel-1" data-slide-to="3"></li>
			<li data-target="#carousel-1" data-slide-to="4"></li>
			<li data-target="#carousel-1" data-slide-to="5"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active" style="height:350px">
				<div class="item__third" style="height:350px">
					<img src="../images/qc/0.png" alt="" style="height:350px">
				</div>
			</div>
			<div class="item" style="height:350px">
				<div class="item__third" style="height:350px">
					<img src="../images/qc/1.png" alt="" style="height:350px">
				</div>
			</div>
			<div class="item" style="height:350px">
				<div class="item__third" style="height:350px">
					<img src="../images/qc/2.png" alt="" style="height:350px">
				</div>
			</div>
			<div class="item" style="height:350px">
				<div class="item__third" style="height:350px">
					<img src="../images/qc/3.png" alt="" style="height:350px">
				</div>
			</div>
			<div class="item" style="height:350px">
				<div class="item__third" style="height:350px">
					<img src="../images/qc/4.png" alt="" style="height:350px">
				</div>
			</div>
			<div class="item" style="height:350px">
				<div class="item__third" style="height:350px">
					<img src="../images/qc/5.png" alt="" style="height:350px">
				</div>
			</div>

		</div>
		<a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
		<a href="#carousel-1" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	</div>

	<style>
		.multi-item-carousel {
			overflow: hidden;
		}
		.multi-item-carousel img {
			height: auto;
			width: 100%;
		}
		.multi-item-carousel .carousel-control.left, 
		.multi-item-carousel .carousel-control.right {
			background: rgba(255, 255, 255, 0.3);
			width: 25%;
		}
		.multi-item-carousel .carousel-inner {
			width: 150%;
			left: -25%;
		}
		.carousel-inner > .item.next, 
		.carousel-inner > .item.active.right {
			-webkit-transform: translate3d(33%, 0, 0);
			transform: translate3d(33%, 0, 0);
		}
		.carousel-inner > .item.prev, 
		.carousel-inner > .item.active.left {
			-webkit-transform: translate3d(-33%, 0, 0);
			transform: translate3d(-33%, 0, 0);
		}
		.item__third {
			float: left;
			position: relative;  /* captions can now be added */
			width: 33.33333333%;
		}

	</style>
	<script>
		$('.multi-item-carousel .item').each(function(){
			var next = $(this).next();
			if (!next.length) next = $(this).siblings(':first');
			next.children(':first-child').clone().appendTo($(this));
		});
		$('.multi-item-carousel .item').each(function(){
			var prev = $(this).prev();
			if (!prev.length) prev = $(this).siblings(':last');
			prev.children(':nth-last-child(2)').clone().prependTo($(this));
		});
	</script>


	<!------------- navbar menu ---------------->
	<nav class="navbar navbar-inverse" style="margin-top:0px;border-radius:0px">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar2">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="../index.php">Trang chủ</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thể loại <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="sanpham.php?theloai=hocngoaingu&page=1" >Học ngoại ngữ</a></li>
							<li><a href="sanpham.php?theloai=kinhte&page=1" >Kinh tế</a></li>
							<li><a href="sanpham.php?theloai=kynangsong&page=1" >Kỹ năng sống</a></li>
							<li><a href="sanpham.php?theloai=lichsu&page=1" >Lịch sử</a></li>
							<li><a href="sanpham.php?theloai=chuyennganh&page=1" >Sách chuyên ngành</a></li>
							<li><a href="sanpham.php?theloai=thieunhi&page=1" >Sách thiếu nhi</a></li>
							<li><a href="sanpham.php?theloai=tuoiteen&page=1" >Sách tuổi teen</a></li>
							<li><a href="sanpham.php?theloai=vanhoc&page=1" >Sách văn học</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header"></li>
							<li><a href="sanpham.php?theloai=tatca&page=1">Tất cả</a></li>
						</ul>
					</li>
				</ul>
				
				
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="giohang.php"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng<span id="slm" class="badge badge-secondary " style="margin-bottom: 2px;"><?php echo $soluongsp?></span></a>
					</li>
				</ul>
			</div>


		</div>
	</nav>
	<!---------------------content sach ----------------------->
	<div class="container" >
		<div class="row">
			
			<div class="col-md-2 ">
				<div class="list-group" style="margin-top:20px">
					<a href="sanpham.php?theloai=hocngoaingu&page=1" class="list-group-item" >Học ngoại ngữ</a>
					<a href="sanpham.php?theloai=kinhte&page=1" class="list-group-item" >Kinh tế</a>
					<a href="sanpham.php?theloai=kynangsong&page=1" class="list-group-item" >Kỹ năng sống</a>
					<a href="sanpham.php?theloai=lichsu&page=1" class="list-group-item" >Lịch sử</a>
					<a href="sanpham.php?theloai=chuyennganh&page=1" class="list-group-item" >Sách chuyên ngành</a>
					<a href="sanpham.php?theloai=thieunhi&page=1" class="list-group-item" >Sách thiếu nhi</a>
					<a href="sanpham.php?theloai=tuoiteen&page=1" class="list-group-item" >Sách tuổi teen</a>
					<a href="sanpham.php?theloai=vanhoc&page=1" class="list-group-item" >Sách văn học</a>
				</div>

				<form name="timkiemnangcao">
					<fieldset>
						<legend style="font-size:1.33em">Tìm kiếm nâng cao</legend>

						<legend style="font-size:1.2em;padding-left:10px">Thể loại</legend>
						<select name ="theloai" style="padding:5px  10px;margin-left:3px">
							<option>--Chọn--</option>
							<option>Kinh tế</option>
							<option>Kỹ năng sống</option>
							<option>Sách thiếu nhi</option>
							<option>Sách tuổi teen</option>
							<option>Sách văn học</option>
							<option>Học ngoại ngữ</option>
							<option>Sách chuyên ngành</option>
							<option>Sách lịch sử</option>
						</select>

						<legend style="font-size:1.2em;padding-left:10px;margin-top:20px">Nhập giá</legend>
						Từ <input type="text" name="giatu" style="padding:5px  10px;margin-left:18px;width:125px;" ><br>
						Đến <input type="text" name="giaden" style="padding:5px  10px;margin-left:10px;margin-top:10px;width:125px;" >

						<legend style="font-size:1.2em;padding-left:10px;margin-top:20px">Sắp xếp</legend>
						<select name="sapxep"style="padding:5px  10px">
							<option>--Chọn--</option>
							<option>Giá từ thấp tới cao</option>
							<option>Giá từ cao đến thấp</option>
							<option>Theo tên từ A đến Z</option>
							<option>Theo tên từ Z đến A</option>
						</select>

					</fieldset>
				</form>

			</div>

			<div class="col-md-10">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Thông tin cá nhân</h1>
					</div>
				</div>

				<!-- ... Your content goes here ... -->
				<div clas="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
								<form name="suauser" action="updateUser.php" method="post"  onsubmit="return ValidateFormEditUser()">
									<div class="col-lg-6">
										
											<div class="form-group">
												<label>Mã khách hàng</label>
												<input class="form-control" name="makhachhang" readonly value="<?php echo $_SESSION['login']['MaKH']; ?>">
											</div>
											<div class="form-group">
												<label>Họ tên</label>
												<input class="form-control" name="hoten" value="<?php echo $_SESSION['login']['HoTen']; ?>">
												<i style="color:red" id='loihoten'></i>
											</div>
											<div class="form-group">
												<label>Tên đăng nhập</label>
												<input class="form-control" name="tendangnhap"  readonly value="<?php echo $_SESSION['login']['TenDangNhap']; ?>">
											</div>
											<div class="form-group">
												<a href=""><i class='fa fa-lock fa-fw'></i>Đổi mật khẩu</a>
											</div>
										
									</div>
									<div class="col-lg-6">
										
											<div class="form-group">
												<label>Email</label>
												<input class="form-control" name="email" value="<?php echo $_SESSION['login']['Email']; ?>">
												<i style="color:red" id='loiemail'></i>
											</div>
											<div class="form-group">
												<label>Số điện thoại</label>
												<input class="form-control" name="sdt" value="<?php echo $_SESSION['login']['SĐT']; ?>">
												<i style="color:red" id='loisdt'></i>
											</div>
											
										
									</div>
									<div class="row">
											<div class="col-lg-12">
												<center>
													<button type="submit" class="btn btn-default">Sửa</button>
													<button type="reset" class="btn btn-default">Đặt lại</button>
												</center>
											</div>
										</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
			
			
			                              <!---------------------- footer ----------------------->
			<div class="container">
				<hr style="border:1px solid black;">
				<div class="gioithieu">
					<h4>Mua Sách Online Tại Onepiece.Vn</h4><br>
					<p>- Ra đời từ năm 2011, đến nay Onepiece.vn đã trở thành địa chỉ mua sách online quen thuộc của hàng ngàn độc giả trên cả nước. Với đầu sách phong phú, thuộc các thể loại: Văn học nước ngoại, Văn học trong nước, Kinh tế, Kỹ năng sống, Thiếu nhi, Sách học ngoại ngữ, Sách chuyên ngành,... được cập nhật liên tục từ các nhà xuất bản uy tín trong nước. </p><br>
					<p>- Khi mua sách online tại Onepiece.vn, Quý khách được Bọc plastic miễn phí đến 99% (trừ sách bìa cứng, sách dạng hộp - dạng đặc biệt, sách khổ quá to, ...)</p><br>
					<p>- Ngoài ra, với hình thức Giao hàng thu tiền tận nơi và Đổi hàng trong vòng 7 ngày nếu sách có bất kỳ lỗi nào trong quá trình in ấn sẽ giúp Quý khách yên tâm hơn khi mua sắm tại Onepiece.vn</p>

				</div>
				<hr style="border:1px solid black;">
				<div class="chitietfooter">
					<h4>HỖ TRỢ KHÁCH HÀNG</h4><br>
					Email: admin@onepiece.vn<br>
					Hotline: 0938 424 289
				</div>
				<div class="chitietfooter">
					<h4>Giới Thiệu</h4><br>
					Về Onepiece<br>
					Tuyển dụng
				</div>
				<div class="chitietfooter">
					<h4>Tài Khoản</h4><br>
					Tài khoản<br>
					Danh sách đơn hàng<br>
					Thông báo
				</div>
				<div class="chitietfooter">
					<h4>Hướng Dẫn</h4><br>
					Hướng dẫn mua hàng<br>
					Phương thức thanh toán<br>
					Câu hỏi thường gặp<br>
					Phương thức vận chuyển
				</div>
			</div>
		
		<script>
		function ValidateFormEditUser()
			{
				var name=document.forms['suauser']['hoten'].value;
				var emaill=document.forms['suauser']['email'].value;
				var phone=document.forms['suauser']['sdt'].value;
				
				var s=/^[a-zA-Z0-9 ]*$/;
				var mail=/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/;
				var dt=/0([1-9]{9}|[1-9][0-9]{8})$/;
				
				if(name=="")
						{
						document.getElementById("loihoten").innerHTML="Họ tên không được để trống";
							return false;
						}
					else if(s.test(name)==false)
						{
						document.getElementById("loihoten").innerHTML="Họ tên không hợp lệ, vui lòng nhập lại.";
							return false;
						}		
						
					else if(emaill=="")
						{
							document.getElementById("loiemail").innerHTML="Email không được để trống";
							return false;
						}
					else if(mail.test(emaill)==false)
						{
							document.getElementById("loiemail").innerHTML="Email không hợp lệ, vui lòng nhập lại.";	
							return false;
						}
					
					else if(phone=="")
						{
						document.getElementById("loisdt").innerHTML="Số điện thoại không được để trống";
							return false;
						}	
					
					else if(dt.test(phone)==false)
						{
						document.getElementById("loisdt").innerHTML="Số điện thoại không hợp lệ, vui lòng nhập lại.";	
							return false;	
						}
					else 
						{
							if(confirm("Bạn có muốn sửa thông tin của mình ?")==false)
							return false;
						}
			}
	</script>
		
<?php
	if(isLogined()==true)
	{
		echo "<script>
		document.getElementById('loginn').innerHTML=''; 
		</script>";
		 	$s="<a class=\'dropdown-toggle\' data-toggle=\'dropdown\' href=\'#\'>"
                .    "<i class=\'glyphicon glyphicon-user\'></i> ".$_SESSION['login']['TenDangNhap']." <b class=\'caret\'></b>"
                ."</a>"
                ."<ul class=\'dropdown-menu\'>"
                .    "<li><a href=\'thongtincanhanUser.php\'><i class=\'glyphicon glyphicon-user\'></i> Thông tin tài khoản </a>"
                .    "</li>"
				.    "<li><a href=\'#\'><i class=\'glyphicon glyphicon-list-alt\'></i> Xem đơn hàng </a>"
                .    "</li>"
                .    "<li class=\'divider\'></li>"
                .    "<li><a href=\'xulydangnhapUser.php?dangxuat=1\'><i class=\'glyphicon glyphicon-log-out\'></i> Đăng xuất </a>"
                .    "</li>"
                ."</ul>";
		echo "<script>"
		."document.getElementById('logout').setAttribute('class','dropdown'); "
		."document.getElementById('logout').innerHTML='".$s."';"
		."</script>";
	}
?>
	</body>
	</html>

