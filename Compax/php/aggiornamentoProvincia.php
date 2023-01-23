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

$sqlRegioneAttuale = 'SELECT DISTINCT Regione FROM scuole WHERE Provincia = "' . $q . '"  ORDER BY `scuole`.`Regione` ASC;';
$sqlRegioni = 'SELECT DISTINCT Regione FROM scuole ORDER BY `scuole`.`Regione` ASC';
$sqlComune = 'SELECT DISTINCT Comune FROM scuole WHERE Provincia = "' . $q . '"  ORDER BY `scuole`.`Comune` ASC;';
$sqlNomeIstituto = 'SELECT DISTINCT `Nome istituto`, `id_scuola` FROM scuole WHERE Provincia = "' . $q . '"  ORDER BY `scuole`.`Nome istituto` ASC;';

$regioneAttuale = mysqli_query($conn, $sqlRegioneAttuale);
$comuni = mysqli_query($conn, $sqlComune);
$regioni = mysqli_query($conn, $sqlRegioni);
$scuole = mysqli_query($conn, $sqlNomeIstituto);

$arrayRegioneAttuale = array();
$arrayComuni = array();
$arrayRegione = array();
$arrayScuole = array();
$arrayIdScuole = array();

while($key = mysqli_fetch_array($regioni))
{
    array_push($arrayRegione, $key["Regione"]);
}
echo json_encode($arrayRegione);

while($key = mysqli_fetch_array($comuni))
{
    array_push($arrayComuni, $key["Comune"]);
}
echo json_encode($arrayComuni);

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

echo json_encode($arrayIdScuole);
