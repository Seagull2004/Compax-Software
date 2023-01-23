<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="domande_risposte.css">
    <title>Document</title>
</head>
<body>

    <nav>
        <div class="contenitore">
            <h4>Compax Software</h4>
            <div class="opzioni">
                <ul>
                    <li><a href="../admin.php">Dashboard</a></li>
                    <li><a href="../adminLogin/login-out/logout.php">Esci</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    include_once '../../../php/config.php';

    $sql1 = "SELECT id_domanda, domanda FROM domande_medie";
    $result1 = $conn->query($sql1);

    $sql2 = "SELECT id_risposta, id_domanda, risposta FROM risposte_medie";
    $result2 = $conn->query($sql2);

    echo "<h2>Domande Medie</h2>";
    if ($result1->num_rows > 0) {
        echo "<table><tr><th>id_domanda</th><th>domanda</th></tr>";
        while($row = $result1->fetch_assoc()) {
            echo "<tr><td>" . $row["id_domanda"]. "</td><td>" . $row["domanda"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    echo "<h2>Risposte Medie</h2>";
    if ($result2->num_rows > 0) {
        echo "<table><tr><th>id_risposta</th><th>id_domanda</th><th>risposta</th></tr>";
        while($row = $result2->fetch_assoc()) {
            echo "<tr><td>" . $row["id_risposta"]. "</td><td>" . $row["id_domanda"]. "</td><td>" . $row["risposta"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

?>


<form action="insert.php" method="post">
    <label for="domanda" class="domanda">Inserisci una nuova domanda:</label>
    <input type="text" id="domanda" name="domanda"><br>
    <label for="num_risposte">Numero di risposte:</label>
    <select id="num_risposte" name="num_risposte" onchange="createInputFields()">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br>
    <div id="input_fields"></div>
    <input type="submit" value="Invia" class="insert">
</form>


<script>
    function createInputFields() {
    var numRisposte = document.getElementById("num_risposte").value;
    var inputFields = document.getElementById("input_fields");
    inputFields.innerHTML = "";
    for (var i = 1; i <= numRisposte; i++) {
    inputFields.innerHTML += '<label for="risposta' + i + '">Risposta ' + i + ':</label><input type="text" id="risposta' + i + '" name="risposta' + i + '"><br>';
    }
}
</script>

<form action="delete.php" method="post">
    <label for="domande">Seleziona la domanda da eliminare:</label>
    <select id="domande" name="id_domanda">
        <?php
        $sql = "SELECT id_domanda, domanda FROM domande_medie";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row['id_domanda'] . '">' . $row['domanda'] . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="Elimina" class="delete">
</form>





</body>
</html>