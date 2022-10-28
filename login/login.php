<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form action= "loginprocess.php" method="POST">
        <!--make username textbox-->
        <label for="email">Email:</label>
        <input type="text" name="customeremail" placeholder="Enter your email" id="customeremail" >

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

</body>