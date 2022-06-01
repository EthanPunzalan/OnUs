<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginPage.css">
    <title>OnUs|Login</title>
</head>
<body>
<div class="navBar">
    <img src="imgs/logo.png" alt="">
    </div>
<div class="signupForm">
    <p style="margin: 1%; font-family: Sansation_Reg; color:#9a9a9d; font-size:20px;">Welcome Back!</p>
    <h1>Just Log in<span style="color: #F3890C;">.</span></h1>
    <p style="margin: 1%; font-family: Sansation_Reg; color:#9a9a9d; font-size:20px;">Dont have an Account yet? <a href="signup.php" style="text-decoration:none ; color:#F3890C;">Sign up</a></p>
    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "wronglogin"){
                echo "<p class='errorMsg'>Invalid email or password</p>";
            }
        }   
        ?>
    <form action="includes/login.inc.php" method="POST">
        <input class="inputA inputB" type="email" name="email" placeholder="Email" required><br>
        <input class="inputA inputB" type="password" name="password" placeholder="Password" required><br>
        <input id="signupBtn" type="submit" name="login" value="Sign in">
    </form>
</div>

<img class="logo" src="imgs/logo2.png" alt="">

</body>
</html>