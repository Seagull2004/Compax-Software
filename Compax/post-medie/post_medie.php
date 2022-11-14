<?php
    include_once("../php/config.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post_medie.css">
    <title>Post medie</title>
</head>

<body>
    <section>
        <div class="bar">
            <div class="width"></div>
        </div>


        <img src="../img/cappelloViola.png" alt="" class="cappelloViola">
        <img src="../img/diploma.png" alt="" class="diploma">
        <img src="../img/mappamondo.png" alt="" class="mappamondo">

        <div class="header">
            <h1>Domanda 1/?</h1>
            <p>Inserisci il tuo nome e la scuola che hai frequentato</p>
        </div>


        <hr>
        <form action="#">
            <input type="text" name="nomeStudente" id="nomeStudente" placeholder="Nome">

            <select id="regioni" name="regioni">
                <option value disabled selected>Regione</option>
                <?php while($row3 = mysqli_fetch_assoc($regioni)):; ?>
                <option <?php echo 'value="$_POST["regioni"]"'?>> <?php echo $row3["Regione"];?></option>
                <?php endwhile;?>
            </select>

            <select id="comuni">
                <option>Comune</option>
                <?php while($row1 = mysqli_fetch_array($comuni)):; ?>
                <option> <?php echo $row1["Comune"];?> </option>
                <?php endwhile;?>
            </select>

            <select id="provincie">
                <option>Provincia</option>
                <?php while($row2 = mysqli_fetch_array($provincie)):; ?>
                <option> <?php echo $row2["Provincia"];?> </option>
                <?php endwhile;?>
            </select>

            <select id="scuole">
                <option>Scuola</option>
                <?php while($row4 = mysqli_fetch_array($scuole)):; ?>
                <option> <?php echo $row4["Nome istituto"];?> </option>
                <?php endwhile;?>
            </select>
        </form>

    </section>
</body>
</html>