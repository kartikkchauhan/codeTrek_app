<?php
	session_start();
	if (!$_SESSION['user']) 
	{  

		header("location: ../index.php");
		
	}

	include("header.php");
	include("answer_body.php");
	include("footer.php"); 
?>