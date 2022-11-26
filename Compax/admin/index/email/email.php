<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="email.css">
    <title>Admin-Email</title>
</head>

<body>
<header>
    <nav>
        <h4>Compax Software</h4>

        <div class="opzioni">
            <a class="aNav" href="#home">Statistiche</a>
            <a class="aNav" href="#diploma">Messaggi</a>
            <a class="aNav" href="#percorsi">Email</a>
        </div>
    </nav>
</header>

<?php
        include '../../../php/config.php';
        $query = "SELECT * FROM email";
        $result = mysqli_query($conn, $query);
        $check = mysqli_num_rows($result);

        echo "<table>
        <tr>
        <th>id_email</th>
        <th>email</th>
        </tr>";

        if($check > 0){
          while ($row = mysqli_fetch_array($result)){
            
            echo "<tr>";
            echo "<td scope='row'>" . $row['id_email'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
          }

          echo "</table>";
        }
        ?>

</body>

</html>