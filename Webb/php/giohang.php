<?php 
ini_set('session.auto_start',0);
ini_set('session.cookie_lifetime',0);
include 'sl.php';
require('common.php');
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
	<script type="text/javascript" language="javascript" src="../js/giohang.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery-3.3.1.min.js"></script>
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


	<!--------------------------------------------- navbar menu ------------------------------------------------->

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
						<a href="giohang.php"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng <span class="badge badge-secondary " style="margin-bottom: 2px;"><?php echo $soluongsp ?></span></a>
					</li>
				</ul>
			</div>


		</div>
	</nav>
	<!---------------------content sach ----------------------->
	<div class="container" >
		<h3>Giỏ hàng</h3>
		<hr style="border:1px solid black;">
		<div id="giohangrong">
			<?php
			include 'cart.php';
			if(!empty($_SESSION['cart'])){
			// echo "<pre />";
			 //var_dump($_SESSION['cart']);
				$s="";
				$demsl=0;
				$tong=0;
				$ship=50000;
				foreach ($_SESSION['cart'] as $key => $value) {
				//var_dump($key);
					if($_SESSION['cart'][$key]['theloai']=='NN'){
						$s=$s.'<tr id="'.$key.'">
						<td><img class="icon" src="../images/thungrac.gif" alt="" onclick="xoasp(`'.$key.'`)"></td>
						<td>
						<a href="chitietsach.php?theloai=hocngoaingu&masach='.$key.'"><img class="biasach" src="../images/ngoaingu/'.$_SESSION["cart"][$key]["hinhanh"].'" alt=""></a></td>
						<td>'.$_SESSION["cart"][$key]["tensach"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]).'đ</td>
						<td>'.$_SESSION["cart"][$key]["sl"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"]).'đ</td>
						</tr>';
						$demsl+=$_SESSION["cart"][$key]["sl"];
						$tong+=$_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"];
					}
					if($_SESSION['cart'][$key]['theloai']=='CN'){
						$s=$s.'<tr id="'.$key.'">
						<td><img class="icon" src="../images/thungrac.gif" alt="" onclick="xoasp(`'.$key.'`)"></td>
						<td>
						<a href="chitietsach.php?theloai=chuyennganh&masach='.$key.'"><img class="biasach" src="../images/chuyennganh/'.$_SESSION["cart"][$key]["hinhanh"].'" alt=""></a></td>
						<td>'.$_SESSION["cart"][$key]["tensach"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]).'đ</td>
						<td>'.$_SESSION["cart"][$key]["sl"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"]).'đ</td>
						</tr>';
						$demsl+=$_SESSION["cart"][$key]["sl"];
						$tong+=$_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"];
					}
					if($_SESSION['cart'][$key]['theloai']=='KNS'){
						$s=$s.'<tr id="'.$key.'">
						<td><img class="icon" src="../images/thungrac.gif" alt="" onclick="xoasp(`'.$key.'`)"></td>
						<td>
						<a href="chitietsach.php?theloai=kynangsong&masach='.$key.'"><img class="biasach" src="../images/kynangsong/'.$_SESSION["cart"][$key]["hinhanh"].'" alt=""></a></td>
						<td>'.$_SESSION["cart"][$key]["tensach"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]).'đ</td>
						<td>'.$_SESSION["cart"][$key]["sl"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"]).'đ</td>
						</tr>';
						$demsl+=$_SESSION["cart"][$key]["sl"];
						$tong+=$_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"];
					}
					if($_SESSION['cart'][$key]['theloai']=='KT'){
						$s=$s.'<tr id="'.$key.'">
						<td><img class="icon" src="../images/thungrac.gif" alt="" onclick="xoasp(`'.$key.'`)"></td>
						<td>
						<a href="chitietsach.php?theloai=kinte&masach='.$key.'"><img class="biasach" src="../images/kinhte/'.$_SESSION["cart"][$key]["hinhanh"].'" alt=""></a></td>
						<td>'.$_SESSION["cart"][$key]["tensach"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]).'đ</td>
						<td>'.$_SESSION["cart"][$key]["sl"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"]).'đ</td>
						</tr>';
						$demsl+=$_SESSION["cart"][$key]["sl"];
						$tong+=$_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"];
					}
					if($_SESSION['cart'][$key]['theloai']=='LS'){
						$s=$s.'<tr id="'.$key.'">
						<td><img class="icon" src="../images/thungrac.gif" alt="" onclick="xoasp(`'.$key.'`)"></td>
						<td>
						<a href="chitietsach.php?theloai=lichsu&masach='.$key.'"><img class="biasach" src="../images/lichsu/'.$_SESSION["cart"][$key]["hinhanh"].'" alt=""></a></td>
						<td>'.$_SESSION["cart"][$key]["tensach"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]).'đ</td>
						<td>'.$_SESSION["cart"][$key]["sl"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"]).'đ</td>
						</tr>';
						$demsl+=$_SESSION["cart"][$key]["sl"];
						$tong+=$_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"];
					}
					if($_SESSION['cart'][$key]['theloai']=='TN'){
						$s=$s.'<tr id="'.$key.'">
						<td><img class="icon" src="../images/thungrac.gif" alt="" onclick="xoasp(`'.$key.'`)"></td>
						<td>
						<a href="chitietsach.php?theloai=thieunhi&masach='.$key.'"><img class="biasach" src="../images/thieunhi/'.$_SESSION["cart"][$key]["hinhanh"].'" alt=""></a></td>
						<td>'.$_SESSION["cart"][$key]["tensach"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]).'đ</td>
						<td>'.$_SESSION["cart"][$key]["sl"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"]).'đ</td>
						</tr>';
						$demsl+=$_SESSION["cart"][$key]["sl"];
						$tong+=$_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"];
					}
					if($_SESSION['cart'][$key]['theloai']=='TT'){
						$s=$s.'<tr id="'.$key.'">
						<td><img class="icon" src="../images/thungrac.gif" alt="" onclick="xoasp(`'.$key.'`)"></td>
						<td>
						<a href="chitietsach.php?theloai=tuoiteen&masach='.$key.'"><img class="biasach" src="../images/tuoiteen/'.$_SESSION["cart"][$key]["hinhanh"].'" alt=""></a></td>
						<td>'.$_SESSION["cart"][$key]["tensach"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]).'đ</td>
						<td>'.$_SESSION["cart"][$key]["sl"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"]).'đ</td>
						</tr>';
						$demsl+=$_SESSION["cart"][$key]["sl"];
						$tong+=$_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"];
					}
					if($_SESSION['cart'][$key]['theloai']=='VH'){
						$s=$s.'<tr id="'.$key.'">
						<td><img class="icon" src="../images/thungrac.gif" alt="" onclick="xoasp(`'.$key.'`)"></td>
						<td>
						<a href="chitietsach.php?theloai=vanhoc&masach='.$key.'"><img class="biasach" src="../images/vanhoc/'.$_SESSION["cart"][$key]["hinhanh"].'" alt=""></a></td>
						<td>'.$_SESSION["cart"][$key]["tensach"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]).'đ</td>
						<td>'.$_SESSION["cart"][$key]["sl"].'</td>
						<td>'.number_format($_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"]).'đ</td>
						</tr>';
						$demsl+=$_SESSION["cart"][$key]["sl"];
						$tong+=$_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"];
					}

				}
				echo '<table class="table table-striped" id="muahang">
				<thead>
				<tr style="background-color: #101010;">
				<th>Xoá</th>
				<th>Sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Tổng tiền</th>
				</tr>
				</thead>
				<tbody>
				'.$s.'
				</tbody>
				</table>';

				echo '<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
				<div  class="col-md-4">
				<table class="table table-striped">
				<thead>
				<tr style="background-color: #101010;">
				<th colspan="2" style="text-align: center;">Tổng giỏ hàng</th>
				</tr>
				</thead>
				<tbody>
				<tr>
				<td>Số lượng sản phẩm</td>
				<td id="demsl">'.$demsl.'</td>
				</tr>
				<tr>
				<td>Tổng</td>
				<td id="tong">'.number_format($tong).'đ</td>
				</tr>
				<tr>
				<td>Phí vận chuyển</td>
				<td>'.number_format($ship).'đ</td>
				</tr>
				<tr>
				<td colspan="2" align="center">
				<hr width="70%" style="border: 1px solid;margin: 0">
				</td>
				</tr>	
				<tr>
				<td>Thành tiền</td>
				<td id="thanhtien">'.number_format($tong+$ship).'đ</td>
				</tr>
				<tr>
				<td align="center" colspan="2"><input type="button" value="Thanh toán" class="thanhtoan"></td>
				</tr>
				</tbody>
				</table>
				</div>
				</div>';
			}
			else {
				echo '<table class="table"><tr><td style="background-color:#ddd; height: 150px;text-align: center;padding-top:100px ">Không có sản phẩm nào trong giỏ hàng của bạn</td></tr><tr><td style="background-color:#ddd;border: 0;height: 200px;text-align: center;"><button class="thanhtoan" onclick="window.location.assign(`../index.php`)">Tiếp tục mua sắm</button></td></tr></table>';
			}
			?>
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
</div>

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
