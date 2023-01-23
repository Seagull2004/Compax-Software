<?php
$serverName = "localhost:3307";
$dbUsername = "root";
$dbPassword = "";
$dbName = "compax_software";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connessione fallita: " . mysqli_connect_error());
}

$q = $_REQUEST["q"];
$q = ltrim($q, " ");

$sqlComuneAttuale = 'SELECT DISTINCT Comune FROM scuole WHERE `id_scuola` = "' . $q . '"  ORDER BY `scuole`.`Comune` ASC;';
$sqlRegioneAttuale = 'SELECT DISTINCT Regione FROM scuole WHERE `id_scuola` = "' . $q . '"  ORDER BY `scuole`.`Regione` ASC;';
$sqlProvinciaAttuale = 'SELECT DISTINCT Provincia FROM scuole WHERE `id_scuola` = "' . $q . '" ORDER BY `scuole`.`Provincia` ASC;';
$sqlComuni = "SELECT DISTINCT Comune FROM scuole ORDER BY `scuole`.`Comune` ASC;";
$sqlRegioni = 'SELECT DISTINCT Regione FROM scuole ORDER BY `scuole`.`Regione` ASC';
$sqlProvince = 'SELECT DISTINCT Provincia FROM scuole ORDER BY `scuole`.`Provincia` ASC';

$comuneAttuale = mysqli_query($conn, $sqlComuneAttuale);
$regioneAttuale = mysqli_query($conn, $sqlRegioneAttuale);
$provinciaAttuale = mysqli_query($conn, $sqlProvinciaAttuale);
$regioni = mysqli_query($conn, $sqlRegioni);
$province = mysqli_query($conn, $sqlProvince);
$comuni = mysqli_query($conn, $sqlComuni);

$arrayComuneAttuale = array();
$arrayRegioneAttuale = array();
$arrayProvinciaAttuale = array();
$arrayRegione = array();
$arrayProvince = array();
$arrayComuni = array();

while($key = mysqli_fetch_array($regioni))
{
    array_push($arrayRegione, $key["Regione"]);
}
echo json_encode($arrayRegione);

while($key = mysqli_fetch_array($province))
{
    array_push($arrayProvince, $key["Provincia"]);
}
echo json_encode($arrayProvince);

while($key = mysqli_fetch_array($comuni))
{
    array_push($arrayComuni, $key["Comune"]);
}
echo json_encode($arrayComuni);

while($key = mysqli_fetch_array($regioneAttuale))
{
    array_push($arrayRegioneAttuale, $key["Regione"]);
}
echo json_encode($arrayRegioneAttuale);

while($key = mysqli_fetch_array($provinciaAttuale))
{
    array_push($arrayProvinciaAttuale, $key["Provincia"]);
}
echo json_encode($arrayProvinciaAttuale);

while($key = mysqli_fetch_array($comuneAttuale))
{
    array_push($arrayComuneAttuale, $key["Comune"]);
}
echo json_encode($arrayComuneAttuale);
