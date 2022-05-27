<?php
require('GetCategory.php');

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
	<link rel="stylesheet" type="text/css" href="../css/chitietsach.css">
	<script type="text/javascript" language="javascript" src="../js/function.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" language="javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="../js/giohang.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery.min.js"></script>
	<style>
		.css-12whm6j {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 7px;
			margin-top: 20px;
		}

		.mt2-sm {
			margin-top: 8px;
		}



		input[type=radio] {
			-webkit-appearance: radio;
			-webkit-box-flex: 1;
			flex-grow: 1;
			clip: rect(1px 1px 1px 1px);
			clip: rect(1px, 1px, 1px, 1px);
			overflow: hidden;
			white-space: nowrap;
			position: absolute !important;
			text-align: center;
			cursor: pointer;
		}

		.visually-hidden {
			position: absolute !important;
			height: 1px;
			width: 1px;
			overflow: hidden;
			clip: rect(1px 1px 1px 1px);
			clip: rect(1px, 1px, 1px, 1px);
			white-space: nowrap;
		}


		input[type="radio"]:checked {
			box-shadow: 0 0 0 3px orange;
		}

		input:checked+label {
			color: red;
			border: solid 1px red;
			border-radius: 3px;
		}

		.conhang {
			border: solid 1px black;
			text-align: center;
			font-size: 30px;
			cursor: pointer;
		}

		.hethang {
			text-align: center;
			border: solid 1px #C0C0C0;
			background: #FFFAFA;
			color: #C0C0C0;
			font-size: 30px;
		}

		#detailproduct {
			font-size: 18px;
			margin-top: 30px;
			margin-left: 50px;
			text-align: left;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			color: black;
			margin: 0;
			padding: 0;
			border: 0;
		}

		.detailproduct {
			list-style-type: disc;
			margin-left: 16px;
			margin-bottom: 4px;
		}

		.badge {
			padding-left: 9px;
			padding-right: 9px;
			-webkit-border-radius: 9px;
			-moz-border-radius: 9px;
			border-radius: 9px;
		}

		.label-warning[href],
		.badge-warning[href] {
			background-color: #FFFAFA;
		}

		#lblCartCount {
			font-size: 12px;
			background: #ff0000;
			color: white;
			padding: 0 5px;
			vertical-align: top;
			margin-left: -10px;
			
		}
		

		@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
		
	</style>
</head>

