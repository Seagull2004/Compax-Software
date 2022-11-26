<?php

if(isset($_POST['accedi'])){
	
    $adminUsername = $_POST['username'];
    $adminPwd = $_POST['password'];

    require_once '../../../php/config.php';
    require_once './funzioni.php';

    if(emptyAdmin($adminUsername, $adminPwd) !== false){
        header("Location: ../adminLogin.php?error=emptyinputad");
        exit();
    }

    loginAdmin($conn, $adminUsername, $adminPwd);
}else{
    header("Location: ../../../error/error.php");
    exit();
}