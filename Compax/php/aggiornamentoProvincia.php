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

//$sqlProvincia = "SELECT DISTINCT Provincia FROM scuole WHERE Regione = '" . $q . "'  ORDER BY `scuole`.`Provincia` ASC;";
$sqlRegione = "SELECT DISTINCT Regione FROM scuole WHERE Regione = '" . $q . "'  ORDER BY `scuole`.`Regione` ASC;";
$sqlComune = "SELECT DISTINCT Comune FROM scuole WHERE Regione = '" . $q . "'  ORDER BY `scuole`.`Comune` ASC;";
$sqlNomeIstituto = "SELECT DISTINCT `Nome istituto` FROM scuole WHERE Regione = '" . $q . "'  ORDER BY `scuole`.`Nome istituto` ASC;";

$comuni = mysqli_query($conn, $sqlComune);
$regione = mysqli_query($conn, $sqlRegione);
$scuole = mysqli_query($conn, $sqlNomeIstituto);


echo "in seguito tutti le regioni di " . $q . "__________________________________________\n";
while($key = mysqli_fetch_array($regione))
{
    echo $key["Regione"] . "\n";
}

echo "in seguito tutti i comuni di " . $q . "__________________________________________\n";
while($key = mysqli_fetch_array($comuni))
{
    echo $key["Comune"] . "\n";
}

echo "in seguito tutti le scuole di " . $q . "__________________________________________\n";
while($key = mysqli_fetch_array($scuole))
{
    echo $key["Nome istituto"] . "\n";
}
