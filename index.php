<?php 
//to start session
include ("settings/core.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = 'stylesheet' href = '../style/signin_login.css'>
   
    <title>Labs</title>

    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
</head>

<body> 
<h1> Basic Task Index </h1>

<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  if($_SESSION["role"] == 1){
    echo '<a href="login/logout.php">Logout</a>';
    echo '<a href="admin/brand.php">Brand</a>';
    echo '<a href="admin/category.php">Category</a>';
  }
  else{
    echo '<a href="login/logout.php">Logout</a>';
  }
}
else{
  echo '<a href="login/login.php">Login</a>';
  
  echo '<a href="login/register.php">Register</a>';
}
?>

</body>

