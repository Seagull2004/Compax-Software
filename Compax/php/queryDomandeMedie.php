<?php
$serverName = "localhost:3307";
$dbUsername = "root";
$dbPassword = "";
$dbName = "compax_software";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn)
{
    die("Connessione fallita: " . mysqli_connect_error());
}

$sqlDomandeMedie = "SELECT DISTINCT id_domanda, domanda FROM domande_medie";

$domandeMedie = mysqli_query($conn, $sqlDomandeMedie);
$arrayDomandeMedie = array();

while($row = mysqli_fetch_assoc($domandeMedie))
{
    $arrayDomandeMedie[] = $row;
}

echo json_encode($arrayDomandeMedie);