<?php
$serverName = "localhost:3307";
$dbUsername = "root";
$dbPassword = "";
$dbName = "my_compaxsw";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn)
{
    die("Connessione fallita: " . mysqli_connect_error());
}