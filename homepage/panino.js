const panino = document.querySelector('.panino');
const menuOpzioni = document.querySelector('.opzioni');

panino.addEventListener("click", function(){
    this.classList.toggle('active');
    menuOpzioni.classList.toggle('navActive');
});


ScrollReveal().reveal('.mostra');
