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
<table>
  <tr>
    <th>Title</th>
    <th colspan="3">Link</th>
  </tr>

  <tr>

    <td>Task 1-4</td>
    <td>
      <a href="login/register.php">Register</a>
      <!-- <a href="login/login.php">Login</a> -->
    </td>
    <td>
      <?php
        // Initialize the session
        session_start();
        
        // Check if the user is already logged in
        // If yes check if admin
        //If admin display Logout and Brand 
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
          echo '<a href="login/logout.php">Logout</a>';
          
        }
        else{
          echo '<a href="login/login.php">Login</a>';
          
        }
      ?>
    </td>
    

  </tr>

  <tr>
    <td>Task 5&6</td>
    <td>
      <a href="login/register.php">Register</a>
      <!-- <a href="login/login.php">Login</a> -->
    </td>

    <td>
      <?php
        // Initialize the session
        session_start();
        
        // Check if the user is already logged in
        // If yes check if admin
        //If admin display Logout and Brand
        //If user display logout only 
        //else display login 
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

          if($_SESSION["role"] == 1){
            echo '<a href="login/logout.php">Logout</a>';
       
      ?>
    </td>
    <td>
      <?php      
            echo '<a href="admin/brand.php">Brand</a>';
            exit;
          }
          
          else{
            echo '<a href="login/logout.php">Logout</a>';
          }
        
        }
        
        else{
          echo '<a href="login/login.php">Login</a>';
        }
        
      ?>
      
    </td>
  </tr>

  <tr>
    <td>Task 6&7</td>
   
    <td>
      <a href="login/register.php">Register</a>
      <!-- <a href="login/login.php">Login</a> -->
    </td>

    <td>
      <?php
        // Initialize the session
        session_start();
        
        // Check if the user is already logged in
        // If yes check if admin
        //If admin display Logout and Brand
        //If user display logout only 
        //else display login 
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

          if($_SESSION["role"] == 1){
            echo '<a href="login/logout.php">Logout</a>';
       
      ?>
    </td>
    <td>
      <?php      
            echo '<a href="admin/brand.php">Brand</a>';
            exit;
          }
        
      ?>
    </td>
    <td>
      <?php      
            echo '<a href="admin/category.php">Category</a>';
            exit;
          }
        
        
      
        else{
          echo '<a href="login/login.php">Login</a>';
        }
        
      ?>
      
    </td>
  </tr>
  
</table>
</body>

