

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
            }
        });

        function generaForm()
        {
            domande.forEach(function(item, i)
            {
                $('#domande_medie').append("<h1>" + item.domanda + "</h1>")
                risposte.forEach(function(itemRisposte, iRisposte)
                {
                    if(item.id_domanda == itemRisposte.id_domanda)
                    {
                        $('#domande_medie').append("<span value='" + itemRisposte.id_risposta + "'>" + itemRisposte.risposta + "</span>")
                    }
                })
            })
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
        
        <form id="domande_medie">

        </form>

    </section>
</body>
</html>