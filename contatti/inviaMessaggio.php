<?php
if(isset($_POST['invia'])){
	$nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $testo = $_POST['testo'];
    $policy = $_POST['policy'];

    require_once '../php/config.php';
    require_once 'funzioni.php';

    if(emptyMess($nome, $cognome, $email, $testo) !== false){
        header("Location: contatti.php?error=emptyinput");
        exit();
    }
    if(isChecked($policy) === false){
        header("Location: contatti.php?error=notChecked");
        exit();
    }

    inviaMess($conn, $nome, $cognome, $email, $testo);

}
else{
    header("Location: ../error/error.php");
    exit();
}