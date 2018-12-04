<div class="container mt-5">
        
        <div class="d-flex justify-content-between mb-3 flex-column flex-md-row">
          <h3 class="font-weight-light mb-0">Questions</h3>
          <div class="d-flex flex-column flex-md-row">
            <form class="form-inline my-2 my-lg-0 mr-md-3">
              <div class="input-group">
                <input class="form-control" type="search" placeholder="Search question" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-info my-0" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <a class="btn btn-outline-primary" href="new_question.php">Ask question</a>
          </div>

        </div>

        <!--Fetching data from database -->
        <?php

          include_once("../config.php");

          $query=mysqli_query($con, "SELECT * FROM `asked_questions` ORDER BY question_Id DESC");

          if($query->num_rows > 0)
          {

            while($row = $query->fetch_assoc()) 
            {

        ?>


        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <h4 class="card-title mb-1"><a class="text-body" href="answers.php?question_Id=<?= $row['question_Id'] ?>"><?= $row["question_Title"] ?></a></h4>
            <p class="text-secondary mb-0">
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
            <p>

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
              <a href="#" class="card-link"><small><?= $user ?></small></a>
              <small class="text-secondary">asked on</small>
              <small class="text-secondary"><?= $row['date'] ?></small>
            </p>
            <div class="d-flex text-secondary">
              <div class="mr-3">
                <script type="text/javascript">
                  function like<?= $row["question_Id"] ?>(){

                   

                    var questionId = "<?= $row["question_Id"] ?>";

                    alert(questionId);

                    $.ajax({
                      type : "POST",
                      url : "home/loginProcess",
                      data : { "questionId" : questionId, },
                      success : function(data)
                      {
                        
                        if(data == "TRUE")
                        {
                          $("#<?= $row["question_Id"] ?>").css({"color": "yellow"});
                        }
                        else
                        {
                          alert("cant like question");
                        }
                      }
                    })

                  }
                </script>
                <i class="far fa-thumbs-up" id="<?= $row["question_Id"] ?>" onclick="like<?= $row["question_Id"] ?>();" style="cursor: pointer;"></i>
                <small>14</small>
              </div>
              <div class="mr-3">
                <script type="text/javascript">
                  function disLike<?= $row["question_Id"] ?>(){

                    alert("<?= $row["question_Id"] ?>");
                  }
                </script>
                <i class="far fa-thumbs-down" onclick="disLike<?= $row["question_Id"] ?>();" style="cursor: pointer;"></i>
                <small>1</small>
              </div>
              <div class="mr-3">
                <i class="far fa-comments"></i>
                <a href="answers.php?question_Id=<?= $row['question_Id'] ?>" class="text-secondary"><small>2 answers</small></a>
              </div>
            </div>
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
              No Questions Found.
            </p>
          </div>
        </div>
        <?php
          }

        ?>

    </div>