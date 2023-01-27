<?php
include_once("./generalConfig.php");

$sqlDomandeMedie = "SELECT DISTINCT id_domanda, domanda FROM domande_medie";

$domandeMedie = mysqli_query($conn, $sqlDomandeMedie);
$arrayDomandeMedie = array();

while($row = mysqli_fetch_assoc($domandeMedie))
{
    $arrayDomandeMedie[] = $row;
}

echo json_encode($arrayDomandeMedie);