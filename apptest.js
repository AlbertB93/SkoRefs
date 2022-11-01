/* 
const OBRAZ = document.querySelector()

console.log(OBRAZ); 
 
 */

function init(){
    let openBtn = document.getElementsByClassName( "ref--person--description--button"
    )[0];

    openBtn.onclick = openPopup;

    let closeBtn = document.getElementById("popup-btn");
    closeBtn.onclick = closePopup;

}

function openPopup(){
    document.getElementById("popup-main").style.display = "block";
    document.getElementsByClassName("main--refs")[0].style.opacity = 0.3;
}

function closePopup(){
    document.getElementById("popup-main").style.display = "none";
        document.getElementsByClassName("main--refs")[0].style.opacity = 1;
}

document.addEventListener("DOMContentLoaded", init);