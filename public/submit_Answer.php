<?php
	include_once("../config.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$question_Id = $_POST["question_Id"];
		$answer = $_POST["yourAnswer"];

		#getting date 

		$yrdata= strtotime(date("Y/m/d"));
   		$date= date('M d, Y', $yrdata);

		#Getting Ip Address
		$userId;
		if (getenv('HTTP_CLIENT_IP'))
        $userId = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $userId = getenv('HTTP_X_FORWARDED_FOR');
	    else if(getenv('HTTP_X_FORWARDED'))
	        $userId = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $userId = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	       $userId = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $userId = getenv('REMOTE_ADDR');
	    else
	        $userId = 'UNKNOWN';

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