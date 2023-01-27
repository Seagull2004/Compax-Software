<?php
    include_once ("../../php/generalConfig.php");
    
    $sqlScuoleRisultati = "SELECT DISTINCT primo_istituto_adatto FROM risultati_medie";

    $scuoleRisultati = mysqli_query($conn, $sqlScuoleRisultati);
    $arrayScuoleRisultati = array();

    while($row = mysqli_fetch_assoc($scuoleRisultati)){
        $arrayScuoleRisultati[] = $row;
    }

    echo json_encode($arrayScuoleRisultati);

?>