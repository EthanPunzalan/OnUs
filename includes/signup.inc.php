<?php

    if(isset($_POST['signup'])){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $pwdConfirm = $_POST['confirm_password'];

        require_once 'db.inc.php';
        require_once 'functions.inc.php';

        if(pwdMatch($pwd,$pwdConfirm)!== false){
            header('location:../signup.php?error=passwordsdontmatch');
            exit();
        }

        if(emailExists($db,$email) !== false){
            header('location:../signup.php?error=emailtaken');
            exit();
        }

        createUser($db,$f_name,$l_name,$email,$pwd);

    }else{
        header("location:../signup.php");
    }