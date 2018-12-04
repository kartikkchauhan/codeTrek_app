<?php
	session_start();
	include_once("../config.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$title = $_POST["title"];
		$description = $_POST["description"];
		$tags = $_POST["tags"];

		#getting date 

		$yrdata= strtotime(date("Y/m/d"));
   		$date= date('M d, Y', $yrdata);
        $userId = $_SESSION['user'];

		#inserting value in data base
		$query=mysqli_query($con, "INSERT INTO `asked_questions`(`question_Title`, `question_Description`, `questions_Tags`, `user_Id`,`date`) VALUES ('$title','$description','$tags','$userId','$date')");

		if ($query) 
		{
			# code...
			header("Location: ../index.php"); 
		}
		else
		{
			echo "error";
		}
	}
?>