<?php

if(isset($_POST['accedi'])){
    
    require_once '../../../php/config.php';
    require_once './funzioni.php';

    $adminUsername = mysqli_real_escape_string($conn, $_POST['username']);
    $adminPwd = mysqli_real_escape_string($conn, $_POST['password']);

    if(emptyAdmin($adminUsername, $adminPwd) !== false){
        header("Location: ../adminLogin.php?error=emptyinputad");
        exit();
    }

    loginAdmin($conn, $adminUsername, $adminPwd);
}else{
    header("Location: ../../../error/error.php");
    exit();
}