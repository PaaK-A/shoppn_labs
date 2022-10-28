<?php include "../controllers/customer_controller.php"; 
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action= "registerprocess.php" method="POST">
        <!--make fullname textbox-->
        <h4>Name</h4>
        <input type="text" name="fname" placeholder="Enter your name" id="fullname" required>

        <!--make email text box--> 
        <h4>Email</h4>
        <input type="email" name="cusemail" placeholder="Enter your email" id="customeremail" required> 

        <!-- create Password form. -->
        <h4>Password</h4>
        <input type="password" name="cuspassword" placeholder="Enter your password" id="psswd" required> 

        <!--make country text box--> 
        <h4>country</h4>
        <input type="text" name="cuscountry" placeholder="Enter your country" id="customercountry" required>  

        <!--make city text box--> 
        <h4>city</h4>
        <input type="text" name="cuscity" placeholder="Enter your city" id="customercity" required>  

       <!--make telephone number text box--> 
       <h4>telephone</h4>
        <input type="text" name="tele" placeholder="Enter your phone number" id="telnumber" required> 

       <!--make image text box--> 
       <h4>img</h4>
       <label for="img">Select image:</label>
        <input type="file" id="img" name="cusimg" accept="image/*">
       
        <br>
        <br>
        <!--submit button-->
        <input type="submit" name="registerinfo" value="Register">
    </form>
    
    <br>

   
    <!--back to index button-->
    <button type="button" onclick="location.href='../index.php'">Return to Index</button>
    
</body>