<?php
include_once '../../../php/config.php';
// Check if the form has been submitted
if (isset($_POST['domanda']) && isset($_POST['num_risposte'])) {
    $domanda = $_POST['domanda'];
    $num_risposte = $_POST['num_risposte'];

    // Insert new question into "domande_medie" table
    $sql = "INSERT INTO domande_medie (domanda) VALUES ('$domanda')";
    $conn->query($sql);
    // Get id of the last inserted question
    $id_domanda = $conn->insert_id;

    for ($i = 1; $i <= $num_risposte; $i++) {
        $risposta = $_POST['risposta' . $i];
        // Insert new answer into "risposte_medie" table with the id of the question
        $sql = "INSERT INTO risposte_medie (id_domanda, risposta) VALUES ('$id_domanda', '$risposta')";
        $conn->query($sql);
    }
    echo "La domanda e le risposte sono state inserite con successo.";
}
?>