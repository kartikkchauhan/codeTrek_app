<?php
	session_start();
	if (isset($_SESSION['user'])) 
	{  

		header("location: ../user/new_question.php");
		
	} 

	header("location: Login.php");
	
?>