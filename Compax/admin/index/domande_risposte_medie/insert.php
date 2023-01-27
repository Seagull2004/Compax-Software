<?php
include_once '../../../php/config.php';
include_once('../../../php/generalConfig.php');
if (isset($_POST['domanda']) && isset($_POST['num_risposte'])) {
    $domanda = $_POST['domanda'];
    $num_risposte = $_POST['num_risposte'];

    $sql = "INSERT INTO domande_medie (domanda) VALUES ('$domanda')";
    $conn->query($sql);
    $id_domanda = $conn->insert_id;

    for ($i = 1; $i <= $num_risposte; $i++) {
        $risposta = $_POST['risposta' . $i];
        $punti_liceo_sportivo = $_POST['punti_liceo_sportivo' .$i];
        $punti_conservatorio = $_POST['punti_conservatorio' .$i];
        $punti_istituto_professionale = $_POST['punti_istituto_professionale' .$i];
        $punti_istituto_tecnico = $_POST['punti_istituto_tecnico' .$i];
        $punti_liceo_scientifico = $_POST['punti_liceo_scientifico' .$i];
        $punti_liceo_classico = $_POST['punti_liceo_classico' .$i];
        $punti_scienze_umane = $_POST['punti_scienze_umane' .$i];
        $punti_istituto_tecnico_turistico = $_POST['punti_istituto_tecnico_turistico' .$i];
        $punti_professionale_sociale = $_POST['punti_professionale_sociale' .$i];
        $punti_liceo_linguistico = $_POST['punti_liceo_linguistico' .$i];

        $sql = "INSERT INTO risposte_medie (id_domanda, risposta, punti_liceo_sportivo, punti_conservatorio, punti_istituto_professionale, punti_istituto_tecnico, punti_liceo_scientifico, punti_liceo_classico, punti_scienze_umane, punti_istituto_tecnico_turistico, punti_professionale_sociale, punti_liceo_linguistico) VALUES ('$id_domanda', '$risposta', '$punti_liceo_sportivo', '$punti_conservatorio', '$punti_istituto_professionale', '$punti_istituto_tecnico', '$puntu_liceo_scientifico', '$punti_liceo_classico', '$punti_scienze_umane', '$punti_istituto_tecnico_turistico', '$punti_professionale_sociale', '$punti_liceo_linguistico',)";
        $conn->query($sql);
    }
    echo "La domanda e le risposte sono state inserite con successo.";
}
?>