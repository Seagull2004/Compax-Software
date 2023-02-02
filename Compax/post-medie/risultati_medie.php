<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Scuola adatta</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="risultati_medie.css">
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $regione = $_GET["regione"];
        $provincia = $_GET["provincia"];
        $comune = $_GET["comune"];
        $id_scuola = $_GET["id_scuola"];
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

        <img src="cappelloViola.webp" alt="" class="cappelloViola">
        <img src="diploma.webp" alt="" class="diploma">
        <img src="mappamondo.webp" alt="" class="mappamondo">

        <div class="header">
            <div class="info">
                <form action="generaPDF.php" method="GET">
                    <h1 style="font-size: 50px; text-align: center; margin-top: 5%; display: none;" class="compaxsoftware">Certificato Compax Software</h1>
                    <div class="titolo">
                        <h1>Benvenuto <input type="text" name="nome" value="<?php echo $nome?>" readonly> !</h1>
                    </div>
                    <h2>Ecco qui le scuole che ti si addicono di più in base alle tue risposte: </h2>

                   
                    <h2 style="margin-top: 5%; font-size: x-large;">La scuola più adatta a te è: </h2>
                    <h3><input type="text" name="primo_istituto_adatto" value="<?php echo substr(str_replace("_", " ", $primo_istituto_adatto), 5)?>" readonly><p><input readonly type="text" name="pt_primo_istituto_adatto" value="(<?php echo $pt_primo_istituto_adatto?> punti)"></p></h3>

                    <div class="scuole">
                        <div class="seconda">
                            <h4 style="margin-top: 7%; font-size: x-large;">La seconda scuola più adatta a te è: </h4>
                            <h5><input readonly type="text" name="secondo_istituto_adatto" value="<?php echo substr(str_replace("_", " ", $secondo_istituto_adatto), 5)?>"><p><input readonly type="text" name="pt_secondo_istituto_adatto" value="(<?php echo $pt_secondo_istituto_adatto?> punti)"></p></h5>
                        </div>
                        <div class="terza">
                            <h4 style="margin-top: 7%; font-size: x-large;">La terza scuola più adatta a te è: </h4>
                            <h5><input readonly type="text" name="terzo_istituto_adatto" value="<?php echo substr(str_replace("_", " ", $terzo_istituto_adatto), 5)?>"><p><input readonly type="text" name="pt_terzo_istituto_adatto" value="(<?php echo $pt_terzo_istituto_adatto?> punti)"></p></h5>
                        </div>
                    </div>
                    <input class="button-19 no-stampa" role="button" type="submit" value="Stampa">
                </form>
                <button class="button-19 no-stampa" role="button" onclick="location.href='/Compax/index.php'">Homepage</button>
            </div>
        </div>
    </section>
</body>
</html>
