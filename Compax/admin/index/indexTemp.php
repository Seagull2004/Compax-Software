<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: ../../error/error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp</title>
</head>

<body>
    <h1>Melissa sta piang... volevo dire LAVORANDO sul grafico :)</h1>
    <ul>
        <li><a href="./domande_risposte_medie/domande_risposte_medie.php">Domande risposte</a></li>
        <li><a href="./messaggi/messaggi.php">Messaggi</a></li>
        <li><a href="./risultati/risultati_medie.php">Risultati</a></li>
        <li><a href="../adminLogin/login-out/logout.php">Esci</a></li>
    </ul>
</body>

</html>