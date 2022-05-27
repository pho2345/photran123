<?php 
require('../db/connection.php');
if($_POST['action']==0){
	$s="";
	$arr=array('arr1'=>'', 'arr2'=>'', 'arr3'=>0,'arr4'=>'');
	//$tl = $_POST['tl'];
	$brand=$_POST['brandId'];
	$colorId=$_POST['colorId'];
	$cate=$_POST['cate'];
	$product=$_POST['productId'];
	$productId=$_POST['productId'];

	$sql ="select * from detailcolor where Id_color=".$colorId." and Id_product=".$productId;
	$result=executeResult($sql);

	$sql="select * from product where Id_product=".$productId;
	$product=executeSingleResult($sql);
	$sql="select * from brand where Id=".$brand;
	$brand=executeSingleResult($sql);
	
	if($result!=null){
	
		$s="../images/brand/".$brand['Name']."/image/".$product['Name_product']."/Color_".$colorId."/1.png";
	}
	$arr['arr1']=$s;
	$arr['arr2']=$productId;
	//die($s);
	echo json_encode($arr);
}
else{
	$arr=array('arr1'=>'', 'arr2'=>'', 'arr3'=>0,'arr4'=>'');
	$s="";
	$brand=$_POST['brandId'];
	$colorId=$_POST['colorId'];
	$cate=$_POST['cate'];
	$productId=$_POST['productId'];
	$sql ="select * from detailcolor where Id_product=".$productId;
	$result=executeResult($sql);
	$colorId='';
	$sql="select * from product where Id_product=".$productId;
	$product=executeSingleResult($sql);
	$sql="select * from brand where Id=".$brand;
	$brand=executeSingleResult($sql);
	foreach($result as $result){
		$colorId=$result['Id_color'];
	}
	$s="../images/brand/".$brand['Name']."/image/".$product['Name_product']."/Color_".$colorId."/1.png";
	$arr['arr1']=$s;
	$arr['arr2']=$productId;
	echo json_encode($arr);
	
}



?>