<?php
include_once("./generalConfig.php");

$sqlRisposteMedie = "SELECT DISTINCT id_risposta, id_domanda, risposta, punti_liceo_sportivo, punti_conservatorio, punti_istituto_professionale, punti_istituto_tecnico	punti_liceo_scientifico, punti_liceo_classico, punti_scienze_umane, punti_istituto_tecnico_turistico, punti_professionale_sociale, punti_liceo_linguistico FROM risposte_medie";

$risposteMedie = mysqli_query($conn, $sqlRisposteMedie);
$arrayRisposteMedie = array();

while($row = mysqli_fetch_assoc($risposteMedie))
{
    $arrayRisposteMedie[] = $row;
}

echo json_encode($arrayRisposteMedie);