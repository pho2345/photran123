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
</head>
<body>
	<!--------------- header --------------->
	

	<!---------------- slder ----------------->
	


	<!------------- navbar menu ---------------->
	<?php
		include 'component/header.php';
		include 'component/slider.php';
		include 'component/menu.php';
	?>
	<!---------------------content sach ----------------------->
	
				<?php
				
				?>
				<div id="snackbar">Đã thêm vào giỏ hàng</div>
			</div>
		

			<script>
				showBook();
			</script>                               <!---------------------- footer ----------------------->
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
		<script>
			(function ($) {
				$('.spinner .btn:first-of-type').on('click', function() {
					$('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
				});
				$('.spinner .btn:last-of-type').on('click', function() {
					$('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
				});
			})(jQuery);
		</script>
		
<?php
	
?>
	</body>
	</html>

