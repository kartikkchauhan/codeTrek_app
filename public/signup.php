<?php 
	session_start();
	if (isset($_SESSION['user'])) 
	{  

		header("location: ../index.php");
		
	}
	include("header.php");
	include("signup_body.php");
	include("footer.php"); 
?>