<?php
    include_once("../php/generalConfig.php");
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
    <script src="./post_medie.js"></script>
</head>

<style>
.paragrafo{
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    font-size: 1.5rem;
    text-align:center;
}

.button{
        padding: 12px 24px;
        font-size: 16px;
        color: white;
        background-color: #0063AC;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        text-align: center;
        transition: background-color 0.3s ease;
        margin-top: 20px;
        box-shadow: 11px 14px 22px 3px rgba(0,0,0,0.1);
}

button:hover {
        background-color: #4398D7;
}
</style>


<body>
    <section>
        
        <img src="../img/cappelloViola.png" alt="" class="cappelloViola">
        <img src="../img/diploma.png" alt="" class="diploma">
        <img src="../img/mappamondo.png" alt="" class="mappamondo">

        
            <div class="header">
                    <div class='content_header'>
                    <p class='paragrafo'>Inserisci il tuo nome e la scuola che hai frequentato</p>
                
                    <hr>
                    <form class="form" action="domande_medie.php" method="POST">
                        <input required type="text" name="nomeStudente" id="nomeStudente" placeholder="Nome">

                        <select required id="regioni" name="regioni" onchange="cambioRegione(this.options[this.selectedIndex].innerHTML)">
                            <option value disabled selected>Regione</option>
                            <?php while($row3 = mysqli_fetch_assoc($regioni)):; ?>
                                <option> 
                                    <?php echo $row3["Regione"];?>
                                </option>
                            <?php endwhile;?>
                        </select>

                        <select required id="provincie" name="provincie" onchange="cambioProvincia(this.options[this.selectedIndex].innerHTML)">
                            <option value disabled selected>Provincia</option>
                            <?php while($row2 = mysqli_fetch_array($provincie)):; ?>
                                <option> 
                                    <?php echo $row2["Provincia"];?> 
                                </option>
                            <?php endwhile;?>
                        </select>

                        <select required id="comuni" name="comuni" onchange="cambioComune(this.options[this.selectedIndex].innerHTML)">
                            <option value disabled selected>
                                Comune
                            </option>
                            <?php while($row2 = mysqli_fetch_array($comuni)):; ?>
                                <option> 
                                    <?php echo $row2["Comune"];?> 
                                </option>
                            <?php endwhile;?>
                        </select>

                        <select required id="scuole" name="scuole" onchange="cambioScuola(this.options[this.selectedIndex].value)">
                            <option value disabled selected>
                                Scuola
                            </option>
                            <?php while($row4 = mysqli_fetch_array($scuole)):; ?>
                                <option <?php echo 'value="' . $row4["id_scuola"] . '"';?>> 
                                    <?php echo $row4["Nome istituto"];?> 
                                </option>
                            <?php endwhile;?>
                        </select>

                        <submit>
                            <button class="button">
                                Avanti
                            </button>
                        </submit>
                    </form>
            </div>
            </div>  
    </section>
</body>
</html>