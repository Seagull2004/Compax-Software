<?php
include_once('../../../php/generalConfig.php');
include_once('../../../php/config.php');

if (isset($_POST['id_domanda'])) {
    $id_domanda = $_POST['id_domanda'];


    $sql = "DELETE FROM domande_medie WHERE id_domanda = '$id_domanda'";
    $conn->query($sql);

    $sql = "DELETE FROM risposte_medie WHERE id_domanda = '$id_domanda'";
    $conn->query($sql);

    echo "La domanda e le relative risposte sono state eliminate con successo.";
}
?>
