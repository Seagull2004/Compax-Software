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
        $serverName = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "compax_software";

        $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

        if(!$conn)
        {
            die("Connessione fallita: " . mysqli_connect_error());
        }

        $sqlRisposteMedie = "SELECT punti_liceo_sportivo, punti_conservatorio, punti_istituto_professionale, punti_istituto_tecnico	punti_liceo_scientifico, punti_liceo_classico, punti_scienze_umane, punti_istituto_tecnico_turistico, punti_professionale_sociale, punti_liceo_linguistico FROM risposte_medie";


        // Dopo aver trovato gli id di tutte le risposte date modifico la query in modo tale da richiedere una tabelle con le sole risposte di interesse
        $i = 0;
        $arrayRisposteDate = array();
        foreach ($_POST as $key => $value) 
        {
            $i++;
            if($i > 5)
                array_push($arrayRisposteDate, $key);
        }
        foreach ($arrayRisposteDate as $key => $value) 
        {
            if($key != 0)
            {
                $sqlRisposteMedie .= " OR id_risposta = " . $value;
            }
            else
            {
                $sqlRisposteMedie .= " WHERE id_risposta = " . $value;
            }
            
        }

        $risposteMedie = mysqli_query($conn, $sqlRisposteMedie);
        $arrayRisposteMedie = array();
        while($row = mysqli_fetch_assoc($risposteMedie))
        {
            $arrayRisposteMedie[] = $row;
        }

        $punteggiIstituti = array();
        foreach ($arrayRisposteMedie[0] as $key => $value) 
        {
            $punteggiIstituti[$key] = 0;
        }
        
        foreach($punteggiIstituti as $key => $value)
        {
            // echo "adesso analizzo i " . $key . "<br>";
            foreach ($arrayRisposteMedie as $key2 => $value2) 
            {
                foreach ($value2 as $key3 => $value3) 
                {
                    if($key == $key3)
                    {
                        // echo $value . " + " . $value3 . " = ";
                        $value = $value + $value3;
                        // echo $value . "<br>";
                    }
                }
            }
            $punteggiIstituti[$key] = $value;
        }

        asort($punteggiIstituti);
        $punteggiIstituti = array_reverse($punteggiIstituti);


        $nome = $_POST["nomeStudente"];
        $regione = $_POST["regioni"];
        $provincia = $_POST["provincie"];
        $comune = $_POST["comuni"];
        $id_scuola = $_POST["scuole"];

        $primo_istituto_adatto = "";
        $pt_primo_istituto_adatto = "";
        $secondo_istituto_adatto = "";
        $pt_secondo_istituto_adatto = "";
        $terzo_istituto_adatto = "";
        $pt_terzo_istituto_adatto = "";

        $i = 0;
        foreach ($punteggiIstituti as $key => $value) 
        {
            if($i == 0)
            {
                $primo_istituto_adatto = $key;
                $pt_primo_istituto_adatto = $value;
            }
            else if($i == 1)
            {
                $secondo_istituto_adatto = $key;
                $pt_secondo_istituto_adatto = $value;
            }
            else if($i == 2)
            {
                $terzo_istituto_adatto = $key;
                $pt_terzo_istituto_adatto = $value;
            }
            else
            {
                break;
            }
            $i++;
        }



        $sqlInsert = 'INSERT INTO risultati_medie (Nome, Regione, Provincia, Comune, id_scuola, primo_istituto_adatto, pt_primo_istituto_adatto, secondo_istituto_adatto, pt_secondo_istituto_adatto, terzo_istituto_adatto, pt_terzo_istituto_adatto)
        VALUES ( "' . $nome .'", "' . $regione .'", "' . $provincia .'", "' . $comune .'", "' . $id_scuola .'", "' . $primo_istituto_adatto .'", "' . $pt_primo_istituto_adatto .'", "' . $secondo_istituto_adatto .'", "' . $pt_secondo_istituto_adatto .'", "' . $terzo_istituto_adatto .'", "' . $pt_terzo_istituto_adatto .'")';


        if ($conn->query($sqlInsert) === TRUE) 
        {
            echo " ";
        } 
        else
         {
            echo "Error: " . $sqlInsert . "<br>" . $conn->error;
        }

        $conn->close();
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
                <button class="button-19" role="button" onclick="location.href=''">Homepage</button>
                <button class="button-19" role="button">Stampa</button>
            </div>
        </div>
    </section>
</body>
</html>
