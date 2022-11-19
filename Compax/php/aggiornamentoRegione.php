<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "compax_software";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connessione fallita: " . mysqli_connect_error());
}

$q = $_REQUEST["q"];
$q = ltrim($q, " ");

$sqlProvincia = "SELECT DISTINCT Provincia FROM scuole WHERE Regione = '" . $q . "'  ORDER BY `scuole`.`Provincia` ASC;";
$sqlComune = "SELECT DISTINCT Comune FROM scuole WHERE Regione = '" . $q . "'  ORDER BY `scuole`.`Comune` ASC;";
$sqlNomeIstituto = "SELECT DISTINCT `Nome istituto` FROM scuole WHERE Regione = '" . $q . "'  ORDER BY `scuole`.`Nome istituto` ASC;";

$comuni = mysqli_query($conn, $sqlComune);
$provincie = mysqli_query($conn, $sqlProvincia);
$scuole = mysqli_query($conn, $sqlNomeIstituto);

$arrayComuni = array();
$arrayProvince = array();
$arrayScuole = array();

while($key = mysqli_fetch_array($provincie))
{
    array_push($arrayProvince, $key["Provincia"]);
}
echo json_encode($arrayProvince);

while($key = mysqli_fetch_array($comuni))
{
    array_push($arrayComuni, $key["Comune"]);
}
echo json_encode($arrayComuni);

while($key = mysqli_fetch_array($scuole))
{
    array_push($arrayScuole, $key["Nome istituto"]);
}
echo json_encode($arrayScuole);
