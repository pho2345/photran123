<?php 
require('../db/connection.php');
if($_POST['action']==0){
	$s="";
	$arr=array('arr1'=>'', 'arr2'=>'', 'arr3'=>0,'arr4'=>'');
	//$tl = $_POST['tl'];
	$numpage = $_POST['numpage'];
	$brand=$_POST['brandId'];
	if($numpage==0){
		$numpage=1;
	}
	$sql='';
	$cate=$_POST['cate'];
	if($cate!=0){
		$sql = "select count(*) as dem from product where product.Brand_id=".$brand." and product.Category_Id=".$cate;
	}
	else{
		$sql = "select count(*) as dem from product,brand where product.Brand_id=brand.Id and brand.Id=".$brand;
	}
	
	$result = executeSingleResult($sql);
	$showproduct = 1;
	$brandId=$_POST['brandId'];
	$colorId=$_POST['colorId'];
	$productId=$_POST['productId'];
	
	$sql="select * from brand where Id=".$brand;

	$brand =executeSingleResult($sql);
	
	$dem = $result['dem'];
	$numberpage =ceil( $dem / $showproduct) ;
	$start = ($numpage - 1) * $showproduct;
	if($cate!=0){
		$sql = "select * from product,brand where product.Brand_id=brand.Id and brand.Id=".$brandId." and product.Category_Id=".$cate." limit ".$start.",".$showproduct;
	}
	else{
		$sql = "select * from product,brand where product.Brand_id=brand.Id and brand.Id=".$brandId." limit ".$start.",".$showproduct;
	}
	
	$result = executeResult($sql);
	foreach ($result as $result) {
		$sql="select * from detailcolor inner join color on color.Id=detailcolor.Id_color where detailcolor.Id_product=".$result['Id_product'];
		$color=executeResult($sql);
		$cl="";
		foreach($color as $color){
			$cl.="<button style='margin-left:10%;background:".$color['Color']."' onmouseover='load(".$color['Id'].",".$result['Id_product'].",".$result['Brand_id'].",".$numpage.",".$cate.")' onmouseout='out(".$color['Id'].",".$result['Id_product'].",".$result['Brand_id'].",".$numpage.",".$cate.")'>".$color['Color']."</button>";
		}
	if($result['Id_product'] == $productId){
		$s = $s . "<div class='sach' onmouseover='showcolor(". $result['Id_product'].")' onmouseout='notshowcolor(". $result['Id_product'].")'>"
		. "<a href='chitietsach.php?theloai=chuyennganh&masach=" . $result['Id_product'] . "'>"
		. "<img src='../images/brand/".$brand['Name']."/image/".$result['Name_product']."/Color_".$colorId."/1.png'>"
		. "</a>"
		. "<div class='tensach'>" . $result['Name_product'] . "</div>"
		. "<div class='colorokeaaaa 'id='colorokeaaaa". $result['Id_product']."'>" . $cl . "</div>"
		. "<div class='gia'>" .  $result['Price'] . "<sup>đ</sup></div>"
		. "</div>";
	}else{
		$s = $s . "<div class='sach' onmouseover='showcolor(". $result['Id_product'].")' onmouseout='notshowcolor(". $result['Id_product'].")'>"
			. "<a href='chitietsach.php?theloai=chuyennganh&masach=" . $result['Id_product'] . "'>"
			. "<img src='../images/brand/".$result['Name']."/" . $result['Image'] . "'>"
			. "</a>"
			. "<div class='tensach'>" . $result['Name_product'] . "</div>"
			. "<div class='colorokeaaaa 'id='colorokeaaaa". $result['Id_product']."'>" . $cl . "</div>"
			. "<div class='gia'>" .  $result['Price'] . "<sup>đ</sup></div>"
			. "</div>";
	}
	
	}

	$s = $s . "</div>";
	$arr['arr3']=count($result);
	$arr['arr1']=$s;
	$pt="";
	$pt .= '<div class="btn-toolbar mb-3 " role="toolbar" aria-label="Toolbar with button groups" style="justify-content: center;margin-left:30%">
				<div class="btn-group mr-2" role="group"  style="justify-content: center;">';

	for ($i = 1; $i <= $numberpage; $i++) {
		if($i==$numpage){
			$pt = $pt ."<button type='button'  class='btn btn-secondary' style='background:#3366FF' onclick='category(" . $brandId . ",".$cate."," . $i . ")' style='justify-content: center;'>". $i . "</button>";
		}
		else{
			$pt = $pt ."<button type='button'  class='btn btn-secondary'  onclick='category(" . $brandId . ",".$cate."," . $i . ")' style='justify-content: center;'>". $i . "</button>";
		}
		
	}
	$pt = $pt . "</div></div>";
	
	$arr['arr2']=$pt;
	echo json_encode($arr);
}
else{
	$cate=$_POST['cate'];
	$s="";
	$arr=array('arr1'=>'', 'arr2'=>'', 'arr3'=>0);
	$numpage = $_POST['numpage'];
	if($numpage==0){
		$numpage=1;
	}
	$brandId=$_POST['brandId'];
	$brand=$_POST['brandId'];
	if($cate!=0){
		$sql = "select count(*) as dem from product where product.Brand_id=".$brand." and product.Category_Id=".$cate;
	}
	else{
		$sql = "select count(*) as dem from product,brand where product.Brand_id=brand.Id and brand.Id=".$brand;
	}
	$result = executeSingleResult($sql);
	$showproduct = 1;
	$colorId=$_POST['colorId'];
	$productId=$_POST['productId'];
	
	$sql="select * from brand";
	$brand =executeSingleResult($sql);
	$dem = $result['dem'];
	$numberpage =ceil( $dem / $showproduct) ;
	$start = ($numpage - 1) * $showproduct;
	if($cate!=0){
		$sql = "select * from product,brand where product.Brand_id=brand.Id and brand.Id=".$brandId." and product.Category_Id=".$cate." limit ".$start.",".$showproduct;
	}
	else{
		$sql = "select * from product,brand where product.Brand_id=brand.Id and brand.Id=".$brandId." limit ".$start.",".$showproduct;
	}
	$result = executeResult($sql);
	$idColor="";
	foreach ($result as $result) {
		$sql="select * from detailcolor inner join color on color.Id=detailcolor.Id_color where detailcolor.Id_product=".$result['Id_product'];
		$color=executeResult($sql);
		$cl="";
		foreach($color as $color){
			$idColor=$color['Id'];
				$cl.="<button style='margin-left:10%;background:".$color['Color']."' onmouseover='load(".$color['Id'].",".$result['Id_product'].",".$result['Brand_id'].",".$numpage.",".$cate.")' >".$color['Color']."</button>";
		}
		$s ="../images/brand/".$result['Name']."/image/".$result['Name_product']."/Color_".$idColor."/1.png";
		
		
	}

	$s = $s . "</div>";
	$arr['arr3']=count($result);
	$arr['arr1']=$s;
	$pt="";
	$pt .= '<div class="btn-toolbar mb-3 " role="toolbar" aria-label="Toolbar with button groups" style="justify-content: center;margin-left:30%">
				<div class="btn-group mr-2" role="group"  style="justify-content: center;">';

	for ($i = 1; $i <= $numberpage; $i++) {
		if($i==$numpage){
			$pt = $pt ."<button type='button'  class='btn btn-secondary' style='background:#3366FF' onclick='category(" . $brandId . ",".$cate."," . $i . ")' style='justify-content: center;'>". $i . "</button>";
		}
		else{
			$pt = $pt ."<button type='button'  class='btn btn-secondary'  onclick='category(" . $brandId . ",".$cate."," . $i . ")' style='justify-content: center;'>". $i . "</button>";
		}
		
	}
	$pt = $pt . "</div></div>";
	
	$arr['arr2']=$pt;
	//die($arr['arr2']);
	echo json_encode($arr);
}



?>