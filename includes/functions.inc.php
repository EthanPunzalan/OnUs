<?php

function pwdMatch($pwd,$pwdConfirm){
    //$result;
    if($pwd !== $pwdConfirm){
        $result = true;
    }else{
        $result=false;
    }
    return $result;
}

function emailExists($db,$email){
    $sql="SELECT * FROM users WHERE email=?;";
    $stmt =mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('location:../signup.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;

        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($db,$f_name,$l_name,$email,$pwd){
    $sql="INSERT INTO users (first_name,last_name,email,password) VALUES (?,?,?,?);";
    $stmt =mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('location:../signup.php?error=stmtfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",$f_name,$l_name,$email,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location:../signup.php?error=noerror');
    exit();
}

function loginUser($db,$email,$pwd){
    $emailExists = emailExists($db,$email,$email);

    if($emailExists === false){
        header('location:../index.php?error=wronglogin');
        exit();
    }

    $pwdHashed = $emailExists['password'];
    $checkPwd= password_verify($pwd,$pwdHashed);

    if($checkPwd === false){
        header('location:../index.php?error=wronglogin');
        exit();
    }else if($checkPwd === true){
        session_start();
        $_SESSION['userid'] = $emailExists['id'];
        $_SESSION['useruid'] = $emailExists['username'];
        header('location:../homePage.php');
        exit();
    }
}
