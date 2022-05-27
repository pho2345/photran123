<?php
	require("DataProvider.php");
	if(isset($_GET['cho']) && isset($_GET['ma']))
		TimKiemTrongThemSP();
	function TimKiemTrongThemSP()
	{
			$sql="select COUNT(*) as SoLuong from sach where MaTheLoai='".$_GET['ma']."'";
			$result=DataProvider::executeQuery($sql);
			$row=mysqli_fetch_array($result);
			if($_GET['ma']=="NN")
				echo "NN".($row['SoLuong']+1);
			else if($_GET['ma']=="KT")
				echo "KT".($row['SoLuong']+1);
			else if($_GET['ma']=="KNS")
				echo "KNS".($row['SoLuong']+1);
			else if($_GET['ma']=="LS")
				echo "LS".($row['SoLuong']+1);
			else if($_GET['ma']=="CN")
				echo "CN".($row['SoLuong']+1);
			else if($_GET['ma']=="TN")
				echo "TN".($row['SoLuong']+1);
			else if($_GET['ma']=="TT")
				echo "TT".($row['SoLuong']+1);
			else if($_GET['ma']=="VH")
				echo "VH".($row['SoLuong']+1);
	}
?>