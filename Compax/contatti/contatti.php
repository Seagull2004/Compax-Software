<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="contatti.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Cabin&family=Noto+Sans&family=Poppins:wght@300&family=Roboto&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://kit.fontawesome.com/bfed2c6a00.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Contatti</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XKFT4TNP60"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XKFT4TNP60');
        </script>
</head>

<body>
    <div class="sezione" id="home">
        <nav>
            <div class="contenitore">
                <h4>Compax Software</h4>

                <div class="opzioni">
                    <a class="aNav" href="../index.php">Home</a>
                    <a class="aNav" href="../index.php#diploma">Disploma</a>
                    <a class="aNav" href="../index.php#percorsi">Medie</a>
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

        <div class="text">
            <div class="form">
                <h1>Contattaci</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet facilisis neque. Aliquam posuere
                    varius est, eu fermentum lacus fringilla quis. </p>
            </div>

            <div class="immagine">
                <img src="../img/telefono.png" alt="">
            </div>
        </div>
    </div>

    <section>
        <form action="inviaMessaggio.php" class="contattaci" method="post">
            <h1 style="display: block;">Non esitare a contattarci!</h1>
            <input type="text" placeholder="Nome" class="nomeForm" name="nome">
            <input type="text" placeholder="Cognome" class="cognomeForm" name="cognome"><br>
            <input type="email" placeholder="Email" class="emailForm" name="email"><br>
            <textarea placeholder="Testo" name="testo" cols="30" rows="10"
                style="width: 87%; height: 40%; resize: none;"></textarea><br>
            <div>
                <input type="checkbox" name="policy" class="check" value="checked" required><label for="policy"><a href="https://www.iubenda.com/termini-e-condizioni/89185341" class="iubenda-nostyle no-brand iubenda-noiframe iubenda-embed iubenda-noiframe " title="Termini e Condizioni " style="color: black;">Accetto Termini e Condizioni</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script></label>
            </div>
            <button type="submit" class="but-contatti" name="invia">Invia</button>
        </form>

        <div class="mappa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2774.7603247326692!2d13.618606!3d45.9360899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477b00cde4ea5a09%3A0x80a7a10b1769e3e7!2sISIS%20Galileo%20Galilei%20-%20Enrico%20Fermi%20-%20Nicol%C3%B2%20Pacassi!5e0!3m2!1sit!2sit!4v1667058159521!5m2!1sit!2sit"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


    <footer>

        <div class="link">
            <div class="compaxsoftware">
                <h3>Compax Software</h3>
                <ul>
                    <li><a>Via Giacomo Puccini, 22</a></li>
                    <li><a>Gorizia, GO</a></li>
                    <li><a>Italia</a></li>
                    <li><a href="#">Email: compaxsoftware@gmail.com</a></li>
                    <li><a href="#">PEC: compaxsoftware@pec.it</a></li>
                </ul>
            </div>

            <div class="linkutili" style="text-align: center; margin-left: -10%;">
                <h3>Link utili</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#diploma">Post-diploma</a></li>
                    <li><a href="#percorsi">Post-medie</a></li>
                    <li><a href="#percorsi">Statistiche</a></li>
                    <li><a href="./chi siamo/chiSiamo.php">Chi siamo</a></li>
                    <li><a href="./contatti/contatti.php">Contatti</a></li>
                </ul>
            </div>

            <div class="linkutili2" style="text-align: right;">
                <h3>Info</h3>
                <ul>
                    <li><a href="#">Promozioni</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Lavora con noi</a></li>
                    <li><a href="./admin/adminLogin/adminLogin.php">Area riservata</a></li>
                </ul>
            </div>

        </div>


        <div class="emailInput">
            <hr>
            <form action="#">
                <input id="email" type="text" name="email" placeholder="Email" disabled/>

                <input type="submit" class="but-email" value="Invia" name="inviaEmail" disabled>
                <p>Iscriviti e rimani sempre aggiornato</p>

                <div class="social">
                    <a href="https://instagram.com/compaxsoftware?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://github.com/Seagull2004/Compax-Software"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </form>


        </div>



        <div class="copyright">
            <p>© 2023 Compax Software - All rights reserved</p>
            <p>Cap. Soc. 50.000,00 € - <a href="https://www.iubenda.com/privacy-policy/89185341" class="iubenda-nostyle no-brand iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy " style="color: black;">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script></p>
        </div>

    </footer>


    <script src="../panino.js"></script>
</body>

</html>