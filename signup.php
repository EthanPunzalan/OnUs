<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signupPage.css">
    <title>OnUs|Sign Up</title>
</head>
<body>
<img class="blur1" src="imgs/blur1.png" alt="">
<img class="blur2" src="imgs/blur2.png" alt="">
<div class="navBar">
    <img src="imgs/logo.png" alt="">
    </div>
<div class="signupForm">
    <p>Sign up for Free</p>
    <h1>Create an Account<span style="color: #F3890C;">.</span></h1>
    <p>Have an Account? <a href="index.php" style="text-decoration:none ; color:#F3890C;">Sign in</a></p>

    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "passwordsdontmatch"){
                echo "<p class='errorMsg'>Password don't match</p>";
            }else if ($_GET['error'] == "emailtaken"){
                echo "<p class='errorMsg'>Email Already Taken</p>";
            }else if ($_GET['error'] == "noerror"){
                echo "<p class='success'>Successfuly signed up!</p>";
            }
        }   
        ?>
    <form action="includes/signup.inc.php" method="POST">
        <input id="firstName" class="inputA" type="text" name="f_name" placeholder="First Name" required>
        <input class="inputA" type="text" name="l_name" placeholder="Last Name" required> <br>
        <input class="inputA inputB" type="email" name="email" placeholder="Email" required><br>
        <input class="inputA inputB" type="password" name="password" placeholder="Password" required><br>
        <input class="inputA inputB" type="password" name="confirm_password" placeholder="Confirm Password" required><br>
        <input id="signupBtn" type="submit" name="signup" value="Sign up">
    </form>

    <img class="logo" src="imgs/logo2.png" alt="">
</div>

</body>
</html>