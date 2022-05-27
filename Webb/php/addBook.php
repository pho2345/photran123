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
		//kiểm tra nếu là admin thì về trang admin.php,vì đây là trang của manager
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
	
			<div class="row">
                <div class="col-lg-12">
                    <div class="">
                </div>
            </div>

            <!-- ... Your content goes here ... -->

			<div clas="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						
						<div class="panel-heading">
							Thêm sản phẩm
						</div>
						
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form name="them" action="executeAddBook.php" method="post"  enctype="multipart/form-data" onsubmit="return validateFormAddBook()">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
                                                    <label>Tên sách</label>
                                                    <input class="form-control" name="tensach">
													<i style="color:red" id='loitensach'></i>
                                                </div>
												<div class="form-group">
                                                    <label>Thể loại</label>
                                                    <select class="form-control" name="matheloai" id="theloai" onchange="hienthimasach()">
														<option value="">Chọn thể loại</option>
                                                        <option value="NN">Học ngoại ngữ</option>
                                                        <option value="KT">Kinh tế</option>
                                                        <option value="KNS">Kỹ năng sống</option>
                                                        <option value="LS">Lịch sử</option>
                                                        <option value="CN">Chuyên ngành</option>
														<option value="TN">Thiếu nhi</option>
														<option value="TT">Tuổi teen</option>
														<option value="VN">Văn học</option>
                                                    </select>
													<p><i>(Mã thể loại)</i></p>
													<i style="color:red" id='loimatheloai'></i>
                                                </div>
												<div class="form-group">
                                                    <label>Mã sách</label>
                                                    <input class="form-control" name="masach" readonly>
                                                </div>
												<div class='form-group'>
													<label>Tên tác giả</label>
													<input class='form-control' name='tentacgia'>
													<i style="color:red" id='loitentacgia'></i>
												</div>
												<div class="form-group">
                                                    <label>Giá</label>
                                                    <input class="form-control" name="gia">
													<i style="color:red" id='loigia'></i>
                                                </div>
												<div class="form-group">
                                                    <label>Nội dung giới thiệu sách</label>
                                                    <textarea class="form-control" rows="3" name="noidunggioithieusach" ></textarea>
													<i style="color:red" id='loinoidunggioithieusach'></i>
                                                </div>
											</div>
											
											<div class="col-lg-6">
												<div class="form-group">
                                                    <label>Nhà xuất bản</label>
                                                    <input class="form-control" name="nhaxuatban">
													<i style="color:red" id='loinhaxuatban'></i>
                                                </div>
												<div class="form-group">
                                                    <label>Kích thước</label>
                                                    <input class="form-control" name="kichthuoc">
													<i style="color:red" id='loikichthuoc'></i>
                                                </div>
												<div class="form-group">
                                                    <label>Trọng lượng</label>
                                                    <input class="form-control" name="trongluong">
													<i style="color:red" id='loitrongluong'></i>
                                                </div>
												<div class="form-group">
                                                    <label>Số trang</label>
                                                    <input class="form-control" name="sotrang">
													<i style="color:red" id='loisotrang'></i>
                                                </div>
												<div class="form-group">
                                                    <label>Danh mục</label>
                                                    <input class="form-control" name="danhmuc">
													<i style="color:red" id='loidanhmuc'></i>
                                                </div>
												<div class="form-group">
                                                    <label>Ngày phát hành</label>
                                                    <input class="form-control" name="ngayphathanh">
													<i style="color:red" id='loingayphathanh'></i>
                                                </div>
												<div class="form-group">
                                                    <label>Số lượng tồn</label>
                                                    <input class="form-control" name="soluongton">
													<i style="color:red" id='loisoluongton'></i>
                                                </div>
												
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="panel panel-default">
													<div class="panel-heading">												
														Thêm hình ảnh
														<div class="form-group">
															<input type="file" name="hinhanh" style="float:right;margin-top:-2px" onclick="themhinhanh()" accept="image/png,image/jpeg,image/jpg">
														</div>
												
													</div>
													<div class="panel-body" style="margin-bottom:10px;">
														
														<div class="row">
															<div class="col-lg-12">
																<center><label>Hình ảnh</label></center>
																<center><div id="xemhinhanh" style="width:120px;height:170px;"> </div></center>
																<i style="color:red" id='loihinhanh'></i>
															</div>
														</div>
														
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<center>
													<button type="submit" class="btn btn-default">Thêm</button>
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

        </div>
    </div>

</div>
<script>
	function hienthimasach() {
		
		var matheloai=document.forms['them']['matheloai'].value;
			if(matheloai!="")
			{
				var xhttp;
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.forms['them']['masach'].value = this.responseText;
				}
			};
			xhttp.open("GET","timkiem.php?cho=themsach&ma="+matheloai, true);
			xhttp.send();
			}
			else alert("Hãy chọn một thể loại.");
		}
	
</script>

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

