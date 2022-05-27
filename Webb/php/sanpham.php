<?php 
	ini_set('session.auto_start',0);
	ini_set('session.cookie_lifetime',0);
	include 'sl.php';
	require('common.php');
	require('GetCategory.php');
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
<link rel="stylesheet" type="text/css" href="../css/sanpham.css" />
<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../js/function.js"></script>
<script type="text/javascript" language="javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="../js/showBook.js"></script>
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<script type="text/javascript" language="javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/jquery.min.js"></script>

</head>
<body>                                      <!--------------- header --------------->
<?php
	
	
		include 'component/header.php';
		include 'component/slider.php';
		include 'component/menu.php';
?>

                                           <!---------------- slder ----------------->
 


                                    <!------------- navbar menu ---------------->

                                          <!---------------------content sach ----------------------->

<div class="container" style="position:relative">
			<div class="row">
			
				<?php 
					include 'component/filter.php';
				?>
				<div class="col-md-10">
				
					<div class="bar"> 
						<div class="tieude" id="tieude"></div>	
					</div>
					<div id="sanpham">
						<?php 
							
							//------------day showbook
						?>
					</div>
					
				</div>
				

	</div>
	<div id="phantrang" class="m-auto">
	</div>
	
	
			<input type="hidden" value="" placeholder="nhap do" id="hiddenbrand">
			<input type="hidden" value="" placeholder="nhap do" id="hiddencate">


			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<?php 
				include 'component/header.php';
		?>
</div>
                           <!---------------------- footer ----------------------->
		<?php 
			include 'component/footer.php';
		?>
		
		
		
</div>

<?php
	
?>
</body>
<script>
	
	

	
	

</script>
</html>

