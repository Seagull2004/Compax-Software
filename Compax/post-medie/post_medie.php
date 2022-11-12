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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Post medie</title>

    <script>
        function aggiornamentoRegione()
        {
            var regioneSelezionata = document.getElementById('regioni').options[document.getElementById('regioni').selectedIndex].innerHTML;
            console.log("hai selezionato: " + regioneSelezionata)
        }

        function aggiornamentoComune()
        {
            var comuneSelezionato = document.getElementById('comuni').options[document.getElementById('comuni').selectedIndex].innerHTML
            console.log("hai selezionato: " + comuneSelezionato)
        }

        function aggiornamentoProvincia()
        {
            var provinciaSelezionata = document.getElementById('provincie').options[document.getElementById('provincie').selectedIndex].innerHTML
            console.log("hai selezionato: " + provinciaSelezionata)
        }

        function aggiornamentoScuola()
        {
            var scuolaSelezionata = document.getElementById('scuole').options[document.getElementById('scuole').selectedIndex].innerHTML
            console.log("hai selezionato: " + scuolaSelezionata)
        }
    </script>
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

            <select id="regioni" name="regioni" onchange="aggiornamentoRegione()">
                <option value disabled selected>Regione</option>
                <?php while($row3 = mysqli_fetch_assoc($regioni)):; ?>
                    <option <?php echo 'value="$_POST["regioni"]"'?>> <?php echo $row3["Regione"];?></option>
                <?php endwhile;?>
            </select>

            <select id="provincie" onchange="aggiornamentoProvincia()">
                <option>Provincia</option>
                <?php while($row2 = mysqli_fetch_array($provincie)):; ?>
                <option> <?php echo $row2["Provincia"];?> </option>
                <?php endwhile;?>
            </select>

            <select id="comuni" onchange="aggiornamentoComune()">
                <option>Comune</option>
                <?php while($row1 = mysqli_fetch_array($comuni)):; ?>
                <option> <?php echo $row1["Comune"];?> </option>
                <?php endwhile;?>
            </select>

            <select id="scuole" onchange="aggiornamentoScuola()">
                <option>Scuola</option>
                <?php while($row4 = mysqli_fetch_array($scuole)):; ?>
                <option> <?php echo $row4["Nome istituto"];?> </option>
                <?php endwhile;?>
            </select>
        </form>

    </section>
</body>
</html>