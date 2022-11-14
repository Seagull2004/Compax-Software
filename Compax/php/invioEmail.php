<?php

if(isset($_POST['inviaEmail'])){
    $email = $_POST['email'];
    $subject =  'Benvenuto!';
    $message = '<h1>Ciao</h1><p>Grazie per esserti iscritto</p>';

    $headers = "From: The sender name <prova@gmail.com>\r\n";
    $headers .= "Reply-To: compaxsoftware@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    require_once './config.php';
    require_once 'funzioni.php';

    if(emptyEmail($email) !== false){
        header("Location: ../homepage/index.php?error=emptyinput");
        exit();
    }

    if(emailExists($conn, $email) !== false){
        header("Location: ../homepage/index.php?error=emailEsistente");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("Location: ../homepage/index.php?error=emailInvalida");
        exit();
    }

    salvaMail($conn, $email);
    mail($email, $subject, $message, $headers);
}