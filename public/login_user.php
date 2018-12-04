<?php
	session_start();
	include_once("../config.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$email = $_POST["email"];
		$password = $_POST["password"];



		#Checking value in data base
		$query=mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$email' && `password`='$password'");

		if ($query->num_rows > 0) 
		{
			# code...
			$row = $query->fetch_assoc();

			$_SESSION['user'] = $row['id'];

			header("location: ../index.php");

		}
		else
		{
			echo "error";
		}
	}
?>