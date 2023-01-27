<?php
    include_once ("../../php/config.php");
    
    $sqlRisultati = "SELECT id_risultato_medie, primo_istituto_adatto FROM risultati_medie";

    $risultati = mysqli_query($conn, $sqlRisultati);
    $arrayRisultati = array();

    while($row = mysqli_fetch_assoc($risultati)){
        $arrayRisultati[] = $row;
    }

    echo json_encode($arrayRisultati);

?>