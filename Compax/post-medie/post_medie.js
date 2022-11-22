/** 
         * Al cambiamento del select con id regioni filtra nel database le provincie, i comuni e le scuole
         */
function cambioRegione(regioneSelezionata)
{
    var provincie
    var comuni
    var scuole
    var idScuole
    var output
    var xmlhttp = new XMLHttpRequest()

    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            output = this.responseText
            provincie = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)   
            comuni = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            scuole = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            idScuole = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)

            provincie = creaArray(provincie)
            comuni = creaArray(comuni)
            scuole = creaArray(scuole)
            idScuole = creaArray(idScuole)

            aggiornamentoRegione(provincie, comuni, scuole, idScuole)
        }
    }
    xmlhttp.open("GET", "../php/aggiornamentoRegione.php?q=" + regioneSelezionata, true)
    xmlhttp.send()
}

/**
 * Aggiorna i select della provincia, comune e scuole sulla base del risultato di cambioRegione
 */
function aggiornamentoRegione(provincie, comuni, scuole, idScuole)
{
    document.getElementById('provincie').innerHTML = ""
    $("#provincie").append("<option value disabled selected>Provincia</option>")
    provincie.forEach(function(i)
    {
        $("#provincie").append('<option>' + i + '</option>')
    })

    document.getElementById('comuni').innerHTML = ""
    $("#comuni").append("<option value disabled selected>Comune</option>")
    comuni.forEach(function(i)
    {
        $("#comuni").append('<option>' + i + '</option>')
    })

    document.getElementById('scuole').innerHTML = ""
    $("#scuole").append("<option value disabled selected>Scuola</option>")
    scuole.forEach(function(item, i)
    {
        $("#scuole").append('<option value="' + idScuole[i] + '">' + item + '</option>')
    })
}

/** 
 * Al cambiamento del select con id provincie filtra nel database le regioni, i comuni e le scuole
 */
function cambioProvincia(provinciaSelezionata)
{
    var regione
    var regioneDaSelezionare
    var comuni
    var scuole
    var idScuole
    var output
    var xmlhttp = new XMLHttpRequest()

    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            output = this.responseText

            regione = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)   
            comuni = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            scuole = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            regioneDaSelezionare = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            idScuole = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)

            regione = creaArray(regione)
            scuole = creaArray(scuole)
            comuni = creaArray(comuni)
            regioneDaSelezionare = creaArray(regioneDaSelezionare)
            idScuole = creaArray(idScuole)   

            aggiornamentoProvincia(regione, comuni, scuole, idScuole)

            cambiaSelectedRegioni(regioneDaSelezionare)
        }
    }
    xmlhttp.open("GET", "../php/aggiornamentoProvincia.php?q=" + provinciaSelezionata, true)
    xmlhttp.send()
}

/**
 * Aggiorna i select delle regioni, comuni e scuole sulla base del risultato di cambioProvincia
 */
function aggiornamentoProvincia(regioni, comuni, scuole, idScuole)
{
    document.getElementById('regioni').innerHTML = ""
    $("#regioni").append("<option value disabled selected>Regione</option>")
    regioni.forEach(function(i)
    {
        $("#regioni").append('<option>' + i + '</option>')
    })

    document.getElementById('comuni').innerHTML = ""
    $("#comuni").append("<option value disabled selected>Comune</option>")
    comuni.forEach(function(i) 
    {
        $("#comuni").append('<option>' + i + '</option>')
    })

    document.getElementById('scuole').innerHTML = ""
    $("#scuole").append("<option value disabled selected>Scuola</option>")
    scuole.forEach(function(item, i)
    {
        $("#scuole").append('<option value="' + idScuole[i] + '">' + item + '</option>')
    })
}

/** 
 * Al cambiamento del select con id comuni filtra nel database le regioni, le province e le scuole
 */
function cambioComune(comuneSelezionato)
{
    var regione
    var regioneDaSelezionare
    var province
    var provinciaDaSelezionare
    var scuole
    var idScuole
    var output
    var xmlhttp = new XMLHttpRequest()

    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            output = this.responseText
            regione = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            province = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            scuole = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            regioneDaSelezionare = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            provinciaDaSelezionare = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            idScuole = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)

            regione = creaArray(regione)
            province = creaArray(province)
            scuole = creaArray(scuole)
            regioneDaSelezionare = creaArray(regioneDaSelezionare)
            provinciaDaSelezionare = creaArray(provinciaDaSelezionare)
            idScuole = creaArray(idScuole)

            aggiornamentoComune(regione, province, scuole, idScuole)
            
            cambiaSelectedRegioni(regioneDaSelezionare)
            cambiaSelectedProvince(provinciaDaSelezionare)
        }
    }
    xmlhttp.open("GET", "../php/aggiornamentoComune.php?q=" + comuneSelezionato, true)
    xmlhttp.send()
}

