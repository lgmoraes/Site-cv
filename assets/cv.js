var body = document.body;
var page = document.getElementById('page');
var menuTop = document.getElementById('menuTop');
var btn_arrowUp = document.getElementById('btn_arrowUp');
var btn_download = document.getElementById('btn_download');
var btn_toggleClearMode = document.getElementById('btn_toggleClearMode');
var btn_toggleFullscreen = document.getElementById('btn_toggleFullscreen');

// CV
var cv = document.getElementById('cv');


onscroll = function () {
    if (getScrollY() === 0) {
        btn_arrowUp.style.opacity = "0";
        btn_arrowUp.style.cursor = "default";
    }
    else {
        btn_arrowUp.style.opacity = "1";
        btn_arrowUp.style.cursor = "pointer";
    }
};

btn_arrowUp.onclick = function () {
    if (getScrollY() !== 0) {
        window.scroll(0, 0);
    }
};

btn_download.onclick = function () {
    window.open("assets/cv.pdf", "_blank");
};

btn_toggleClearMode.onclick = function () {
    toggleClass("sun", this);
    toggleClass("moon", this);

    toggleClass("clearMode", body);
};

btn_toggleFullscreen.onclick = function () {
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