<?php
//import library
require_once "./vendor/autoload.php";

//create connection with mongodb server
$Mycon=new MongoDB\Client;

//connect with particular database
$Mydb=$Mycon->ccs;
//connect with particular collection
$Mycol=$Mydb->users;
if($Mycol)
{
    //echo "Connected with collection:-".$Mycol;

}
else "Unable to connect  with mongodb";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <form action="signin.php" method="Post">
            <h2>Login</h2>
            <div class="input-field">
                <input type="email" name="lEmail" id="lEmail" required>
                <label for="lEmail">Enter Your Email</label>
            </div>
            <div class="input-field">
                <input type="password" name="lPassword" id="lPassword" required>
                <label for="lPassword">Enter Your Password</label>
            </div>
            <div class="password-options">
                <label for="remember">
                    <input type="checkbox" name="lCheckbox" id="remember">
                    <p>Remember me</p>
                </label>
                <a href="#">Forget Password</a>
            </div>

            <input class="loginbtn" type="submit" value="Login" name="l_submit">
            <!-- <button type="submit">Login</button> -->
            <div class="account-options">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>