<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="messaggi.css">
    <title>Messaggi</title>
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

    $sql = "SELECT nome, cognome, email, testo FROM messaggi";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>nome</th><th>cognome</th><th>email</th><th>testo</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nome"]. "</td><td>" . $row["cognome"]. "</td><td>" . $row["email"]. "</td><td>" . $row["testo"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>


</body>
</html>