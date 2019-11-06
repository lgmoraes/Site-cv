<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="node_modules/font_webatlas/dist/css/webAtlas-icons.css" />
    <link rel="stylesheet" href="node_modules/font_webatlas/dist/css/font-face/webAtlas-icons.css" />
    <link rel="stylesheet" href="node_modules/font_webatlas/dist/css/font-face/webAtlas-alphanumeric.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/design.css">
    <link rel="stylesheet" href="assets/css/viewer.css">
    <link rel="stylesheet" href="assets/css/viewer-clearMode.css">
    <link rel="stylesheet" href="assets/css/cv.css">

    <title>CV Louis Moraes</title>
</head>
<body>
    <input type="text" id="inputClipboard" style="display:none" />

    <div id="menuTop" class="vst">
        <a href="..">
            <div id="btn_portfolio" class="btn vst">
                <div class="icon circle-leftArrow div"></div>
                Aller au portfolio
            </div>
        </a>
        
        <div id="btns">
            <div id="btn_download" class="btn vst icon circle-download"></div><!--
         --><div id="btn_toggleClearMode" class="btn vst icon sun"></div><!--
         --><div id="btn_toggleFullscreen" class="btn vst icon arrow-resize-up"></div>
        </div>
        
    </div>

    <div id="btn_arrowUp" class="btn glass icon arrow-up"></div>
    
    <!-- CV -->
    <div id="cv" class="page">
        <div id="container_id">
            <img id="cv_photo" src="assets/img/louis-moraes.png" width="150" alt="Photo CV">

            <div class="container">
                <div class="name">Louis MORAES</div>
                <div class="info">
                    <div class="info_box">
                        <a class="email" href="mailto:lmoraes@hotmail.fr">
                            <div class="icon email div-indent-center"></div>
                            Lmoraes@hotmail.fr
                        </a>
                        <br>
                        <div class="phone">
                            <div class="icon iphone div-indent-center"></div>
                            06 29 02 93 51
                        </div>
                        <br>
                        <div class="adress">
                            <div class="icon pin div-indent-center"></div>
                            93 rue Cuvier Tourcoing
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="container_links">
            <a href="https://www.linkedin.com/in/lgmoraes">
                <img src="assets/img/linkedin.svg" alt="icon linked in">
                <span class="link">www.linkedin.com/in/lgmoraes</span>
            </a>
            <a href="https://www.npmjs.com/~lgmoraes">
                <img src="assets/img/npm.svg" alt="icon npm">
                <span class="link">www.npmjs.com/~lgmoraes</span>
            </a>
            <a href="https://github.com/lgmoraes">
                <img src="assets/img/github.svg" alt="icon github">
                <span class="link">github.com/lgmoraes</span>
            </a>
        </div>
        
        <div id="animation1" class="icon wheel8"></div>
        <div id="animation2" class="icon wheel8"></div>

        <h1>DÉVELOPPEUR WEB</h1>

        <div class="accordion col-50">
            <h2 class="icon calendar-valide">Expérience</h2>
            <div class="container">
                <div class="title">
                    2014 – 2019 : GIP FCIP - Académie de Lille
                </div>
                <div class="description">
                    Développeur Web
                </div>
                <div class="title">
                    2012 – 2013 : Alternance au Crédit du Nord - Lille
                </div>
                <div class="description">
                    Chargé de qualité
                </div>
            </div>
        </div><!--
     --><div class="accordion col-50">
            <h2 class="icon bookmark">Formation</h2>
            <div class="container">
                <div class="title">
                    2012 - 2013 : Gaston Berger Lille
                </div>
                <div class="description">
                    BTS - SIO (Services Informatiques aux Organisations)
                </div>
            </div>
        </div><!--
     --><div class="accordion">
            <h2 class="icon badge sharp">Réalisations</h2>

            <div class="container">
                <div class="realisation">
                    <img src="assets/img/videoclic.png" alt="logo" class="logo">
                    <div class="title">
                        Video Clic
                    </div>
                    <div class="description">
                        Outil de création de modules Youtube. (Chapitrage, Surimpression de texte, et zones cliquables)
                    </div>
                </div>
                <div class="realisation">
                    <img src="assets/img/docvoc.png" alt="logo" class="logo">
                    <div class="title">
                        DocVoc
                    </div>
                    <div class="description">
                        Outil de création de modules e-learning sous forme de slides. (Animations, Youtube, Iframe, texte)
                    </div>
                </div>
                <div class="realisation">
                    <img src="assets/img/autablo.png" alt="logo" class="logo">
                    <div class="title">
                        Autablo
                    </div>
                    <div class="description">
                        Plateforme d'animation de formation. (Mur virtuel, Création de quiz, de sondages et de positionnement)
                    </div>
                </div>
                <div class="realisation">
                    <img src="assets/img/pdc.png" alt="logo" class="logo">
                    <div class="title">
                        Plan de Développement des Compétences
                    </div>
                    <div class="description">
                        Plateforme d'inscriptions et de gestion d'actions de formations.
                    </div>
                </div>
                <div class="realisation">
                    <img src="assets/img/baseressources.png" alt="logo" class="logo">
                    <div class="title">
                        Base Ressources
                    </div>
                    <div class="description">
                        Plateforme d'inscriptions et de gestion d'actions de formations.
                    </div>
                </div>
                <div class="realisation">
                    <img src="assets/img/sigip.png" alt="logo" class="logo">
                    <div class="title">
                        SI GIP
                    </div>
                    <div class="description">
                        Application répondant à des besoins en interne de synchronisation de données avec d'autres entités du GIP.
                    </div>
                </div>
                <div class="realisation">
                    <img src="assets/img/testezvous.png" alt="logo" class="logo">
                    <div class="title">
                        Testez-vous
                    </div>
                    <div class="description">
                        Plateforme e-learning. (Tous types de ressource utilisable)
                    </div>
                </div>
            </div>
        </div><!--
     --><div id="container_competences" class="accordion">
            <h2 class="icon star">Compétences</h2>

            <div class="container center col-50">
                <div class="container-centered">
                    <div class="competence">
                        <img src="assets/img/html5.svg" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">HTML</div>
                            <div class="bar">
                                <div class="progress" style="width:92%;background-color:#E26811;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="competence">
                        <img src="assets/img/css3.svg" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">CSS</div>
                            <div class="bar">
                                <div class="progress" style="width:80%;background-color:#2669D3;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="competence">
                        <img src="assets/img/js.svg" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">JavaScript</div>
                            <div class="bar">
                                <div class="progress" style="width:87%;background-color:#DEBA00;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="competence">
                        <img src="assets/img/php.svg" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">PHP</div>
                            <div class="bar">
                                <div class="progress" style="width:71%;background-color:#56537D;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="competence">
                        <img src="assets/img/mysql.svg" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">MySQL</div>
                            <div class="bar">
                                <div class="progress" style="width:60%;background-color:#007AAC;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--
         --><div class="container center col-50">
                <div class="container-centered">
                    <div class="competence">
                        <img src="assets/img/angular.svg" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">Angular</div>
                            <div class="bar">
                                <div class="progress" style="width:45%;background-color:#D01513;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="competence">
                        <img src="assets/img/linux.svg" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">Linux / Apache</div>
                            <div class="bar">
                                <div class="progress" style="width:32%;background-color:#B90238;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="competence">
                        <img src="assets/img/affinity-designer.png" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">Web Design</div>
                            <div class="bar">
                                <div class="progress" style="width:55%;background-color:#276CD5;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="competence">
                        <img src="assets/img/gimp.png" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">2D / SVG</div>
                            <div class="bar">
                                <div class="progress" style="width:42%;background-color:#62583C;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="competence">
                        <img src="assets/img/blender.svg" alt="logo" class="logo">
                        <div class="container">
                            <div class="title">3D</div>
                            <div class="bar">
                                <div class="progress" style="width:20%;background-color:#C77100;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="node_modules/atom_webatlas/dist/atom.js"></script>
