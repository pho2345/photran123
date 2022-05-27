	<?php 
	session_start();
	$soluongsp=0;
	if(!empty($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $key => $value){
			$soluongsp=$soluongsp+$_SESSION["cart"][$key]["sl"];
		}
	}
	if(isset($_GET['xh'])&&($_GET['xh']==1))
		echo $soluongsp;
	?>