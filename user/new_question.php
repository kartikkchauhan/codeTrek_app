<?php 
	
	session_start();
	if (!$_SESSION['user']) 
	{  

		header("location: ../index.php");
		
	}
	include("header.php"); 
	include("new_questionBody.php");
	include("footer.php"); 
?>