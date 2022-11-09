
/* FUNKCJA DO WYŚWIETLANIA OBSADY*/

function toggle(idDiv) {
    var oDiv = document.getElementById(idDiv);
    oDiv.style.display = (oDiv.style.display == "flex") ? "none" : "flex";

}

function toggle2(idDiv) {
    var oDiv = document.getElementsByClassName(idDiv)[0];
    oDiv.style.display = (oDiv.style.display == "flex") ? "none" : "flex";

}



function toggleBlock(idDiv) {
    var oDiv = document.getElementById(idDiv);
    oDiv.style.display = (oDiv.style.display == "block") ? "none" : "block";

}


/*  FUNKCJE DO REFS.HTML */

function init() {
    let openBtn = document.getElementsByClassName("ref--person--description--button"
    )[0];

    openBtn.onclick = openPopup;

    let closeBtn = document.getElementById("popup--btn");
    closeBtn.onclick = closePopup;

}

function openPopup() {
    document.getElementById("popup--main").style.display = "flex";
    document.getElementsByClassName("refs--main")[0].style.opacity = 0.3;
}

function closePopup() {
    document.getElementById("popup--main").style.display = "none";
    document.getElementsByClassName("refs--main")[0].style.opacity = 1;
}

document.addEventListener("DOMContentLoaded", init);