<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contactUsPage.css">
    <title>Document</title>
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
        <div class="contactForm">
            <p>Get in Touch</p>
            <h1>Reach us here<span style="color: #F3890C;">.</span></h1>
            <p>We'll get back to you as soon as possible</p>
            <form action="">
                <input class="inputA" type="text"><br>
                <input class="inputA" type="text"><br>
                <input class="inputA inputB" type="text"><br>
                <input class="inputA inputB" type="text"><br>
                <textarea class="inputA inputArea" name="" id="" cols="50" rows="7"></textarea><br>
                <input id="signupBtn" type="submit" value="Submit">
                <input id="cancelBtn" type="submit" value="Cancel">
            </form>
        </div>
    </section>
</body>
</html>