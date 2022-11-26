<?php

function inviaMess($conn, $nome, $cognome, $email, $testo){
    $sql = "INSERT INTO messaggi (nome, cognome, email, testo) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: contatti.php?error=stmtfail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $nome, $cognome, $email, $testo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: contatti.php?error=noerror");
}

function emptyMess($nome, $cognome, $email, $testo){
    $result = isset($result) ? $result: '';
    if(empty($nome) || empty($cognome) || empty($email) || empty($testo)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function isChecked($policy){
    $result = isset($result) ? $result: '';
    if(isset($_POST['policy']) && $_POST['policy'] == 'checked'){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}