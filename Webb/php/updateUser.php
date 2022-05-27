<?php

	ini_set('session.auto_start',0);
	ini_set('session.cookie_lifetime',0);
	session_start();
	
	
	require('DataProvider.php');
	if(isset($_POST['makhachhang']))
	{
		$maKH=$_POST['makhachhang'];
		
		//------------------------Sua trong database khachhang-----------------------------------------------//
		
		$sql="UPDATE khachhang SET "
		.	"HoTen='".$_POST['hoten']."', "
		.	"Email='".$_POST['email']."', "
		.	"SĐT='".$_POST['sdt']."'  "
		.	"WHERE MaKH='".$_POST['makhachhang']."'";
		DataProvider::executeQuery($sql);
		
		$_SESSION['login']=array(	'MaKH' => $maKH,
									'TenDangNhap' => $_POST['tendangnhap'],
									'MaQuyen' => $_SESSION['login']['MaQuyen'],
									'HoTen' => $_POST['hoten'],
									'Email' => $_POST['email'],
									'SĐT' => $_POST['sdt']);

		
	}
		
	//------------------------Quay ve trang quanlysanpham.php-----------------------------------------------//
	
	$hostName=$_SERVER['HTTP_HOST'];
	$dirURL=rtrim(dirname($_SERVER['PHP_SELF']));
	$pageName="thongtincanhanUser.php";
	$url="http://".$hostName.$dirURL."/".$pageName;
	header("Location:$url");
	exit;
?>