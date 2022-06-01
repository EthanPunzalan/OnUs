<?php

if(isset($_POST['login'])){
    
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    loginUser($db,$email,$pwd);
}else{
    header('location:../index.php');
    exit();
}