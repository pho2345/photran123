<?php 
session_start();
include 'cart.php';
cart::addcart();
if(isset($_SESSION['cart'])){
	echo "<pre />";
	var_dump($_SESSION['cart']);
}
?>