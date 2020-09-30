<?php
include("connection.php");
$queryTest ="SELECT user FROM test ORDER BY id DESC LIMIT 1 ";
$resultTest= mysqli_query($link,$queryTest);
$rowTest = mysqli_fetch_array($resultTest);
$user = $rowTest['user'];

if (array_key_exists("submit", $_POST)) {
  $queryAdd ="INSERT INTO `test` (`ID`, `created_on`, `user`) VALUES (NULL, NULL, '".$_POST['user']."')";
  if(!mysqli_query($link, $queryAdd))
    {
      $error = "can't submit  <br> ";
    }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.35">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Metal+Mania&display=swap" rel="stylesheet">
    <!-- Load Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Merriweather&display=swap" rel="stylesheet">  <!-- Load Styles -->
    <title>sql conecction test</title>
  </head>
  <body>
    <div class="user">
      <form class="" method="post">
        <label for="user">please enter your name</label>
        <input id="user" type="text" name="user" value="">
        <button type="submit" name="button">submit user</button>
      </form>
    </div>
  <div class="latest">
    <h1>latest user is:</h1>
    <h1><? echo $user ?></h1>
  </div>
  </body>
</html>
