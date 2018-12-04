<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CodeTrek</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/user_functions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">CodeTrek Forum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
       aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Questions</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
              <i class="fa fa-cog"></i>
            </a>
            <?php
              include_once('../config.php');
              $query=mysqli_query($con,"SELECT * FROM `users` WHERE `id` = '$_SESSION[user]' ");

              $row = $query->fetch_assoc();
            ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdown-item disabled"><?= $row['name'] ?></div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Sign out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>