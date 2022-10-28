
<?php
require "../settings/db_cred.php";
//create conncetion 

$db = mysqli_connect(SERVER,USERNAME,PASSWD,DATABASE);

//check connection
if(mysqli_connect_errno()){
    die("Connection failed" . mysqli_connect_error()); 
}
else{
    echo "Connection successful.";
}
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form action= "" method="POST">
        <!--make username textbox-->
        <label for="email">Email:</label>
        <input type="text" name="customeremail" placeholder="Enter your email" id="cusemail" >

        <br>

       <!--make password textbox--> 
       <label for="Password">Password:</label>
        <input type="password" name="loginpassword" placeholder="Enter your password" id="psswd" > 

        <br>

        <!--submit button-->
        <input type="submit" name="loginsubmit" value="Login">
    </form>

    <br> 

    <form action= "../login/register.php" method="POST">
        <input type="submit" name="register" value="Sign-Up">
    </form>

    <?php
        if(ISSET($_POST['loginsubmit'])){
            $get_email= $_POST['customeremail'];
            $get_passwd=$_POST['loginpassword'];
            
            $selectmailsql="SELECT * FROM customer WHERE customer_email='$get_email' ";
		    $selectpasssql="SELECT customer_pass FROM customer WHERE customer_email='$get_email' ";
            //echo $get_email;

            $checkmailresult= mysqli_query($db,$selectmailsql);
            $checkpasswdresult=mysqli_query($db,$selectpasssql);
            $row= mysqli_fetch_assoc($checkpasswdresult) ;
            $allinforow=mysqli_fetch_assoc($checkmailresult) ;

           
            /* just checking stuff to make sure they work
            print_r ($checkmailresult);
            print_r(mysqli_num_rows($checkmailresult));
            print_r ($row);
            echo "...space...";
            print_r ($get_passwd);
            echo "...space...";
            print_r ($allinforow['user_role']);
            echo "...space..."; 
            print_r (password_verify($get_passwd,$row['customer_pass']));*/
            
            // //validate email
            if(mysqli_num_rows($checkmailresult)==0){
                echo "Username or password is wrong.";
            }
            
            // VAlidate password
            else if(password_verify($get_passwd,$row['customer_pass'])){
                if($allinforow['user_role'] == 2){
                    header("location: ../index.php");    
                    //echo "password right 2";

                    // Password is correct, so start a new session
                    session_start();
                                
                    // Store data in session variables
                    //$_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $allinforow['customer_id'];
                    $_SESSION["role"] = $allinforow['user_role'];   
                }
                else{
                    //header("location: ../admin/adminpage.php");    
                    echo "password right 1";
                    /* // Password is correct, so start a new session
                    session_start();
                                
                    // Store data in session variables
                    $_SESSION["loggedin"] = true;
                    //$_SESSION["id"] = $allinforow['user_id'];
                    $_SESSION["username"] = $name;   */
                }
            }

            else{
                echo "username or Password is wrong.";  
            }
        }
    ?>
</body>