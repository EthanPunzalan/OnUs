<?php
    require_once 'includes/db.inc.php';
    session_start();
        if(isset($_SESSION['userid'])){
            $user = $_SESSION['userid'];
            $sql = "SELECT * FROM users WHERE id='$user'";
            $res =mysqli_query($db,$sql);

            if(mysqli_num_rows($res)>0){
                $result=mysqli_query($db,"SELECT * FROM users WHERE id='$user'");
                while($row=mysqli_fetch_array($result)){
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/OnUs/css/landingPage.css">
    <title>OnUs</title>
</head>
<body>
    <div class="navBar">
        <img src="/OnUs/imgs/logo.png" alt="">
        <a class="active" href="homePage.php">Home</a>
        <a href="categoryPage.php">Category</a>
        <a href="pricingPage.php">Pricing</a>
        <a href="contactUsPage.php">Contact Us</a>
        <a href="includes/logout.inc.php" class="logoutLink">Logout</a>
        <!-- <a href="loginPage.html" class="loginBtn">Sign in</a> -->
    </div>

<section>
    <div class="sloganContainer">
        <img src="/OnUs/imgs/OnUsBG.png" alt="">
        <img class="blur" src="/OnUs/imgs/blur1.png" alt="">
        <img class="blur2" src="/OnUs/imgs/blur2.png" alt="">
        <h1>Hello <span style=" color:#F3890C;"><?php echo $row['first_name']?></span>!</h1>
        <h1>Digital Services?<br><span style="color: #F3890C;">It's On-Us</span></h1>
        <div class="sloganP">
            <p>Where innovations and imaginations are brought to life through Design, Technology,
                Integrity, Fairness and Commitment to our customers.</p>
        </div>
        <!-- <button class="signupBtn" onclick="location.href='signup.html'">Sign up</button> -->
    </div>

    <div class="landingPageDesign">
        <!-- <img class="purpBG" src="/imgs/Vector 1.png" alt=""> -->
        <img class="phone" src="/OnUs/imgs/phone.png" alt="">
        
        
    </div>
</section>

<section id="wdwd">
   <div class="wdwdCont">
        <h1>What do we do<span style="color:#F3890C ;">?</span></h1>
        <p>We take our clients' ideas, visualize them and turn them into reality. And basically offer the best experience in planning and transforming ideas into a finished product</p>
   </div>
</section>

<section>
    <div class="ourWorksCont">
        <h1><span style="color:#F3890C ;">Our</span> Works</h1>
        <div class="row1">

        </div>
        <div class="row2">

        </div>
    </div>
</section>

<section id="team">
    <div class="theTeamCont">
        <h1><span style="color:#F3890C ;">Our</span> Team</h1>
        <div class="row1">
            <img src="/OnUs/imgs/ethan.png" alt="">
            <img src="/OnUs/imgs/sean.png" alt="">
            <img src="/OnUs/imgs/jonathan.png" alt="">
        </div>
        <div class="row2">
            <img src="/OnUs/imgs/cedric.png" alt="">
            <img src="/OnUs/imgs/altherenz.png" alt="">
            <img src="/OnUs/imgs/heaven.png" alt="">
        </div>
    </div>
</section>

    <div class="footer">
        <div class="footer1">
            <img class="footerLogo"src="imgs/footerLogo.png" alt="">
            <p class="footerContent">Where innovation and imagination are brought to life through design<br>
                and technology.
                <br>
                <br>
                Integrity, fairness and commitment to our customers.
                <br>
                <br>
                <!-- saan punta? -->
                <span style="color: #FF8A00;">Read more →</span>
            </p>
        </div>
        <div class="footer2">
            <h3>Categories</h3>
            <a href="digitalMarketingPage.php">Digital Marketing</a><br>
            <a href="websiteAppsPage.php">Website & Mobile Application</a><br>
            <a href="mediaProductionPage.php">Media Production</a><br>
        </div>

        <div class="footer3">
            <h3>FAQs</h3>
            <a href="#team">Who are we?</a><br>
            <a href="#wdwd">What do we do?</a><br>
            <a href="pricingPage.php">Pricing</a><br>
        </div>

        <div class="footer4">
            <h3>Contacts</h3>        
        </div>

                    
    </div>   

</body>
</html>

<?php
              }
            }
        }
?>