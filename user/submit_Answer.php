<?php
	session_start();
	include_once("../config.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$question_Id = $_POST["question_Id"];
		$answer = $_POST["yourAnswer"];

		#getting date 

		$yrdata= strtotime(date("Y/m/d"));
   		$date= date('M d, Y', $yrdata);

		$userId = $_SESSION['user'];

		#inserting value in data base
		$query=mysqli_query($con, "INSERT INTO `answers`(`question_Id`, `answer`, `user_Id`, `date`) VALUES ('$question_Id','$answer','$userId','$date')");

		if ($query) 
		{
			# code...
			header("Location: answers.php?question_Id=".$question_Id); 
		}
		else
		{
			echo "error";
		}
	}
?>