<script src="node_modules/screenfull/dist/screenfull.js"></script>
<script>
    var body = document.body;
    var page = document.getElementById('page');
    var menuTop = document.getElementById('menuTop');
    var btn_arrowUp = document.getElementById('btn_arrowUp');
    var btn_download = document.getElementById('btn_download');
    var btn_toggleClearMode = document.getElementById('btn_toggleClearMode');
    var btn_toggleFullscreen = document.getElementById('btn_toggleFullscreen');

    // CV
    var cv = document.getElementById('cv');


    onscroll = function() {
        if (getScrollY() === 0) {
            btn_arrowUp.style.opacity = "0";
            btn_arrowUp.style.cursor = "default";
        }
        else {
            btn_arrowUp.style.opacity = "1";
            btn_arrowUp.style.cursor = "pointer";
        }
    };

    btn_arrowUp.onclick = function() {
        if(getScrollY() !== 0) {
            window.scroll(0, 0);
        }
    };

    btn_download.onclick = function() {
        window.open("assets/cv.pdf", "_blank");
    };

    btn_toggleClearMode.onclick = function() {
        toggleClass("sun", this);
        toggleClass("moon", this);

        toggleClass("clearMode", body);
    };

    btn_toggleFullscreen.onclick = function() {
        if (screenfull.enabled) {
            if (window.Promise === undefined) {
                alert('Cette fonction n\'est pas disponible pour votre navigateur.');
                return false;
            }

            toggleClass("arrow-resize-up", this);
            toggleClass("arrow-resize-down", this);

            screenfull.toggle();
        }
    };

</script>
</body>
</html>