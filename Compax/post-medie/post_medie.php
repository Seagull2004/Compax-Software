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
        function aggiornamentoRegione(regioneSelezionata)
        {
            var provincie;
            var comuni;
            var scuole;
            var output;
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                output = this.responseText;
                provincie = output.substring(0, output.indexOf("]") + 1);
                output = output.substring(output.indexOf("]") + 1 , output.length);   
                comuni = output.substring(0, output.indexOf("]") + 1);
                output = output.substring(output.indexOf("]") + 1 , output.length);
                scuole = output.substring(0, output.indexOf("]") + 1);
                output = output.substring(output.indexOf("]") + 1 , output.length);

                provincie = provincie.replace('[', "");
                provincie = provincie.replace(']', "");
                comuni = comuni.replace('[', "");
                comuni = comuni.replace(']', "");
                scuole = scuole.replace('[', "");
                scuole = scuole.replace(']', "");

                for (let i = 0; i < provincie.length; i++) 
                {
                    provincie = provincie.replace('"', "");
                }
                for (let i = 0; i < comuni.length; i++) 
                {
                    comuni = comuni.replace('"', "");
                }
                for (let i = 0; i < scuole.length; i++) 
                {
                    scuole = scuole.replace('"', "");
                }

                provincie = provincie.split(",");
                comuni = comuni.split(",");
                scuole = scuole.split(",");

                document.getElementById('provincie').innerHTML = "";
                $("#provincie").append("<option value disabled selected>Provincia</option>");
                provincie.forEach(i => {
                    $("#provincie").append('<option value="$_POST["provincie"]">' + i + '</option>')
                });

                document.getElementById('comuni').innerHTML = "";
                $("#comuni").append("<option value disabled selected>Comune</option>");
                comuni.forEach(i => {
                    $("#comuni").append('<option value="$_POST["comuni"]">' + i + '</option>')
                });

                document.getElementById('scuole').innerHTML = "";
                $("#scuole").append("<option value disabled selected>Scuola</option>");
                scuole.forEach(i => {
                    $("#scuole").append('<option value="$_POST["scuole"]">' + i + '</option>')
                });
            }
            };
            xmlhttp.open("GET", "../php/aggiornamentoRegione.php?q=" + regioneSelezionata, true);
            xmlhttp.send();
        }

        function aggiornamentoProvincie(provinciaSelezionata)
        {
            var regione = [];
            var comuni = [];
            var scuole = [];
            var output;
            
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                output = this.responseText;
                console.log(output);
            }
            };
            xmlhttp.open("GET", "../php/aggiornamentoProvincia.php?q=" +provinciaSelezionata, true);
            xmlhttp.send();
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

            <select id="regioni" name="regioni" onchange="aggiornamentoRegione(this.options[this.selectedIndex].innerHTML)">
                <option value disabled selected>Regione</option>
                <?php while($row3 = mysqli_fetch_assoc($regioni)):; ?>
                    <option <?php echo 'value="$_POST["regioni"]"'?>> 
                        <?php echo $row3["Regione"];?>
                    </option>
                <?php endwhile;?>
            </select>

            <select id="provincie" onchange="aggiornamentoProvincia(this.options[this.selectedIndex].innerHTML)">
                <option>Provincia</option>
                <?php while($row2 = mysqli_fetch_array($provincie)):; ?>
                <option> 
                    <?php echo $row2["Provincia"];?> 
                </option>
                
                <?php endwhile;?>
            </select>

            <select id="comuni" onchange="aggiornamentoComune(this.options[this.selectedIndex].innerHTML)">
                <option>Comune</option>
                <?php while($row1 = mysqli_fetch_array($comuni)):; ?>
                <option> <?php echo $row1["Comune"];?> </option>
                <?php endwhile;?>
            </select>

            <select id="scuole" onchange="aggiornamentoScuola(this.options[this.selectedIndex].innerHTML)">
                <option>Scuola</option>
                <?php while($row4 = mysqli_fetch_array($scuole)):; ?>
                <option> <?php echo $row4["Nome istituto"];?> </option>
                <?php endwhile;?>
            </select>
        </form>

    </section>
</body>
</html>