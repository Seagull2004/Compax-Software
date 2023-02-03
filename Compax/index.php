<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Cabin&family=Noto+Sans&family=Poppins:wght@300&family=Roboto&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">


    <script src="https://kit.fontawesome.com/bfed2c6a00.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


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

    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = { "askConsentAtCookiePolicyUpdate": true, "floatingPreferencesButtonDisplay": "anchored-top-left", "inlineDelay": 1000, "invalidateConsentWithoutLog": true, "perPurposeConsent": true, "siteId": 2957540, "whitelabel": false, "cookiePolicyId": 89185341, "lang": "it", "banner": { "acceptButtonColor": "#0073CE", "acceptButtonDisplay": true, "backgroundColor": "#FFFFFF", "closeButtonDisplay": false, "customizeButtonDisplay": true, "explicitWithdrawal": true, "listPurposes": true, "linksColor": "#0073CE", "position": "float-bottom-right", "rejectButtonDisplay": true, "textColor": "#000000" } };
    </script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XKFT4TNP60"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-XKFT4TNP60');
    </script>

    <link rel="stylesheet" href="index.css">
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
                    <a class="aNav" href="#diploma">Diploma</a>
                    <a class="aNav" href="#percorsi">Medie</a>
                    <a class="aNav" href="#statistiche">Statistiche</a>
                    <a class="aNav" href="./chi siamo/chiSiamo.php">Chi siamo</a>
                    <a class="aNav" href="./contatti/contatti.php">Contatti</a>
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
                    <a href="./post-medie/post_medie.php">Medie</a>
                </div>

            </div>
            <div class="immagine">
                <img src="./img/home.png" alt="">
            </div>
        </div>

    </div>


    <!-- Percorsi post-diploma -->
    <section id="diploma" class="mostra">
        <img src="./img/blob1.png" alt="" class="blob">
        <img src="./img/blob2.png" alt="" class="blobb">
        <h1>Post diploma</h1>

        <div class="card">
            <div class="its">
                <img src="./img/puzzle.png" alt="">
                <h2>ITS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum tortor id nisl porttitor, ut
                    efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac
                    imperdiet lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue.</p>
            </div>
            <div class="università">
                <img src="./img/Senza titolo-1.png" alt="">
                <h2>Università</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum tortor id nisl porttitor, ut
                    efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac
                    imperdiet lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue.</p>
            </div>
            <div class="lavoro">
                <img src="./img/briefcase-4873932-4056645.png" alt="">
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
            <img src="./img/liceo.png" alt="" class="liceo">
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
            <img src="./img/tecnico.png" alt="" class="tecnico">
        </article>

        <article class="mostra">
            <p><b>Istituto professionale</b><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rutrum
                tortor id
                nisl porttitor, ut
                efficitur libero ullamcorper. Mauris eget scelerisque nulla, varius scelerisque nulla. Duis ac imperdiet
                lectus. Cras gravida volutpat leo. Morbi sed mattis arcu, ac tempor augue. Ut leo ligula, luctus in
                ipsum in, condimentum auctor lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                per inceptos himenaeos.</p>
            <img src="./img/professionale.png" alt="" class="professionale">
        </article>
    </section>



    <!-- Percorsi dopo scuole medie (query telefono) -->
    <section id="percorsi " class="tabToggle">

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


    <section class="grafico mostra">
        <h2 id="statistiche">Grafici e statistiche</h2>
        <div id="pie-chart"></div>
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
                    <li><a href="#">FAX: 1234567890</a></li>
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
            <form action="../php/invioEmail.php" method="post">
                <input class="email" type="text" name="email" placeholder="Email" disabled />

                <button type="submit" class="but-email" name="inviaEmail" disabled>Invia</button>
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
            <p>© 2023 Compax Software - All rigths reserved</p>
            <p>Cap. Soc. 50.000,00 € - <a href="https://www.iubenda.com/privacy-policy/89185341"
                    class="iubenda-nostyle no-brand iubenda-noiframe iubenda-embed iubenda-noiframe "
                    title="Privacy Policy " style="color: black;">Privacy Policy</a>
                <script
                    type="text/javascript">(function (w, d) { var loader = function () { var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s, tag); }; if (w.addEventListener) { w.addEventListener("load", loader, false); } else if (w.attachEvent) { w.attachEvent("onload", loader); } else { w.onload = loader; } })(window, document);</script>
            </p>
        </div>

    </footer>


    <script src="panino.js"></script>
    <script type="text/javascript">


        var scuoleRisultati = []
        var risultati = []

        $.ajax({
            url: "./admin/index/queryScuoleRisultati.php",
            type: "POST",
            contentType: "application/json; charset=utf-8",
            success: function (data) {
                scuoleRisultati = JSON.parse(data).map(function (d) { return d.primo_istituto_adatto })
            }
        });

        $.ajax({
            url: "./admin/index/queryRisultati.php",
            type: "POST",
            contentType: "application/json; charset=utf-8",
            success: function (data) {
                risultati = JSON.parse(data).map(function (d) { return d.primo_istituto_adatto })
                grafico()
            }
        });


        function grafico() {
            var istitutiCount = [];
            for (var i = 0; i < risultati.length; i++) {
                var istituto = risultati[i];
                var found = false;
                for (var j = 0; j < istitutiCount.length; j++) {
                    if (istitutiCount[j].name == istituto) {
                        istitutiCount[j].count++;
                        found = true;
                        break;
                    }
                }
                if (!found) {
                    istitutiCount.push({ name: istituto, count: 1 });
                }
            }

            var data = [];
            istitutiCount.forEach(function (item, i) {
                data.push({ label: item.name.replace("punti_", "").replace("_", " "), y: item.count })
            });


            console.log(data)


            //grafico torta
            var chart = new CanvasJS.Chart("pie-chart",
                {
                    theme: "light2", // "light1", "light2", "dark1", "dark2"
                    animationEnabled: true,
                    legend:
                    {
                        cursor: "pointer",
                        itemclick: explodePie
                    },
                    data:
                        [{
                            // Change type to "doughnut", "line", "splineArea", etc.
                            type: "pie",
                            startAngle: 25,
		                    indexLabel: "{label} - {y}",
                            dataPoints: data
                        }]
                });
            chart.render();

            function explodePie (e) {
                if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                    e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
                } else {
                    e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
                }
                e.chart.render();
            }
        }
    </script>
</body>

</html>