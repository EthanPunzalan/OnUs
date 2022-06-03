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
    <link rel="stylesheet" href="css/contactUsPage.css">
    <title>OnUs|ContactUs</title>
</head>
<body>
    <div class="navBar">
        <img src="imgs/logo.png" alt="">
        <a href="homePage.php">Home</a>
        <a href="categoryPage.php">Category</a>
        <a href="pricingPage.php">Pricing</a>
        <a class="active" href="contactUsPage.php">Contact Us</a>
        <a href="includes/logout.inc.php" class="logoutLink">Logout</a>
    </div>

    <section>
        <div class="sectionOneContainer">
            <h1>Get in <span style="color: #F3890C;">Touch</span></h1>
            <p>Reach ON-<span style="color: #F3890C;">US</span> customer service using the quick links below</p>
            <?php
        if(isset($_GET['mailsent'])){
            if($_GET['mailsent'] == "error"){
                echo "<p class='errorMsg'>Error sending email</p>";
            }else if ($_GET['mailsent'] == "noerror"){
                echo "<p class='success'>Successfuly sent!</p>";
            }
        }   
        ?>
        </div>
       
        <div class="boxContainer">
            <div class="box boxOne">
                <img src="imgs/cloudMail.png" alt="">
                <h1 style="color: #F3890C;">Got everything you need?</h1>
                <p>Make sure you have gotten everything you need. 
                    You can always contact us if you have some ideas and changes you want to make 
                    with the project you gave us.</p>
            </div>
            <div class="box boxTwo">
                <img src="imgs/contactUsPhone.png" alt="">
                <h1 style="color: #F3890C;">Request a call back</h1>
                <p>Give us a call so we can help you with your vision 
                    and the changes you want to make. We can also work 
                    together in live meetings to discuss the things you want to 
                    change and improve.</p>
            </div>
        </div>
    </section>
    <section>
    <img class="blur" src="imgs/blur1.png" alt="">
        <img class="blur2" src="imgs/blur2.png" alt="">
        <div class="contactForm">
            <p>Get in Touch</p>
            <h1>Reach us here<span style="color: #F3890C;">.</span></h1>
            <p>We'll get back to you as soon as possible</p>
            <form action="includes/mail.inc.php" method="POST" enctype="multipart/form-data" name="EmailForm">
                <label for="">Service Type:</label><br>
                <input class="inputA" type="text" name="serviceType" placeholder="Media Production" required><br>
                <label for="">Contact Number:</label><br>
                <input class="inputA inputB" type="text" name="number" placeholder="+971 50 123 4567" required><br>
                <label for="">Your Email:</label><br>
                <input class="inputA inputB" type="email" name="email" value="<?php echo $row['email']?>"><br>
                <label for="">Message to us:</label><br>
                <textarea class="inputA inputArea" name="message" id="" cols="50" rows="7"></textarea><br>
                <input type="text" name="name" value="<?php echo $row['first_name']?>" hidden>
                <input id="signupBtn" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </section>
</body>
</html>

<?php
              }
            }
        }
?>