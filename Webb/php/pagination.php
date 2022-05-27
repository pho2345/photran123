<?php
require('../db/connection.php');
if ($_POST['cate']!=0) {
	$arr=array('arr1'=>'', 'arr2'=>'', 'arr3'=>0);
	$cate = $_POST['cate'];
	$numpage = $_POST['numpage'];
	$s='';
	$brandId=$_POST['brand'];
	$brand=$_POST['brand'];
	
	$sql = "select count(*) as dem from product where product.Brand_id=".$brand." and product.Category_Id=".$cate;
	$result = executeSingleResult($sql);
	$showproduct = 2;
	$dem = $result['dem'];
	$numberpage =ceil( $dem / $showproduct) ;
	$start = ($numpage - 1) * $showproduct;
	$sql = "select * from product,brand where product.Brand_id=brand.Id  and brand.Id=".$brand." and product.Category_Id=".$cate." limit ".$start.",".$showproduct;
	$result = executeResult($sql);
	foreach ($result as $result) {
		$sql="select * from detailcolor inner join color on color.Id=detailcolor.Id_color where detailcolor.Id_product=".$result['Id_product'];
		$color=executeResult($sql);
		$cl="";
		$idColor="";
		foreach($color as $color){
			$idColor=$color['Id'];
			$cl.="<button style='margin-left:10%;background:".$color['Color']."' onmouseover='load(".$color['Id'].",".$result['Id_product'].",".$brand.",".$numpage.",".$cate.")' onmouseout='out(".$color['Id'].",".$result['Id_product'].",".$result['Brand_id'].",".$cate.",".$numpage.",".$cate.")'>".$color['Color']."</button>";
		}
		$s = $s . "<div class='sach' onmouseover='showcolor(". $result['Id_product'].")' onmouseout='notshowcolor(". $result['Id_product'].")'>"
			. "<a href='chitietsach.php?Id_product=" . $result['Id_product'] . "'>"
			. "<img id='picture".$result['Id_product']."' src='../images/brand/".$result['Name']."/image/".$result['Name_product']."/Color_".$idColor."/1.png'x>"
			. "</a>"
			. "<div class='tensach'>" . $result['Name_product'] . "</div>"
			. "<div class='colorokeaaaa 'id='colorokeaaaa". $result['Id_product']."' >" . $cl . "</div>"
			. "<div class='gia'>" .  $result['Price'] . "<sup>đ</sup></div>"
			. "</div>";
			$arr['arr4']=$result['Name'];
	}

	$s = $s . "</div>";
	$arr['arr3']=count($result);
	$arr['arr1']=$s;
	$pt="";
	$pt .= '<div class="btn-toolbar mb-3 " role="toolbar" aria-label="Toolbar with button groups" style="justify-content: center;margin-left:30%">
				<div class="btn-group mr-2" role="group"  style="justify-content: center;">';

	for ($i = 1; $i <= $numberpage; $i++) {
		if($i==$numpage){
			$pt = $pt ."<button type='button'  class='btn btn-secondary' style='background:#3366FF' onclick='category(" . $brand . ",".$cate."," . $i . ")' style='justify-content: center;'>". $i . "</button>";
		}
		else{
			$pt = $pt ."<button type='button'  class='btn btn-secondary'  onclick='category(" . $brand . ",".$cate."," . $i . ")' style='justify-content: center;'>". $i . "</button>";
		}
		
	}
	$pt = $pt . "</div></div>";
	
	$arr['arr2']=$pt;
	//die($arr['arr2']);
	echo json_encode($arr);
	
}
else {
	$cate = $_POST['cate'];
	$s="";
	$arr=array('arr1'=>'', 'arr2'=>'', 'arr3'=>0, 'arr4'=>'');
	$tl = $_POST['cate'];
	$numpage = $_POST['numpage'];
	if($numpage==0){
		$numpage=1;
	}
	
	$brand=$_POST['brand'];
	$sql = "select count(*) as dem from product,brand where product.Brand_id=brand.Id and brand.Id=".$brand;
	$result = executeSingleResult($sql);
	$showproduct = 2;
	$dem = $result['dem'];
	$numberpage =ceil( $dem / $showproduct) ;
	$start = ($numpage - 1) * $showproduct;
	$sql = "select * from product,brand where product.Brand_id=brand.Id  and brand.Id=".$brand." limit ".$start.",".$showproduct;
	$result = executeResult($sql);
	
	
	foreach ($result as $result) {
		$sql="select * from detailcolor inner join color on color.Id=detailcolor.Id_color where detailcolor.Id_product=".$result['Id_product'];
		$color=executeResult($sql);
		$cl="";
		$idColor="";
		foreach($color as $color){
			$idColor=$color['Id'];
			$cl.="<button style='margin-left:10%;background:".$color['Color']."' onmouseover='load(".$color['Id'].",".$result['Id_product'].",".$brand.",".$numpage.",".$cate.")' onmouseout='out(".$color['Id'].",".$result['Id_product'].",".$result['Brand_id'].",".$numpage.",".$cate.")'>".$color['Color']."</button>";
		}
		$s = $s . "<div class='sach' onmouseover='showcolor(". $result['Id_product'].")' onmouseout='notshowcolor(". $result['Id_product'].")'>"
			. "<a href='chitietsach.php?Id_brand=".$brand."&&Id_product=" . $result['Id_product'] . "&&Id_color=".$idColor."'>"
			. "<img id='picture".$result['Id_product']."' src='../images/brand/".$result['Name']."/image/".$result['Name_product']."/Color_".$idColor."/1.png'>"
			. "</a>"
			. "<div class='tensach'>" . $result['Name_product'] . "</div>"
			. "<div class='colorokeaaaa 'id='colorokeaaaa". $result['Id_product']."' >" . $cl . "</div>"
			. "<div class='gia'>" .  $result['Price'] . "<sup>đ</sup></div>"
			. "</div>";
			$arr['arr4']=$result['Name'];
	}

	$s = $s . "</div>";
	$arr['arr3']=count($result);
	$arr['arr1']=$s;
	$pt="";
	$pt .= '<div class="btn-toolbar mb-3 " role="toolbar" aria-label="Toolbar with button groups" style="justify-content: center;margin-left:30%">
				<div class="btn-group mr-2" role="group"  style="justify-content: center;">';

	for ($i = 1; $i <= $numberpage; $i++) {
		if($i==$numpage){
			$pt = $pt ."<button type='button'  class='btn btn-secondary' style='background:#3366FF' onclick='category(" . $brand . ",0," . $i . ")' style='justify-content: center;'>". $i . "</button>";
		}
		else{
			$pt = $pt ."<button type='button'  class='btn btn-secondary'  onclick='category(" . $brand . ",0," . $i . ")' style='justify-content: center;'>". $i . "</button>";
		}
		
	}
	$pt = $pt . "</div></div>";
	
	$arr['arr2']=$pt;
	echo json_encode($arr);

}
