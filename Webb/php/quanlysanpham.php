<?php
	ini_set('session.auto_start',0);
	ini_set('session.cookie_lifetime',0);
	session_start();
	require('common.php');
	//kiểm tra đã đăng nhập chưa
	//chưa đn
	if(isLogined()==false)
	{
			header("Location:dangnhapAdmin.php");
	}
	//đã đang nhập
	else if(isLogined()==true)
	{
		// kiểm tra đây là khách hàng thì về trang chủ kh
		if($_SESSION['login']['MaQuyen'] != "1" && $_SESSION['login']['MaQuyen'] != "2" )
			header("Location:../index.php");
		//kiểm tra nếu là admin thì về trang admin.php, đây là trang của manager
		else if($_SESSION['login']['MaQuyen']=="1")
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
<!--<script type="text/javascript" language="javascript" src="../js/bootstrap.js"></script>-->
<script type="text/javascript" language="javascript" src="../js/showBook.js"></script>
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

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <img src="../images/onepiece.PNG" style="" width="250px" height="52px" alt="logo-trang chủ">
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <span id="ca_nhan"> <?php echo $_SESSION['login']['HoTen'] ?></span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="thongtincanhanAdmin.php"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="xulydangnhapAdmin.php?dangxuat=1"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation" >
            <div class="sidebar-nav navbar-collapse" id="myNavbar">

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="admin.php" style="" class='active'><i class="fa fa-home fa-fw"></i> Trang chủ </a>
                    </li>
                    <li>
                        <a href="quanlysanpham.php" style="" class='mg'><i class="fa fa-product-hunt fa-fw"></i> Quản lý sản phẩm <span class='mg_i' style="float:right;color:red"></span></a>
                    </li>
					<li>
                        <a href="quanlyhoadon.php" style="" class='mg' ><i class="fa fa-file-text-o fa-fw"></i> Quản lý hóa đơn <span class='mg_i' style="float:right;color:red"></span></a> 
                    </li>
					<li>
                        <a href="#" style="" ><i class="fa fa-table fa-fw"></i> Thống kê </a>
                    </li>
					<li>
                        <a href="#" class='ad' style=""><i class="fa fa-user fa-fw"></i> Quản lý người dùng<span class="fa arrow"> <span class='ad_i' style="float:right;color:red"></span></span></a>
						<ul class="nav nav-second-level">
                                    <li>
                                        <a href="quanlykhachhang.php">Khách hàng</a>
                                    </li>
                                    <li>
                                        <a href="quanlynhanvien.php">Nhân viên quản lý và Quản trị viên</a>
                                    </li>                

                        </ul>
                                <!-- /.nav-second-level -->
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý sản phẩm</h1>
                </div>
            </div>
			
	<!---------------------------------hien san pham ----------------------------------->
            <!-- ... Your content goes here ... -->
			
			
			<div clas="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						
						<div class="panel-heading">
							Danh sách sản phẩm
							<div style="float:right">
								<a href="addBook.php"><i class="fa fa-plus fa-fw"></i> Thêm sản phẩm</a>
							</div>
						</div>
						
						<div class="panel-body">
							
							<div class="row">
								<form name="timkiemsanpham">
							
									<div class="col-lg-2" style="margin-top:17px;">
										<select name="theloai" class="form-control" onchange="showBookAjax()">
											<option value="">Thể loại</option>
											<option value="NN">Học ngoại ngữ</option>
											<option value="KT">Kinh tế</option>
											<option value="KNS">Kỹ năng sống</option>
											<option value="LS">Lịch sử</option>
											<option value="CN">Chuyên ngành</option>
											<option value="TN">Thiếu nhi</option>
											<option value="TT">Tuổi teen</option>
											<option value="VH">Văn học</option>
										</select>
									</div>
									
									<div class="col-lg-6">
										<div class="panel panel-default">
											<div class="panel-body">
												<div class="row">
													<div class="col-lg-4">
														<select name="timkiemtheoloai" class="form-control" onchange="showBookAjax()">
															<option value="">Chọn</option>
															<option value="MaSach">Mã sách</option>
															<option value="TenSach">Tên sách</option>
															<option value="TenTacGia">Tên tác giả</option>
														</select>
													</div>
									
										
													<div class="col-lg-8">
											
														<div class="input-group" >
															<input type="text" class="form-control" placeholder="Tìm kiếm" name="timkiem" onkeyup="showBookAjax()">
															<div class="input-group-btn">
																<button class="btn btn-default" type="submit">
																	<i class="glyphicon glyphicon-search"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3" style="margin-top:20px;">
										<i style="color:red" id="thongbaoloi"></i>
									</div>
								</form>	
							</div>
							
							<!------------------------table-------------------------------------------------------------->
							<style>
								#gg td,#gg th
								{
									text-align:center;
									vertical-align:middle;
								}
							</style>
							<div class="row" style="margin-top:10px">
								
								<div class="col-lg-12" id="sanpham">
										<?php
											require('showBook.php');
											ShowBook::showBookInAdmin();
										?>
			
								</div>
								<script>
									
									function showBookAjax() {
										var xhttp;
										var matheloai=document.forms['timkiemsanpham']['theloai'].value;
										var loai=document.forms['timkiemsanpham']['timkiemtheoloai'].value;
										var chuoitimkiem=document.forms['timkiemsanpham']['timkiem'].value;
										var url="showBookAjaxInAdmin.php?";
										if (matheloai == "") 
											url=url+"theloai=&";
										else 
											url=url+"theloai="+matheloai+"&";
										if(loai=="" && chuoitimkiem=="")
											url=url+"timkiemtheoloai=&timkiem=";
										else 
											url=url+"timkiemtheoloai="+loai+"&timkiem="+chuoitimkiem;
										if(loai=="" && chuoitimkiem!="")
											document.getElementById("thongbaoloi").innerHTML ="Bạn phải chọn loại cần tìm kiếm.";
										else document.getElementById("thongbaoloi").innerHTML ="";
										
										xhttp = new XMLHttpRequest();
										xhttp.onreadystatechange = function() {
										if (this.readyState == 4 && this.status == 200) {
											document.getElementById("sanpham").innerHTML = this.responseText;
											}
										  };
										  xhttp.open("GET",url, true);
										  xhttp.send();
										}
									
								<!--------------------------------------------------------------------------------------------------------------->
										
										function xoasanpham(e)
										{
											if(confirm("Bạn có muốn xóa")==true)
											{
												window.location.href="deleteBook.php?masach="+e;
											}
										}
								</script>
							</div>
							
						</div>
					</div>
				</div>
			</div>

        </div>
    </div>

</div>
<?php
	
	if($_SESSION['login']['MaQuyen']=="1")
	{
		echo "<script>
				document.getElementsByClassName('mg')[0].setAttribute('style','pointer-events:none;');
				document.getElementsByClassName('mg')[1].setAttribute('style','pointer-events:none;');
				
				
				document.getElementsByClassName('mg_i')[0].innerHTML='<i class=\'fa fa-ban fa-fw\'></i>';
				document.getElementsByClassName('mg_i')[1].innerHTML='<i class=\'fa fa-ban fa-fw\'></i>';
				
			</script>";
	}
	if($_SESSION['login']['MaQuyen']=="2")
	{
		echo "<script>
				document.getElementsByClassName('ad')[0].setAttribute('style','pointer-events:none;');
				document.getElementsByClassName('ad_i')[0].innerHTML='<i class=\'fa fa-ban fa-fw\'></i>';
			</script>";
	}
?>
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/admin/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/admin/startmin.js"></script>

</body>
</html>

