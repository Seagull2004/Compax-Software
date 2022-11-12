function rispostaSceltaA(){
    var a = document.getElementById('rispostaA');

    if(azienda.style.display == 'none')
        azienda.style.display = 'block';
        produttore.style.display = 'none';
        admin.style.display = 'none';
}

function rispostaSceltaB(){
    var b = document.getElementById('produttore');

    if(produttore.style.display == 'none')
        produttore.style.display = 'block';
        azienda.style.display = 'none';
        admin.style.display = 'none';
}

function rispostaSceltaC(){
    var c = document.getElementById('admin');

    if(admin.style.display == 'none')
        admin.style.display = 'block';
        azienda.style.display = 'none';
        produttore.style.display = 'none';
}

function rispostaSceltaD(){
    var d = document.getElementById('admin');

    if(admin.style.display == 'none')
        admin.style.display = 'block';
        azienda.style.display = 'none';
        produttore.style.display = 'none';
}