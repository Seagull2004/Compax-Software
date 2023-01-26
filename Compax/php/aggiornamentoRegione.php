<?php
include_once("./generalConfig.php");

$q = $_REQUEST["q"];
$q = ltrim($q, " ");

$sqlProvincia = 'SELECT DISTINCT Provincia FROM scuole WHERE Regione = "' . $q . '"  ORDER BY `scuole`.`Provincia` ASC;';
$sqlComune = 'SELECT DISTINCT Comune FROM scuole WHERE Regione = "' . $q . '"  ORDER BY `scuole`.`Comune` ASC;';
$sqlNomeIstituto = 'SELECT DISTINCT `Nome istituto`, `id_scuola` FROM scuole WHERE Regione = "' . $q . '"  ORDER BY `scuole`.`Nome istituto` ASC;';

$comuni = mysqli_query($conn, $sqlComune);
$provincie = mysqli_query($conn, $sqlProvincia);
$scuole = mysqli_query($conn, $sqlNomeIstituto);

$arrayComuni = array();
$arrayProvince = array();
$arrayScuole = array();
$arrayIdScuole = array();


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
    array_push($arrayIdScuole, $key["id_scuola"]);
}
echo json_encode($arrayScuole);
echo json_encode($arrayIdScuole);