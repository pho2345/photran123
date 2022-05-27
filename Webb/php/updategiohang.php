<?php 
session_start();
unset($_SESSION['cart'][$_GET['masach']]);
$soluongsp=0;
$tongtien=0;
if(!empty($_SESSION['cart'])){
	foreach ($_SESSION['cart'] as $key => $value){
		$soluongsp=$soluongsp+$_SESSION["cart"][$key]["sl"];
		$tongtien=$tongtien+$_SESSION["cart"][$key]["gia"]*$_SESSION["cart"][$key]["sl"];
	}
}
$arr = [
	'masach' => $_GET['masach'],
	'sl' => $soluongsp,
	'tongtien' => $tongtien
];
if(!empty($_SESSION['cart'])){
	echo json_encode($arr);
}
else{
	echo "false";
}
?>
