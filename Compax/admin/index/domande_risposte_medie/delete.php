<?php
include_once '../../../php/config.php';
// Check if the form has been submitted
if (isset($_POST['id_domanda'])) {
    $id_domanda = $_POST['id_domanda'];

    // Delete the question from the "domande_medie" table
    $sql = "DELETE FROM domande_medie WHERE id_domanda = '$id_domanda'";
    $conn->query($sql);

    // Delete the answers related to the question from the "risposte_medie" table
    $sql = "DELETE FROM risposte_medie WHERE id_domanda = '$id_domanda'";
    $conn->query($sql);

    echo "La domanda e le relative risposte sono state eliminate con successo.";
}
?>
