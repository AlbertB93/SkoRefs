
/* FUNKCJA DO WYŚWIETLANIA OBSADY*/

function toggle(idDiv) {
    var oDiv = document.getElementById(idDiv);
    oDiv.style.display = (oDiv.style.display == "flex") ? "none" : "flex";


}

function toggleBlock(idDiv) {
    var oDiv = document.getElementById(idDiv);
    let testDiv = document.getElementsByClassName("august--week")[0];
    oDiv.style.display = (oDiv.style.display == "block") ? "none" : "block";
    testDiv.style.backgroundColor = (testDiv.style.backgroundColor == "red") ? "black" : "red";
    
}

function toogleClear(idDiv) {
    
    var oDiv = document.getElementById(idDiv);
    oDiv.style.display="none";
    oDiv.style.backgroundColor = "red";

}

/*  FUNKCJE DO REFS.HTML */

function init() {
    let openBtn = document.getElementsByClassName("ref--person--logo"
    );
}


    function openPopup(myDiv) {
        /* 
            let popupBox =  document.getElementsByClassName("popup--main") */
        
            document.getElementsByClassName("popup--main")[myDiv].style.display = "flex";
            document.getElementsByClassName("refs--main")[0].style.opacity = 0.3;
        }
        
        function closePopup(myDiv) {
            document.getElementsByClassName("popup--main")[myDiv].style.display = "none";
            document.getElementsByClassName("refs--main")[0].style.opacity = 1;
        }
    



document.addEventListener("DOMContentLoaded", init); 

const Photos = document.querySelectorAll(".gallery--photo");
const POPUP = document.querySelector(".popupGallery");
const POPUP_CLOSE = document.querySelector(".popupCloseBtn");
const POPUP_IMG = document.querySelector(".popupGallery__img");

Photos.forEach( (photo) => {
    photo.addEventListener("click", (e)=> {
        POPUP.classList.remove("hidden");
        POPUP_IMG.src = e.target.src;
    });
});

POPUP_CLOSE.addEventListener("click", ()=>{
    POPUP.classList.add("hidden");
})
/* function resizePhoto(){
    document.getElementsByClassName("gallery--photo").style.display.
} */