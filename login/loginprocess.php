<?php
include "../controllers/customer_controller.php";

 //collecting form data
 if(ISSET($_POST['loginsubmit'])){
    $get_email= $_POST['customeremail'];
    $get_passwd=$_POST['loginpassword'];

    $emailq=selectOneEmail_ctr($get_email);
    $passq=selectOnePass_ctr($get_email);

    //validate email
    if(empty($emailq)){
        echo "Username or password is wrong.";
    }

     // VAlidate password
     else if(password_verify($get_passwd,$passq['customer_pass'])){
        if($emailq['user_role'] == 2){
              
            //echo "password right 2";

            // Password is correct, so start a new session
            session_start();
                        
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $emailq['customer_id'];
            $_SESSION["role"] = $emailq['user_role'];  
            header("location: ../index.php");   
        }
        else{
            
            //echo "password right 1";
            // Password is correct, so start a new session
            session_start();
                        
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $emailq['customer_id'];
            $_SESSION["role"] = $emailq['user_role'];   
            header("location: ../index.php"); 
        }
    }

    else{
        echo "username or Password is wrong.";  
    }

    // else{
    //     echo "correct.";
    //     //var_dump($emailq);
    // } 
    
 }

?>

