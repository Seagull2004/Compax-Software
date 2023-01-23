<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Cabin&family=Noto+Sans&family=Poppins:wght@300&family=Roboto&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">


    <script src="https://kit.fontawesome.com/bfed2c6a00.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script>
        ScrollReveal({ reset: true });

        //Possibilità dopo scuole medie, animazione a tendina
        $(document).ready(function () {
            $(".info-content").slideUp();
            $(".info-box").click(function () {
                $(this).children(".info-content").slideToggle();
            })
        })

        //Animazione apertura sito
        var loader = document.getElementById("preloader")
        window.addEventListener("load", setTimeout(cancella, 3100))

        function cancella() {
            $('#preloader').fadeOut(500)
        }
    </script>

    <title>Home</title>
</head>

<body>
    <div id="preloader"></div>

    <div class="sezione" id="home">
        <nav>
            <div class="contenitore">
                <h4>Compax Software</h4>

                <div class="opzioni">
                    <a class="aNav" href="#home">Home</a>
                    <a class="aNav" href="#diploma">Disploma</a>
                    <a class="aNav" href="#percorsi">Medie</a>
                    <a class="aNav" href="#">Statistiche</a>
                    <a class="aNav" href="../chi siamo/chiSiamo.php">Chi siamo</a>
                    <a class="aNav" href="../contatti/contatti.php">Contatti</a>
                </div>

                <button class="panino">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>

        <!-- Sfondo onda -->
        <div class="custom-shape-divider-bottom-1666963594">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>



        <div class="contenuti">
            <div class="form">
                <p>Su che percorso sei indeciso?</p>
                <div class="bottoni">
                    <a href="http://corndog.io/">Università</a>
                    <a href="../post-medie/post_medie.php">Medie</a>
                </div>

            </div>
            <div class="immagine">
                <img src="../img/home.png" alt="">
            </div>
        </div>

    </div>


    <!-- Percorsi post-diploma -->
    <section id="diploma" class="mostra">
        <img src="../img/blob1.png" alt="" class="blob">
        <img src="../img/blob2.png" alt="" class="blobb">
        <h1>Post diploma</h1>

        <div class="card">
            <div class="its">
                <img src="../img/puzzle.png" alt="">
                <h2>ITS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum tortor id nisl porttitor, ut
                    efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac
                    imperdiet lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue.</p>
            </div>
            <div class="università">
                <img src="../img/Senza titolo-1.png" alt="">
                <h2>Università</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum tortor id nisl porttitor, ut
                    efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac
                    imperdiet lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue.</p>
            </div>
            <div class="lavoro">
                <img src="../img/briefcase-4873932-4056645.png" alt="">
                <h2>Lavoro</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum tortor id nisl porttitor, ut
                    efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac
                    imperdiet lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue.</p>
            </div>

        </div>

    </section>




    <!-- Percorsi dopo scuole medie -->
    <section class="percorsi mostra" id="percorsi">
        <h2>I percorsi dopo la terza media</h2>
        <article class="mostra">
            <p><b>Liceo</b><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum tortor id nisl
                porttitor, ut
                efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac imperdiet
                lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue. Ut leo ligula, luctus in
                ipsum in, condimentum auctor lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                per inceptos himenaeos.</p>
            <img src="../img/liceo.png" alt="" class="liceo">
        </article>

        <article class="contrario mostra">
            <p><b>Istituto tecnico</b><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum tortor
                id
                nisl porttitor, ut
                efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac
                imperdiet
                lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue. Ut leo ligula, luctus in
                ipsum in, condimentum auctor lectus. Class aptent taciti sociosqu ad litora torquent per conubia
                nostra,
                per inceptos himenaeos.</p>
            <img src="../img/tecnico.png" alt="" class="tecnico">
        </article>

        <article class="mostra">
            <p><b>Istituto professionale</b><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum
                tortor id
                nisl porttitor, ut
                efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac imperdiet
                lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue. Ut leo ligula, luctus in
                ipsum in, condimentum auctor lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                per inceptos himenaeos.</p>
            <img src="../img/professionale.png" alt="" class="professionale">
        </article>
    </section>



    <!-- Percorsi dopo scuole medie (query telefono) -->
    <section id="percorsi" class="tabToggle">

        <h2>I percorsi dopo la terza media</h2>

        <div class="info-box">
            <div class="info-title">
                <p>Liceo</p>
            </div>
            <div class="info-content">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum
                    tortor
                    id
                    nisl porttitor, ut
                    efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac
                    imperdiet
                    lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue. Ut leo ligula, luctus
                    in
                    ipsum in, condimentum auctor lectus. Class aptent taciti sociosqu ad litora torquent per conubia
                    nostra,
                    per inceptos himenaeos.</p>
            </div>
        </div>

        <div class="info-box">
            <div class="info-title">
                <p>Tecnico</p>
            </div>
            <div class="info-content">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum
                    tortor
                    id
                    nisl porttitor, ut
                    efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac
                    imperdiet
                    lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue. Ut leo ligula, luctus
                    in
                    ipsum in, condimentum auctor lectus. Class aptent taciti sociosqu ad litora torquent per conubia
                    nostra,
                    per inceptos himenaeos.</p>
            </div>
        </div>


        <div class="info-box">
            <div class="info-title">
                <p>Professionale</p>
            </div>
            <div class="info-content">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum
                    tortor
                    id
                    nisl porttitor, ut
                    efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac
                    imperdiet
                    lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue. Ut leo ligula, luctus
                    in
                    ipsum in, condimentum auctor lectus. Class aptent taciti sociosqu ad litora torquent per conubia
                    nostra,
                    per inceptos himenaeos.</p>
            </div>
        </div>
    </section>



    <!-- Sezione grafici e statistiche -->
    <!---<section class="grafici">

    </section>--->




    <footer>

        <div class="link">
            <div class="compaxsoftware">
                <h3>Compax Software</h3>
                <ul>
                    <li><a href="#">Via Giacomo Puccini, 22</a></li>
                    <li><a href="#">Gorizia, GO</a></li>
                    <li><a href="#">Italia</a></li>
                    <li><a href="#">Email: compaxsoftware@gmail.com</a></li>
                    <li><a href="#">PEC: compaxsoftware@pec.it</a></li>
                </ul>
            </div>

            <div class="linkutili">
                <h3>Link utili</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#diploma">Post-diploma</a></li>
                    <li><a href="#percorsi">Post-medie</a></li>
                    <li><a href="#percorsi">Statistiche</a></li>
                    <li><a href="../chi siamo/chiSiamo.php">Chi siamo</a></li>
                    <li><a href="../contatti/contatti.php">Contatti</a></li>
                </ul>
            </div>

            <div class="linkutili2">
                <h3>Link utili</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#diploma">Post-diploma</a></li>
                    <li><a href="#percorsi">Post-medie</a></li>
                    <li><a href="#">Statistiche</a></li>
                    <li><a href="#">Chi siamo</a></li>
                    <li><a href="#">Contatti</a></li>
                </ul>
            </div>

        </div>


        <div class="emailInput">
            <hr>
            <form action="../php/invioEmail.php" method="post">
                <input class="email" type="text" name="email" placeholder="Email" />

                <button type="submit" class="but-email" name="inviaEmail">Invia</button>
                <p>Iscriviti e rimani sempre aggiornato</p>

                <div class="social">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </form>


        </div>



        <div class="copyright">
            <p>© 2023 Compax Software - All rights reserved</p>
            <p>Compax Software - P.IVA 01234567890 - Cap. Soc. 50.000,00 € </p>
        </div>

    </footer>





    <script src="panino.js"></script>
</body>

</html>