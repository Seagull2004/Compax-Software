<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Scuola adatta</title>
    <link rel="stylesheet" href="risultati_medie.css">
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $regione = $_GET["regioni"];
        $provincia = $_GET["provincie"];
        $comune = $_GET["comuni"];
        $id_scuola = $_GET["scuole"];
        $primo_istituto_adatto = $_GET["primo_istituto_adatto"];
        $pt_primo_istituto_adatto = $_GET["pt_primo_istituto_adatto"];
        $secondo_istituto_adatto = $_GET["secondo_istituto_adatto"];
        $pt_secondo_istituto_adatto = $_GET["pt_secondo_istituto_adatto"];
        $terzo_istituto_adatto = $_GET["terzo_istituto_adatto"];
        $pt_terzo_istituto_adatto = $_GET["pt_terzo_istituto_adatto"];
    ?>

    <section>
        <div class="bar">
            <div class="width"></div>
        </div>

        <img src="../img/cappelloViola.png" alt="" class="cappelloViola">
        <img src="../img/diploma.png" alt="" class="diploma">
        <img src="../img/mappamondo.png" alt="" class="mappamondo">
        <div class="header">
            <div class="title">
                <div class="title-title">
                    <h1 style="display: flex; float: left;">Benvenuto</h1><input type="text" class="inputNome" value="<?php echo $nome?>">
                </div>
                <div class="title-content">
                    <h3>Di seguito sono riportate le scuole che sono risultate più idonee alla tua persona: </h3>
                    <h3>Scelta 1:</h3>
                    <div class="pallino"></div>
                    <p class="scelta">La scelta più adatta è il:<p>
                    <input type="text" class="input" value="<?php echo $primo_istituto_adatto?>">
                    <p style="display: flex; float:left;"> con un punteggio di</p> 
                    <input type="number" class="inputPunti" value="<?php echo $pt_primo_istituto_adatto?>">
                    <p>punti</p>
                    <h3>Scelta 2:</h3>
                    <div class="pallino"></div>
                    <p class="scelta">La scelta più adatta è il:<p>
                    <input type="text" class="input" value="<?php echo $secondo_istituto_adatto?>">
                    <p style="display: flex; float:left;"> con un punteggio di</p> 
                    <input type="number" class="inputPunti" value="<?php echo $pt_secondo_istituto_adatto?>">
                    <p>punti</p>
                    <h3>Scelta 3:</h3>
                    <div class="pallino"></div>
                    <p class="scelta">La scelta più adatta è il:<p>
                    <input type="text" class="input" value="<?php echo $terzo_istituto_adatto?>">
                    <p style="display: flex; float:left;"> con un punteggio di</p> 
                    <input type="number" class="inputPunti" value="<?php echo $pt_terzo_istituto_adatto?>">
                    <p>punti</p>
                </div>
                <button class="button-19" role="button" onclick="location.href='/Compax-Software-main/Compax/homepage/index.php'"> Homepage</button>
                <button class="button-19" role="button">Stampa</button>
            </div>
        </div>
    </section>
</body>
</html>
