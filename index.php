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
    <link rel="stylesheet" href="assets/css/cv.css">
    <link rel="stylesheet" href="assets/css/cv-clearMode.css">

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
    
    <div class="page">
        
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