<body>
	<!--------------- header --------------->


	<!---------------- slder ----------------->



	<!------------- navbar menu ---------------->
	<?php
	session_start();
	include 'component/header.php';
	include 'component/slider.php';
	include 'component/menu.php';



	?>





	<!---------------------content sach ----------------------->
	<div id='hideMe'></div>
	<?php

	?>

	<div class="container" id="picturedetail" style="float: left;width: 60%; height: 50%;clear:both ">
		<?php
		$Id_product = $_GET['Id_product'];
		$Idbrand = $_GET['Id_brand'];
		$Idcolor = $_GET['Id_color'];

		$sql = "select * from product where Id_product=" . $Id_product;
		$product = executeSingleResult($sql);
		$sql = "select * from brand where Id=" . $Idbrand;
		$brand = executeSingleResult($sql);
		$sql = "select * from color_anh where Id_product=" . $Id_product . " and IdColor=" . $Idcolor . "";
		$result = executeResult($sql);
		foreach ($result as $result) { ?>
			<div style="float:left;width:50%">
				<img style="" src="../images/brand/<?php echo $brand['Name'] ?>/image/<?php echo $product['Name_product'] ?>/Color_<?php echo $Idcolor ?>/<?php echo $result['Image'] ?>" class="img-responsive" alt="Image">
			</div>


		<?php } ?>


	</div>



	<div class="container" style="float: left;width: 40%; height: 50%;"></div>
	<div><?php echo $product['Name_product']; ?></div>
	<div id="colordetail">
		<?php

		$sql = "select * from detailcolor,color where detailcolor.Id_color=color.Id and Id_product=" . $Id_product;

		$color = executeResult($sql);

		foreach ($color as $color) {
			if ($color['Id'] === $Idcolor) {
		?>

				<input type="radio" checked name="color" id="<?php echo  $color['Id'] ?>" value="<?php echo  $color['Id'] ?>">
				<label class="conhang" style="background-color: <?php echo $color['Color'] ?>;height:30px;width:50px;" for="<?php echo  $color['Id'] ?>;"></label>
			<?php } else { ?>


				<input type="radio" name="color" id="<?php echo  $color['Color'] ?>" value="<?php echo  $color['Id'] ?>">
				<label class="conhang" onclick="changeColor(<?php echo $color['Id'] ?>, <?php echo $Id_product ?>,<?php echo $Idbrand ?>)" style="background-color: <?php echo $color['Color'] ?>;height:30px;width:50px" for="<?php echo  $color['Color'] ?>"></label>
		<?php }
		}



		?>
	</div>
	<div id="sizedetail" class="css-12whm6j">
		<?php
		$sql = "select * from detailsizeco where Id_product=" . $Id_product . " and IdColor=" . $Idcolor;
		$size = executeResult($sql);
		$size_new = array_values($size);

		$a[] = null;
		foreach ($size_new as $size_new) {
			array_push($a, $size_new['IdSize']);
		}
		array_shift($a);

		$sql = "select * from size";

		$arrsize = executeResult($sql);
		foreach ($arrsize as $arrsize) {
			if (in_array($arrsize['Id_size'], $a)) {
				$index = array_search($arrsize['Id_size'], $a);

				if ($size[$index]['Quantity'] > 0) { ?>


					<input type="radio" name="my-input" id="<?php echo  $arrsize['Id_size'] ?>" value="<?php echo $arrsize['Id_size']  ?>">
					<label class="conhang" for="<?php echo  $arrsize['Id_size'] ?>"><?php echo  $arrsize['Id_size'] ?></label>
				<?php } else { ?>
					<input type="radio" name="my-input" id="<?php echo  $arrsize['Id_size'] ?>" disabled>
					<label style="" class="hethang" for="<?php echo  $arrsize['Id_size'] ?>"><?php echo  $arrsize['Id_size'] ?></label>
				<?php }

				?>


			<?php } else { ?>
				<input type="radio" name="my-input" id="<?php echo  $arrsize['Id_size'] ?>" disabled>
				<label style="" class="hethang" for="<?php echo  $arrsize['Id_size'] ?>"><?php echo  $arrsize['Id_size'] ?></label>
		<?php
			}
		}

		?>

	</div>
	<div style="margin-top:40px">

		<button type="button" class="btn btn-success" onclick="addcart(<?php echo $Id_product = $_GET['Id_product'] ?>)" style="height: 50px;width:35%;">Add to cart</button>

	</div>
	<div>
		<div class="pt6-sm prl6-sm prl0-lg" id="detailproduct">
			<div class="description-preview body-2 css-1pbvugb">
				<p>Go full throttle in the Nike Dunk Low High Retro.It brings motocross-inspired details like bold branding, reflective accents and fresh materials to the wardrobe favourite.Crisp leather, bright panels and flashy details deliver high-octane energy.</p>
				<ul class="" style="margin-left:20px">
					<li class="detailproduct">Colour Shown: Black/Black/White/Hyper Royal</li>
					<li class="detailproduct">Style: DD3359-001</li>
				</ul>
			</div><button class="ncss-cta-primary-dark btn-lg underline prl0-sm pb0-sm readMoreBtn css-6q6seo"><span>View Product Details</span></button>
		</div>
	</div>


	<!---------------------- footer ----------------------->
	<div class="container" style="clear: both;">
		<hr style="border:1px solid black;">
		<div class="gioithieu">
			<h4>Mua Sách Online Tại Onepiece.Vn</h4><br>
			<p>- Ra đời từ năm 2011, đến nay Onepiec e.vn đã trở thành địa chỉ mua sách online quen thuộc của hàng ngàn độc giả trên cả nước. Với đầu sách phong phú, thuộc các thể loại: Văn học nước ngoại, Văn học trong nước, Kinh tế, Kỹ năng sống, Thiếu nhi, Sách học ngoại ngữ, Sách chuyên ngành,... được cập nhật liên tục từ các nhà xuất bản uy tín trong nước. </p><br>
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
	<script>
		(function($) {
			$('.spinner .btn:first-of-type').on('click', function() {
				$('.spinner input').val(parseInt($('.spinner input').val(), 10) + 1);
			});
			$('.spinner .btn:last-of-type').on('click', function() {
				$('.spinner input').val(parseInt($('.spinner input').val(), 10) - 1);
			});
		})(jQuery);
	</script>

	<?php

	?>
</body>

</html>