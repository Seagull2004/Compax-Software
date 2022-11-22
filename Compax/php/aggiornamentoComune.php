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

$sqlRegioneAttuale = 'SELECT DISTINCT Regione FROM scuole WHERE Comune = "' . $q . '"  ORDER BY `scuole`.`Regione` ASC;';
$sqlProvinciaAttuale = 'SELECT DISTINCT Provincia FROM scuole WHERE Comune = "' . $q . '" ORDER BY `scuole`.`Provincia` ASC;';
$sqlRegioni = 'SELECT DISTINCT Regione FROM scuole ORDER BY `scuole`.`Regione` ASC';
$sqlProvince = 'SELECT DISTINCT Provincia FROM scuole ORDER BY `scuole`.`Provincia` ASC';
$sqlNomeIstituto = 'SELECT DISTINCT `Nome istituto`, `id_scuola` FROM scuole WHERE Comune = "' . $q . '"  ORDER BY `scuole`.`Nome istituto` ASC;';

$regioneAttuale = mysqli_query($conn, $sqlRegioneAttuale);
$provinciaAttuale = mysqli_query($conn, $sqlProvinciaAttuale);
$regioni = mysqli_query($conn, $sqlRegioni);
$province = mysqli_query($conn, $sqlProvince);
$scuole = mysqli_query($conn, $sqlNomeIstituto);

$arrayRegioneAttuale = array();
$arrayProvinciaAttuale = array();
$arrayRegione = array();
$arrayProvince = array();
$arrayScuole = array();
$arrayIdScuole = array();

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

while($key = mysqli_fetch_array($scuole))
{
    array_push($arrayScuole, $key["Nome istituto"]);
    array_push($arrayIdScuole, $key["id_scuola"]);
}
echo json_encode($arrayScuole);

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

echo json_encode($arrayIdScuole);
