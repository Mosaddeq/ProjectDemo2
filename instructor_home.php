<?php 
	session_start();
	if(isset($_SESSION["email"]) ){
		require_once "includes/headerin.php";
		require_once "includes/accountin.php";
?>
<h1>Welcome Instructor Home Page!<br/>Email:&nbsp; <?=$_SESSION["email"]?></h1>
<?php 
	require_once "includes/footerN.php";
?>
<?php
	}else{
		echo "Please login first";
	}
?>