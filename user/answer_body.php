<?php
	include_once("../config.php");

	$question_Id = $_GET["question_Id"];
?>
<div class="container mt-5">
		<?php

			$query=mysqli_query($con, "SELECT * FROM `asked_questions` WHERE `question_Id`='$question_Id'");

          	if($query->num_rows > 0)
          	{
          		$row = $query->fetch_assoc();
		?>


		<div class="mb-5">
			<h3>
				<?= $row["question_Title"] ?>
			</h3>
			<p class="text-secondary lead">
				<?= $row["question_Description"] ?>
			</p>
			<!-- Splittind tags -->
            <?php

              list($first, $second, $third) = explode(',', $row["questions_Tags"]);

            ?>

			<div class="mb-3">
				<a href="#" class="badge badge-info"><?= $first ?></a>
				<a href="#" class="badge badge-info"><?= $second ?></a>
				<a href="#" class="badge badge-info"><?= $third ?></a>
			</div>
			<!-- Getting user  -->
              <?php
                  if (filter_var($row['user_Id'], FILTER_VALIDATE_INT) === FALSE) {
                    # code...

                    $user = "CodeTrek User";

                  }
                  else
                  {

                    $query2= mysqli_query($con,"SELECT * FROM `users` WHERE `id`= '$row[user_Id]' ");
                    $userRow=$query2->fetch_assoc();
                    $user =$userRow['name'];

                  }
              ?>
			<p>
				<a href="#" class="card-link"><span><?= $user ?></span></a>
				<span class="text-secondary">asked on</span>
				<span class="text-secondary"><?= $row['date'] ?></span>
			</p>
			<div class="d-flex text-secondary">
				<div class="mr-4 like c-pointer">
					<i class="fas fa-thumbs-up fa-lg"></i>
					<span>14</span>
				</div>
				<div class="mr-4 dislike c-pointer">
					<i class="fas fa-thumbs-down fa-lg"></i>
					<span>1</span>
				</div>
				<div class="mr-4">
					<i class="fas fa-comments fa-lg"></i>
					<span>2 answers</span>
				</div>
			</div>
		</div>

		<?php
			}
		?>

		<!-- selecting the answer of the question from the data base -->

        <?php

          $query=mysqli_query($con, "SELECT * FROM `answers` WHERE `question_Id`='$question_Id' ");

          if($query->num_rows > 0)
          {

            while($row = $query->fetch_assoc()) 
            {

        ?>

		<div class="card mb-4 shadow-sm">
			<div class="card-body">
				<p>
					<?php
		              if (filter_var($row['user_Id'], FILTER_VALIDATE_INT) === FALSE) {
		                # code...

		                $user = "CodeTrek User";

		              }
		              else	
		              {

		                $query2= mysqli_query($con,"SELECT * FROM `users` WHERE `id`= '$row[user_Id]' ");
	                    $userRow=$query2->fetch_assoc();
	                    $user =$userRow['name'];

		              }
		         	?>
					<a href="#" class="card-link"><small><?= $user ?></small></a>
					<small class="text-secondary">answered on</small>
					<small class="text-secondary"><?= $row['date'] ?></small>
				</p>
				<p>
					<?= $row['answer']?>
				</p>
			</div>
		</div>
		
		<?php

            }

          }
          else
          {

        ?>

        <div class="card mb-4 shadow-sm">
			<div class="card-body">
				<p>
					No Answers Found.
				</p>
			</div>
		</div>

        <?php 
        	}
        ?>


		<div class="card mb-4 shadow-sm">
			<div class="card-body">
				<form action="submit_Answer.php" method="POST">
					<input type="hidden" name="question_Id" value="<?= $question_Id ?>">
					<div class="form-group">
						<h4 class="mb-4">Your Answer</h4>
						<textarea name="yourAnswer" id="yourAnswer" rows="5" class="form-control" placeholder="Enter Your Answer Here." required></textarea>
					</div>
					<button type="submit" class="btn btn-primary mt-3">Post your Answer</button>
				</form>
			</div>
		</div>
	</div>