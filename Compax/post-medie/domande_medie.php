<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="domande_medie.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Domande medie</title>

    
</head>
<script src="./post_medie.js"></script>
<script>

    var domande = []
    var risposte = []

    const promise1 = $.ajax({
        url: "../php/queryDomandeMedie.php",
        type: "POST",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            domande = JSON.parse(data)

        }
    });
    const promise2 = $.ajax({
        url: "../php/queryRisposteMedie.php",
        type: "POST",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            risposte = JSON.parse(data)

        }
    });

    Promise.all([promise1, promise2]).then(function (response1, response2) {
        generaForm()
    });

    function generaForm() 
    {
        domande.forEach(function (item, i) {
            $('.content').append("<h1 style='text-align: center; padding-top: 2%;'> Domanda " + (i+1) + "</h1>")
            $('.content').append("<label style='font-family: system-ui, sans-serif; font-size: 1.5rem; font-weight: bold;'>" + item.domanda + "</label>")
            
            let nrRisposte = 0
            risposte.forEach(function (itemRisposte, iRisposte) 
            {
                if (item.id_domanda == itemRisposte.id_domanda) 
                {
                    nrRisposte++
                }
            })

            var nrDomanda = 0
            if(nrRisposte <= 3)
            {
                risposte.forEach(function (itemRisposte, iRisposte) 
                {
                    if (item.id_domanda == itemRisposte.id_domanda) 
                    {
                        $('.content').append(
                            "<label class='container' value='" +
                            itemRisposte.id_risposta +
                            "'>" +
                            itemRisposte.risposta +
                            "<input type='radio' name='" +
                            itemRisposte.id_domanda +
                            "' value = '" +
                            itemRisposte.id_risposta +
                            "'><span class='checkmark'></span></label>"
                        )
                    }
                })
            }
            else
            {
                risposte.forEach(function (itemRisposte, iRisposte) 
                {
                    if (item.id_domanda == itemRisposte.id_domanda) 
                    {
                        $('.content').append(
                            "<label class='container' value='" +
                            itemRisposte.id_risposta +
                            "'>" +
                            itemRisposte.risposta +
                            "<input type='checkbox' name='" +
                            itemRisposte.id_domanda +
                            "' value = '" +
                            itemRisposte.id_risposta +
                            "'><span class='checkmark'></span></label>"
                        )
                    }
                })
            }
            $('.content').append("<hr></hr>")
        })

        /*
        $('.content input[type="checkbox"]').click(function () {
        var checkbox = $(this);
        var nomeDomanda = checkbox.attr("name");
        if (checkbox.is(':checked')) {
            $("input[type='checkbox'][name='" + nomeDomanda + "']").not(checkbox).prop('checked', false);
        }
        });
        */
    }


</script>


<body>
    <section>
        <img src="../img/cappelloViola.png" alt="" class="cappelloViola">
        <img src="../img/diploma.png" alt="" class="diploma">
        <img src="../img/mappamondo.png" alt="" class="mappamondo">

        <form method="POST" action="./inserisci_risultati_medie.php">
            <div class="header">
                <div class="boh">
                    <h1>Benvenuto</h1>
                    <input type="text" class='risultatiMedie' name="nomeStudente" value="<?php echo $_POST["nomeStudente"]?>" readonly>
                </div>
                
                <div class="infoUtente">
                    <p class='paragrafo'>Scuola </p>
                    <input type="text" name="scuole" value="<?php echo $_POST["scuole"]?>"readonly>
                    <p class='paragrafo'>di</p>
                    <input type="text" name="comuni" value="<?php echo $_POST["comuni"]?>"readonly>
                    <p class='paragrafo'> Provincia</p>
                    <input type="text" name="provincie" value="<?php echo $_POST["provincie"]?>"readonly>
                    <p class='paragrafo'>,</p>
                    <input type="text" name="regioni" value="<?php echo $_POST["regioni"]?>"readonly>
                </div>
                <hr>
            </div>
            <div class="content">
            </div>
                <input type="submit" value="Invia">
        </form>
    </section>
</body>

</html>