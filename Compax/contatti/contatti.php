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
</head>

<body>
    <div class="sezione" id="home">
        <nav>
            <div class="contenitore">
                <h4>Compax Software</h4>

                <div class="opzioni">
                    <a class="aNav" href="../homepage/index.php">Home</a>
                    <a class="aNav" href="../homepage/index.php#diploma">Disploma</a>
                    <a class="aNav" href="../homepage/index.php#percorsi">Medie</a>
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
            <input type="text" placeholder="Nome" class="nomeForm" name="nome">
            <input type="text" placeholder="Cognome" class="cognomeForm" name="cognome"><br>
            <input type="email" placeholder="Email" class="emailForm" name="email"><br>
            <textarea placeholder="Testo" name="testo" cols="30" rows="10"
                style="width: 87%; height: 40%; resize: none;"></textarea><br>
            <input type="checkbox" name="policy" class="check" value="checked"><label>Accetto le condizioni sulle policy</label>
            <button type="submit" class="but-contatti" name="invia">Invia</button>
        </form>

        <div class="mappa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2774.7603247326692!2d13.618606!3d45.9360899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477b00cde4ea5a09%3A0x80a7a10b1769e3e7!2sISIS%20Galileo%20Galilei%20-%20Enrico%20Fermi%20-%20Nicol%C3%B2%20Pacassi!5e0!3m2!1sit!2sit!4v1667058159521!5m2!1sit!2sit"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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

            <div class="linkutili">
                <h3>Link utili</h3>
                <ul>
                    <li><a href="../homepage/index.html">Home</a></li>
                    <li><a href="../homepage/index.html#diploma">Post-diploma</a></li>
                    <li><a href="../homepage/index.html#percorsi">Post-medie</a></li>
                    <li><a href="../homepage/index.html#percorsi">Statistiche</a></li>
                    <li><a href="#">Chi siamo</a></li>
                    <li><a href="#">Contatti</a></li>
                </ul>
            </div>

            <div class="linkutili2">
                <h3>Link utili</h3>
                <ul>
                    <li><a href="../homepage/index.html">Home</a></li>
                    <li><a href="../homepage/index.html#diploma">Post-diploma</a></li>
                    <li><a href="../homepage/index.html#percorsi">Post-medie</a></li>
                    <li><a href="#">Statistiche</a></li>
                    <li><a href="#">Chi siamo</a></li>
                    <li><a href="#">Contatti</a></li>
                </ul>
            </div>

        </div>


        <div class="emailInput">
            <hr>
            <form action="#">
                <input id="email" type="text" name="email" placeholder="Email" />

                <input type="submit" class="but-email" value="Invia" name="inviaEmail">
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
            <p>© 2022 Compax Software - All rights reserved</p>
            <p>Boh non lo so qualcosa bella</p>
        </div>

    </footer>


    <script src="../homepage/panino.js"></script>
</body>

</html>