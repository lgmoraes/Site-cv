<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="node_modules/font_webatlas/webAtlas.css" />
    <link rel="stylesheet" href="node_modules/font_webatlas/font-face/webAtlas-original.css" />
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
                <div class="icon circle-arrowLeft div"></div>
                Aller au portfolio
            </div>
        </a>

        <div id="btns">
            <div id="btn_download" class="btn vst icon circle-download"></div><!--
         --><div id="btn_toggleClearMode" class="btn vst icon sun"></div><!--
         --><div id="btn_toggleFullscreen" class="btn vst icon arrow-resize-up"></div>
        </div>

    </div>

    <div id="btn_arrowUp" class="btn glass icon arrow2-up"></div>

    <!-- CV -->
    <div id="cv" class="page">
        <div id="top">
            <div id="container_id">
                <img id="cv_photo" src="assets/img/louis-moraes.svg" width="150" alt="Photo CV">
                <h1>Louis MORAES</h1>
            </div>

            <div id="container_contact">
                <h2>CONTACT</h2>

                <div>
                    <a href="mailto:lmoraes@hotmail.fr">
                        <i class="icon email"></i> Lmoraes@hotmail.fr
                    </a>
                    <br>
                    <a href="tel:0629029351">
                        <i class="icon mobile"></i> 06 29 02 93 51
                    </a>
                    <br>
                    <a href="https://www.google.fr/maps/place/93+Rue+Cuvier,+59200+Tourcoing">
                        <div class="icon home"></div>
                        <div id="address">
                            93 rue Cuvier<br>
                            59200 Tourcoing
                        </div>
                    </a>
                </div>

                <i class="background icon idCard"></i>
            </div>

            <div id="container_reseaux">
                <h2>RÉSEAUX</h2>

                <a href="https://www.linkedin.com/in/lgmoraes">
                    <img src="assets/img/linkedin.svg" alt="icon linked in">
                    <span class="link">linkedin.com/in/lgmoraes</span>
                </a>
                <a href="https://www.npmjs.com/~lgmoraes">
                    <img src="assets/img/npm.svg" alt="icon npm">
                    <span class="link">npmjs.com/~lgmoraes</span>
                </a>
                <a href="https://github.com/lgmoraes">
                    <img src="assets/img/github.svg" alt="icon github">
                    <span class="link">github.com/lgmoraes</span>
                </a>

                <i class="background icon network"></i>
            </div>

            <div id="container_job">
                DÉVELOPPEUR / INTÉGRATEUR WEB
            </div>

            <div id="animation1" class="icon gear8"></div>
            <div id="animation2" class="icon gear8"></div>
        </div>
        
        <div id="bandeBlanche">
            <div class="col-50">
                <div class="borderRight"></div>
                <div class="container">
                    <h2>
                        <i class="icon tutorial"></i>
                        Formation
                    </h2>
                    <div class="item">
                        <h3>Gaston Berger Lille</h3>
                        <div class="years">2012 - 2013</div>
                        BTS - SIO (Services Informatiques aux Organisations)
                    </div>
                </div>
                <div class="container">
                    <h2>
                        <i class="icon calendar-valide"></i>
                        Expérience
                    </h2>
                    <div class="item">
                        <h3>Alternance au Crédit du Nord - Lille</h3>
                        <div class="years">2012 - 2013</div>
                        Chargé de qualité

                        <i class="icon circle-filled geometrics"></i>
                        <div class="bar"></div>
                    </div>
                    <div class="item">
                        <h3>GIP FCIP - Académie de Lille</h3>
                        <div class="years">2014 - 2019</div>
                        Développeur / Intégrateur Web

                        <i class="icon circle-filled geometrics"></i>
                    </div>
                </div>
            </div><div class="col-50">
                <div id="realisation" class="container">
                    <h2>
                        <i class="icon badge sharp"></i>
                        Réalisations
                    </h2>
                    <div class="list">
                        <div class="item">
                            <h3>
                                <img class="logo" src="assets/img/videoclic.png" />Video Clic
                                <img class="logo" src="assets/img/docvoc.png" />DocVoc
                            </h3>
                            <div class="description">
                                Outils de création de modules e-learning au format HTML5.
                            </div>
                        </div>
                        <div class="item">
                            <h3>
                                <img class="logo" src="assets/img/autablo.png" />Autablo
                                <img class="logo" src="assets/img/testezvous.png" />Testez-vous
                            </h3>
                            <div class="description">
                                Plateformes e-learning de formation.
                                (Mur virtuel, Création de quiz, sondages et de positionnement)
                            </div>
                        </div>
                        <div class="item">
                            <h3>
                                <img class="logo" src="assets/img/pdc.png" />Plan de Développement des Compétences
                            </h3>
                            <div class="description">
                                Plateforme d'inscriptions et de gestion d'actions de formations.
                            </div>
                        </div>
                        <div class="item">
                            <h3>
                                <img class="logo" src="assets/img/baseressources.png" />Base Ressources
                                <img class="logo" src="assets/img/sigip.png" />SI GIP
                            </h3>
                            <div class="description">
                                Applications répondant à des besoins en interne.
                                (Base de ressources pédagogiques, Synchronisation de données)
                            </div>
                        </div>
                        <div class="item">
                            <h3>
                                <img class="logo" src="assets/img/webatlas.png" />Font Webatlas
                            </h3>
                            <div class="description">
                                Module d'icones dynamiques pour des sites ou applications proposant plusieurs chartes graphique.
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>

        </div>

        <h2>
            <i class="icon star"></i>
            Compétences
        </h2>

        <div class="center">
            <div id="container_integrateur" class="container_competences">
                <img src="assets/img/icone_integrateur.svg" class="icon">
                <h3>INTÉGRATEUR</h3>

                <div class="item">
                    <img src="assets/img/htmlcss.svg" />
                    <div class="title">HTML / CSS</div>
                </div>
                <div class="item">
                    <img src="assets/img/sass.svg" />
                    <div class="title">SASS</div>
                </div>
                <div class="item">
                    <img src="assets/img/bootstrap.svg" />
                    <div class="title">Bootstrap</div>
                </div>
                <div class="item">
                    <img src="assets/img/ps.svg" />
                    <div class="title">PS / SVG / Maquette</div>
                </div>
                <div class="item">
                    <img src="assets/img/webpack.svg" />
                    <div class="title">Webpack</div>
                </div>
            </div>

            <div id="container_developpeur" class="container_competences">
                <img src="assets/img/icone_developpeur.svg" class="icon">
                <h3>DÉVELOPPEUR</h3>

                <div class="item">
                    <img src="assets/img/jsts.svg" />
                    <div class="title">JS / TS</div>
                </div>
                <div class="item">
                    <img src="assets/img/php.svg" />
                    <div class="title">PHP Orienté Objet</div>
                </div>
                <div class="item">
                    <img src="assets/img/mysql.svg" />
                    <div class="title">MySQL</div>
                </div>
                <div class="item">
                    <img src="assets/img/wordpress.svg" />
                    <div class="title">WordPress / Thème</div>
                </div>
                <div class="item">
                    <img src="assets/img/git.svg" />
                    <div class="title">Git / npm</div>
                </div>
            </div>
        </div>


    </div>

    <script src="node_modules/atom_webatlas/dist/atom.js"></script>
    <script src="node_modules/screenfull/dist/screenfull.js"></script>
    <script src="assets/cv.js"></script>
</body>

</html>