/**
 * Aggiorna i select delle regioni, province e scuole sulla base del risultato di cambioComune
 */
function aggiornamentoComune(regione, province, scuole, idScuole)
{
    document.getElementById('regioni').innerHTML = ""
    $("#regioni").append("<option value disabled selected>Regione</option>")
    regione.forEach(function(i) 
    {
        $("#regioni").append('<option>' + i + '</option>')
    })

    document.getElementById('provincie').innerHTML = ""
    $("#provincie").append("<option value disabled selected>Provincia</option>")
    province.forEach(function(i)
    {
        $("#provincie").append('<option>' + i + '</option>')
    })

    document.getElementById('scuole').innerHTML = ""
    $("#scuole").append("<option value disabled selected>Scuola</option>")
    scuole.forEach(function(item, i)
    {
        $("#scuole").append('<option value="' + idScuole[i] + '">' + item + '</option>')
    })
}

/** 
 * Al cambiamento del select con id scuole filtra nel database le regioni, le province e i comuni
 */
function cambioScuola(idScuolaSelezionata)
{
    var regione
    var regioneDaSelezionare
    var province
    var provinciaDaSelezionare
    var comuni
    var comuneDaSelezionare

    var output
    var xmlhttp = new XMLHttpRequest()

    xmlhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            output = this.responseText
            
            regione = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            province = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            comuni = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            regioneDaSelezionare = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            provinciaDaSelezionare = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)
            comuneDaSelezionare = output.substring(0, output.indexOf("]") + 1)
            output = output.substring(output.indexOf("]") + 1 , output.length)

            regione = creaArray(regione)
            province = creaArray(province)
            comuni = creaArray(comuni)
            regioneDaSelezionare = creaArray(regioneDaSelezionare)
            provinciaDaSelezionare = creaArray(provinciaDaSelezionare)
            comuneDaSelezionare = creaArray(comuneDaSelezionare)

            aggiornamentoScuola(regione, province, comuni)
            
            cambiaSelectedRegioni(regioneDaSelezionare)
            cambiaSelectedProvince(provinciaDaSelezionare)
            cambiaSelectedComuni(comuneDaSelezionare)
        }
    }
    xmlhttp.open("GET", "../php/aggiornamentoScuola.php?q=" + idScuolaSelezionata, true)
    xmlhttp.send()
}

/**
 * Aggiorna i select delle regioni, province e comuni sulla base del risultato di cambioScuola
 */
function aggiornamentoScuola(regione, province, comuni)
{
    document.getElementById('regioni').innerHTML = ""
    $("#regioni").append("<option value disabled selected>Regione</option>")
    regione.forEach(function(i)
    {
        $("#regioni").append('<option>' + i + '</option>')
    })

    document.getElementById('provincie').innerHTML = ""
    $("#provincie").append("<option value disabled selected>Provincia</option>")
    province.forEach(function(i)
    {
        $("#provincie").append('<option>' + i + '</option>')
    })

    document.getElementById('comuni').innerHTML = ""
    $("#comuni").append("<option value disabled selected>Comune</option>")
    comuni.forEach(function(i)
    {
        $("#comuni").append('<option>' + i + '</option>')
    })
}

/**
 * Data una stringa ne restituisce una analoga ma senza la prima parentesi quadra aperta e chiusa
 */
function rimuoviParetensiQuadre(str)
{
    str = str.replace('[', "")
    return str.replace(']', "")
}

function creaArray(str)
{
    str = rimuoviParetensiQuadre(str)
    str = str.replaceAll('"', "")
    return str.split(",")
}

function cambiaSelectedRegioni(regioneDaSelezionare)
{
    $('#regioni').children().each(function(i, elem)
    {
        if(elem.innerHTML == regioneDaSelezionare[0])
        {
            $(elem).prop("selected", "true")
        }
    })
}

function cambiaSelectedProvince(provinciaDaSelezionare)
{
    $('#provincie').children().each(function(i, elem)
    {
        if(elem.innerHTML == provinciaDaSelezionare[0])
        {
            $(elem).prop("selected", "true")
        }
    })
}

function cambiaSelectedComuni(comuneDaSelezionare)
{
    $('#comuni').children().each(function(i, elem)
    {
        if(elem.innerHTML == comuneDaSelezionare[0])
        {
            $(elem).prop("selected", "true")
        }
    })
}
