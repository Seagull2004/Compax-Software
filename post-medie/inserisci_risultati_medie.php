<?php
include_once("../php/generalConfig.php");

$sqlRisposteMedie = "SELECT punti_liceo_sportivo, punti_conservatorio, punti_istituto_professionale, punti_istituto_tecnico	punti_liceo_scientifico, punti_liceo_classico, punti_scienze_umane, punti_istituto_tecnico_turistico, punti_professionale_sociale, punti_liceo_linguistico FROM risposte_medie";

// Dopo aver trovato gli id di tutte le risposte date modifico la query in modo tale da richiedere una tabelle con le sole risposte di interesse
$i = 0;
$arrayRisposteDate = array();
foreach ($_POST as $key => $value) 
{
    $i++;
    if($i > 5)
        array_push($arrayRisposteDate, $key);
}
foreach ($arrayRisposteDate as $key => $value) 
{
    if($key != 0)
    {
        $sqlRisposteMedie .= " OR id_risposta = " . $value;
    }
    else
    {
        $sqlRisposteMedie .= " WHERE id_risposta = " . $value;
    }
}

$risposteMedie = mysqli_query($conn, $sqlRisposteMedie);
$arrayRisposteMedie = array();
while($row = mysqli_fetch_assoc($risposteMedie))
{
    $arrayRisposteMedie[] = $row;
}

$punteggiIstituti = array();
foreach ($arrayRisposteMedie[0] as $key => $value) 
{
    $punteggiIstituti[$key] = 0;
}

foreach($punteggiIstituti as $key => $value)
{
    // echo "adesso analizzo i " . $key . "<br>";
    foreach ($arrayRisposteMedie as $key2 => $value2) 
    {
        foreach ($value2 as $key3 => $value3) 
        {
            if($key == $key3)
            {
                // echo $value . " + " . $value3 . " = ";
                $value = $value + $value3;
                // echo $value . "<br>";
            }
        }
    }
    $punteggiIstituti[$key] = $value;
}

asort($punteggiIstituti);
$punteggiIstituti = array_reverse($punteggiIstituti);

$nome = $_POST["nomeStudente"];
$regione = $_POST["regioni"];
$provincia = $_POST["provincie"];
$comune = $_POST["comuni"];
$id_scuola = $_POST["scuole"];

$primo_istituto_adatto = "";
$pt_primo_istituto_adatto = "";
$secondo_istituto_adatto = "";
$pt_secondo_istituto_adatto = "";
$terzo_istituto_adatto = "";
$pt_terzo_istituto_adatto = "";

$i = 0;
foreach ($punteggiIstituti as $key => $value) 
{
    if($i == 0)
    {
        $primo_istituto_adatto = $key;
        $pt_primo_istituto_adatto = $value;
    }
    else if($i == 1)
    {
        $secondo_istituto_adatto = $key;
        $pt_secondo_istituto_adatto = $value;
    }
    else if($i == 2)
    {
        $terzo_istituto_adatto = $key;
        $pt_terzo_istituto_adatto = $value;
    }
    else
    {
        break;
    }
    $i++;
}

$sqlInsert = 'INSERT INTO risultati_medie (Nome, Regione, Provincia, Comune, id_scuola, primo_istituto_adatto, pt_primo_istituto_adatto, secondo_istituto_adatto, pt_secondo_istituto_adatto, terzo_istituto_adatto, pt_terzo_istituto_adatto)
VALUES ( "' . $nome .'", "' . $regione .'", "' . $provincia .'", "' . $comune .'", "' . $id_scuola .'", "' . $primo_istituto_adatto .'", "' . $pt_primo_istituto_adatto .'", "' . $secondo_istituto_adatto .'", "' . $pt_secondo_istituto_adatto .'", "' . $terzo_istituto_adatto .'", "' . $pt_terzo_istituto_adatto .'")';

if ($conn->query($sqlInsert) === TRUE) 
{
    echo " ";
} 
else
    {
    echo "Error: " . $sqlInsert . "<br>" . $conn->error;
}

$conn->close();
echo "la connessione è stata appena chiusa e i dati sono stati inseriti con successo";

// Effettuo il redirect verso la pagina di destinazione
header("Location: ./risultati_medie.php?nome=" . $nome . "&regione=" . $regione . "&provincia=" . $provincia . "&comune=" . $comune . "&id_scuola=" . $id_scuola . "&primo_istituto_adatto=" . $primo_istituto_adatto . "&pt_primo_istituto_adatto=" . $pt_primo_istituto_adatto . "&secondo_istituto_adatto=" . $secondo_istituto_adatto . "&pt_secondo_istituto_adatto=" . $pt_secondo_istituto_adatto . "&terzo_istituto_adatto=" . $terzo_istituto_adatto . "&pt_terzo_istituto_adatto=" . $pt_terzo_istituto_adatto);
