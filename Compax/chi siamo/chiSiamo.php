<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chi siamo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="./chiSiamo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Cabin&family=Noto+Sans&family=Poppins:wght@300&family=Roboto&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/96cbd12759.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        ScrollReveal({ reset: true });

        $(document).ready(function () {
            $(".info-content").slideUp();
            $(".info-box").click(function () {
                $(this).children(".info-content").slideToggle();
            })
        })

        const card = document.querySelector(".card__inner");
        const card1 = document.querySelector(".card__inner1");
        const card2 = document.querySelector(".card__inner2");

        card.addEventListener("click", function (e) {
            card.classList.toggle('is-flipped');
        });

        card1.addEventListener("click", function (e) {
            card1.classList.toggle('is-flipped');
        });

        card2.addEventListener("click", function (e) {
            card2.classList.toggle('is-flipped');
        });
    </script>


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
                    <a class="aNav" href="chiSiamo.html">Chi siamo</a>
                    <a class="aNav" href="../contatti/contatti.php">Contatti</a>
                </div>

                <button class="panino">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>


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
                <h1>Sviluppiamo software per il tuo business</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet facilisis neque. Aliquam posuere
                    varius est, eu fermentum lacus fringilla quis. </p>
                <div class="content-mail">
                    <input type="mail" placeholder="Inserisci la tua mail" name="email" id="email" disabled>
                    <button class="contattaci" disabled>Contattaci</button>
                </div>
            </div>
            <div class="immagine">
                <img src="../img/bussola.png" alt="">
            </div>
        </div>

    </div>

    <h1><i class="fa-regular fa-square-full" id="quadrato1"></i></h1>
    <h1><i class="fa-regular fa-circle" id="cerchio1"></i></h1>

    <section class="contenuti-team">
        <div class="content-team">
            <h1>Il nostro team</h1>
            <div class="row">
                <div class="column">
                    <div class="team">
                        <div class="team-img">
                            <img src="../img/michele.png" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Michele Ongaro</h2>
                            <h3>Project Manager</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet facilisis neque.
                                Aliquam posuere varius est, eu fermentum lacus fringilla quis.Vivamus rutrum, enim at
                                congue tempor, neque turpis aliquam lacus, sed consectetur diam diam quis mauris.</p>
                            <div class="team-social">
                                <a href="#" class="social-tw"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-fb"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-li"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-in"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-yt"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="team">
                        <div class="team-img">
                            <img src="../img/melissa.png" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Melissa Olmi</h2>
                            <h3>Developer and UI/UX Designer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet facilisis neque.
                                Aliquam posuere varius est, eu fermentum lacus fringilla quis.Vivamus rutrum, enim at
                                congue tempor, neque turpis aliquam lacus, sed consectetur diam diam quis mauris.</p>
                            <div class="team-social">
                                <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-yt"> <i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="team">
                        <div class="team-img">
                            <img src="../img/mattia.png" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Mattia Groppo</h2>
                            <h3>Developer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet facilisis neque.
                                Aliquam posuere varius est, eu fermentum lacus fringilla quis.Vivamus rutrum, enim at
                                congue tempor, neque turpis aliquam lacus, sed consectetur diam diam quis mauris.</p>
                            <div class="team-social">
                                <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-yt"> <i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="team">
                        <div class="team-img">
                            <img src="../img/mattia.jpeg" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Giovanni Tonzig</h2>
                            <h3>Developer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet facilisis neque.
                                Aliquam posuere varius est, eu fermentum lacus fringilla quis.Vivamus rutrum, enim at
                                congue tempor, neque turpis aliquam lacus, sed consectetur diam diam quis mauris.</p>
                            <div class="team-social">
                                <a href="#" class="social-tw"> <i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-fb"> <i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-li"> <i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-in"> <i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-yt"> <i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <h1><i class="fa-regular fa-square-full" id="quadrato2"></i></h1>
    <h1><i class="fa-regular fa-circle" id="cerchio2"></i></h1>

    <!--<div class="container">
        <div class="section-title">
            <h1>Our Team Page</h1>
        </div>

    </div>-->

    <section class="contenuti-noi">
        <div class="content-noi">
            <h1>Qualcosa su di noi</h1>
            <img src="../img/qualcosaNoi.png">
        </div>
    </section>


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
                <input class="email" type="text" name="email" placeholder="Email" disabled/>

                <input type="submit" class="but-email" value="Invia" name="inviaEmail" disabled>
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
            <p>Cap. Soc. 50.000,00 € - <a href="https://www.iubenda.com/privacy-policy/89185341" class="iubenda-nostyle no-brand iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy " style="color: black;">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script></p>
        </div>

    </footer>


    <script src="../panino.js"></script>
</body>

</html>