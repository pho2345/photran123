<?php
	//session_start();
	
	function isLogined()
	{
		if(empty($_SESSION['login']))
			return false;
		return true;
	}
?>