<?php
$serverName = "localhost:3307";
$dbUsername = "root";
$dbPassword = "";
$dbName = "compax_software";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connessione fallita: " . mysqli_connect_error());
}


$sqlRegioni = "SELECT DISTINCT Regione FROM scuole ORDER BY `scuole`.`Regione` ASC";
$sqlProvincia = "SELECT DISTINCT Provincia FROM scuole ORDER BY `scuole`.`Provincia` ASC";
$sqlComune = "SELECT DISTINCT Comune FROM scuole WHERE Regione = 'Piemonte' ORDER BY `scuole`.`Comune` ASC;";
$sqlNomeIstituto = "SELECT DISTINCT `Nome istituto` FROM scuole";

$regioni = mysqli_query($conn, $sqlRegioni);
$comuni = mysqli_query($conn, $sqlComune);
$provincie = mysqli_query($conn, $sqlProvincia);
$scuole = mysqli_query($conn, $sqlNomeIstituto);