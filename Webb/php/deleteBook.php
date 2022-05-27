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
		else
		{
			require('DataProvider.php');
			if(isset($_GET['masach']))
			{
				$sql="DELETE FROM sach WHERE MaSach='".$_GET['masach']."'";
				DataProvider::executeQuery($sql);
				$sql="DELETE FROM chitietsach WHERE MaSach='".$_GET['masach']."'";
				DataProvider::executeQuery($sql);
			}
			header("Location:quanlysanpham.php");
		}
	}
	
?>