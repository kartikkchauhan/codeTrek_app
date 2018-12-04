<?php
	include_once("../config.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$profile_pic = ""; 



		#inserting value in data base
		$query=mysqli_query($con, "INSERT INTO `users`(`name`, `phone`, `email`, `password`, `profile_pic`) VALUES ('$name','$phone','$email','$password','$profile_pic')");

		if ($query) 
		{
			# code...
			header("Location: ../login.php"); 
		}
		else
		{
			echo "error";
		}
	}
?>