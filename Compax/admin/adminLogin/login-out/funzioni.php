<?php

function adminUsernameExists($conn, $adminUsername){
    $sql = "SELECT * FROM admin WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../adminLogin.php?error=stmtfail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $adminUsername);
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


function emptyAdmin($adminUsername, $adminPwd){
    $result= isset($result) ? $result: '';
    if(empty($adminUsername) || empty($adminPwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginAdmin($conn, $adminUsername, $adminPwd){
    $adminUsernameExists = adminUsernameExists($conn, $adminUsername);

    if ($adminUsernameExists == false) {
        header("Location: ../adminLogin.php??error=adminnotexists");
        exit();
    }

    $hashed_adPwd = $adminUsernameExists["password"];
    $checkadPwd = password_verify( $adminPwd, $hashed_adPwd);

    if (password_verify( $adminPwd, $hashed_adPwd)) {
        session_start();
        $_SESSION["admin"] = $adminUsernameExists["id"];
        $_SESSION["nomeAdmin"] = $adminUsernameExists["username"];
        header("Location: ../../index/admin.php");
        exit();
    }
    else{
        header("Location: ../adminLogin.php?error=pwdnomatch");
        exit();
    }
}