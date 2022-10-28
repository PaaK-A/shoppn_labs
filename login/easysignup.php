<?php 
    require_once "../settings/db_class.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = 'stylesheet' href = '../style/signin_login.css'>
   
    <title>Sign-Up</title>
</head>

<body>
    <div class= "entry_content">
        <div class="sign_logInheader">
            <h1>Sign-Up </h1>
        </div>

        <form method="POST" action="">
            <!-- create username form. -->
            <h4>Name</h4>
            <input type="text" name="username" class="text-input" required>

            <!-- create Email form. -->
            <h4>Email</h4>
            <input type="text" name="email" class="text-input" required>

            <!-- create Password form. -->
            <h4>Password</h4>
            <input type="password" name="passcode" class="text-input" id="psw" 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >

            <h4>country</h4>
            <input type="text" name="customercountry" class="text-input" >

            <h4>city</h4>
            <input type="text" name="customercity" class="text-input" >

            <h4>telephone</h4>
            <input type="text" name="telephone" class="text-input" >

            <h4>img</h4>
            <input type="image" name="img" class="text-input" >

            <input type="submit" name="submitSignIn" class="sub_button" value="Sign-Up">
            <p>Already have an account? <a href = 'login.php'>Log In </a> </p>
        <form>

       
    </div>

  

    <?php
        if(isset($_POST['submitSignIn'])){
            //createAssignment("assign_Name","assign_date","due_date","enter_questions","marks");
            //write query 
            $name= $_POST['username'];
            $e_mail= $_POST['email'];
            $pass= password_hash($_POST['passcode'],PASSWORD_BCRYPT);
            $ccountryl= $_POST['customercountry'];
            $ccity= $_POST['customercity'];
            $ctele= $_POST['telephone'];
            $cimg= $_POST['img'];


            //create conncetion 

            $conn = mysqli_connect(SERVER,USERNAME,PASSWD,DATABASE);

            //check connection
            if(mysqli_connect_errno()){
                die("Connection failed" . mysqli_connect_error()); 
            }
            else{
                echo "Connection successful.";
            }

            //insert into elevenuser database
            $sql = "INSERT INTO customer (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_image,user_role) VALUES ('$name','$e_mail','$pass','$ccountryl','$ccity','$ctele','$cimg','2')";
                
            //execute query
            if (mysqli_query($conn, $sql)) {
                header("location: easylogin.php");
                //echo "It worked";
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
        }
    ?>
