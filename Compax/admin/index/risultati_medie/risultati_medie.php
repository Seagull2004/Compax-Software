<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="risultati_medie.css">
    <title>Risultati medie</title>
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

    $sql = "SELECT id_risultato_medie, nome, regione, primo_istituto_adatto, secondo_istituto_adatto, terzo_istituto_adatto FROM risultati_medie";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>id_risultato_medie</th><th>nome</th><th>regione</th><th>primo_istituto_adatto</th><th>secondo_istituto_adatto</th><th>terzo_istituto_adatto</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id_risultato_medie"]. "</td><td>" . $row["nome"]. "</td><td>" . $row["regione"]. "</td><td>" . $row["primo_istituto_adatto"]. "</td><td>" . $row["secondo_istituto_adatto"]. "</td><td>" . $row["terzo_istituto_adatto"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();


    ?>
</body>

</html>