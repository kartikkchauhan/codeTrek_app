<?php
	session_start();
	include_once("config.php");

	if (isset($_SESSION['user'])) 
	{
   		// logged in
   		header("location: user/");
	} 
	else 
	{
   		// not logged in
		header("Location: public/"); 
	}
 	
?>