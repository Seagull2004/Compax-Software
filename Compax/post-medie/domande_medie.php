
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post_medie.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Domande medie</title>
    <script src="./post_medie.js"></script>
    <script>

        var domande = []
        var risposte = []
        
        $.ajax({
            url: "../php/queryDomandeMedie.php",
            type: "POST",
            contentType: "application/json; charset=utf-8",
            success: function(data) 
            {
                domande = JSON.parse(data)
            }
        });

        $.ajax({
            url: "../php/queryRisposteMedie.php",
            type: "POST",
            contentType: "application/json; charset=utf-8",
            success: function(data) 
            {
                risposte = JSON.parse(data)
                setTimeout(generaForm(), 100)
            }
        });

        function generaForm()
        {
            domande.forEach(function(item, i)
            {
                $('.content').append("<h1 style='text-align: center; padding-top: 2%;'> Domanda " + i + "</h1>")
                $('.content').append("<label style='font-family: system-ui, sans-serif; font-size: 1.5rem; font-weight: bold;'>" + item.domanda + "</label>")
                risposte.forEach(function(itemRisposte, iRisposte)
                {
                    if(item.id_domanda == itemRisposte.id_domanda)
                    {
                        $('.content').append(
                            "<label class='container' value='" + 
                            itemRisposte.id_risposta + 
                            "'>" + 
                            itemRisposte.risposta + 
                            "<input type='checkbox' name='" + 
                            itemRisposte.id_risposta + 
                            "' value = '" + 
                            itemRisposte.risposta +
                            "'><span class='checkmark'></span></label>"
                        )
                    }
                })
                $('.content').append("<hr></hr>")
            })
        }

    </script>
    <style>
        .header{
            background-color: rgb(245, 240, 240);
            border-radius: 10px;
            overflow: Auto;
            background-color: #EEEEEE;
            height: 600px;
            scrollbar-base-color: #2da8ff;
            scrollbar-arrow-color: #CCCCCC;
            scrollbar-track-color: #CCCCCC;
        }
    </style>
</head>

<body>
    <section>
        <div class="bar">
            <div class="width"></div>
        </div>

        <!--<img src="../img/cappelloViola.png" alt="" class="cappelloViola">-->
        <img src="../img/diploma.png" alt="" class="diploma">
        <img src="../img/mappamondo.png" alt="" class="mappamondo">

        <form class="form" method="POST" action="risultati_medie.php">
            <div class="header">
                <div>Benvenuto</div>
                <input type="text" name="nomeStudente" value="<?php echo $_POST["nomeStudente"]?>">
                <div>
                    Frequentante la scuola 
                    <input type="text" name="scuole" value="<?php echo $_POST["scuole"]?>">
                    di 
                    <input type="text" name="comuni" value="<?php echo $_POST["comuni"]?>">
                    in procincia di
                    <input type="text" name="provincie" value="<?php echo $_POST["provincie"]?>">
                    ,
                    <input type="text" name="regioni" value="<?php echo $_POST["regioni"]?>">
                </div>
                <div class="content">
                </div>
                <submit>
                    <button>
                        Invia
                    </button>
                </submit>
            </div>
        </form>

        <!--<form class="form">
            <div class="header">
                <h1>Domanda 1</h1>
                <div class="content">
                    <label class="form-control">Quale tra le seguenti riviste leggi o ti piacerebbe leggere? </label>
                    <label class="container">One
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Two
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Three
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Four
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </form>-->

    </section>
</body>
</html>