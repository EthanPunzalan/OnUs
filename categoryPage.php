<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/OnUs/css/categoryPage.css">
    <title>OnUs|Category</title>
</head>

<body>
    <div class="navBar">
        <img src="/OnUs/imgs/logo.png" alt="">
        <a href="homePage.php">Home</a>
        <a class="active" href="#">Category</a>
        <a href="pricingPage.php">Pricing</a>
        <a href="contactUsPage.php">Contact Us</a>
        <a href="includes/logout.inc.php" class="logoutLink">Logout</a>
    </div>

    <section>
        
        <div class="slider-container">
            <div class="inner-slider">
                <div class="card card1">
                    <h1>01</h1>
                    <h1 class="cardTitle">Media<br> Production</h1>
                    <p>Photography<br>
                        Videography<br>
                        Graphic Design<br></p>
                        <img class="mpImg" src="/OnUs/imgs/MediaProdimg.png" alt="">
                </div>
                <div class="card card2">
                    <h1>02</h1>
                    <h1>Digital<br> Marketing</h1>
                    <p>Email Marketing<br>
                        Google Adwords<br>
                        Youtube Ads<br>
                        Google Display</p>
                        <img class="dmImg" src="/OnUs/imgs/digitalMarkImg.png" alt="">
                </div>
                <div class="card card3">
                    <h1>03</h1>
                    <h1>Website &<br> Mobile Apps</h1>
                    <p>Website Development<br>
                        Mobile App Development<br>
                        E-Commerce Development</p>
                        <img class="wmImg" src="/OnUs/imgs/webImg.png" alt="">
                </div>
            </div>
        </div>


    </section>
    <script>
        let card1 = document.querySelector('.card1');
        let card2 = document.querySelector('.card2');
        let card3 = document.querySelector('.card3');
    

        card1.addEventListener("click", () =>{
            location.href = 'mediaProductionPage.php';
        });
        card2.addEventListener("click", () =>{
            location.href = 'digitalMarketingPage.php';
        });
        card3.addEventListener("click", () =>{
            location.href = 'websiteAppsPage.php';
        });
    
    </script>
</body>
</html>