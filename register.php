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
        <form action="signup.php" method="Post">
            <h2>Register</h2>
            <div class="input-field">
                <input type="email" name="rEmail" id="rEmail" required>
                <label for="rEmail">Enter Your Email</label>
            </div>
            <div class="input-field">
                <input type="password" name="rPassword" id="rPassword" required>
                <label for="rPassword">Enter Your Password</label>
            </div>
            <div class="input-field">
                <input type="password" name="crPassword" id="crPassword" required>
                <label for="crPassword">Confirm Your Password</label>
            </div>
            <div class="password-options">
                <label for="remember">
                    <input type="checkbox" name="rCheckbox" id="remember">
                    <p>Remember me</p>
                </label>
                <a href="#">Forget Password</a>
            </div>

            <input class="loginbtn" type="submit" value="Register" name="r_submit">
            <!-- <button type="submit">Login</button> -->
            <div class="account-options">
                <p>Already have an account? <a href="index.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>