<?php
if(isset($_POST['submit'])){
    $serviceType = $_POST['serviceType'];
    $number = $_POST['number'];
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "punzalan.ethan@yahoo.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo,$serviceType,$txt,$headers);
    header("Location: ../contactUsPage.php?mailsent=noerror");
}