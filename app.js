
/* FUNKCJA DO WYŚWIETLANIA OBSADY*/

// dodać miesiące do zmiennych. 

var august = document.querySelectorAll('#august');
var september = document.querySelector('#september');



function displayFlex(idDiv) {
    var oDiv = document.getElementById(idDiv);
    oDiv.style.display = (oDiv.style.display == "flex") ? "none" : "flex";
}

function displayBlock(idDiv) {
    var oDiv = document.getElementById(idDiv);
    let testDiv = document.getElementsByClassName("august--week")[0];
    oDiv.style.display = (oDiv.style.display == "block") ? "none" : "block";
    testDiv.style.backgroundColor = (testDiv.style.backgroundColor == "red") ? "black" : "red";
    
}

function displayNone() {
    
var august = document.querySelectorAll('#august');
var september = document.querySelector('#september');

    august[0].style.display="none";    
september[0].style.display="none";

}

/*  FUNKCJE DO REFS.HTML */


    function openPopup(myDiv) {
        /* 
            let popupBox =  document.getElementsByClassName("popup--main") */
        
            document.getElementsByClassName("popup--main")[myDiv].style.display = "flex";
            document.querySelector(".refs--container").style.opacity = 0.1;
        }
        
        function closePopup(myDiv) {
            document.getElementsByClassName("popup--main")[myDiv].style.display = "none";
            document.querySelector(".refs--container").style.opacity = 1;
        }
    


/*  FUNKCJE DO REFS.HTML */

const PHOTOS = document.querySelectorAll(".gallery--photo");
const POPUP = document.querySelector(".popupGallery");
const POPUP_CLOSE = document.querySelector(".popupCloseBtn");
const POPUP_IMG = document.querySelector(".popupGallery__img");
const ARROW_LEFT = document.querySelector(".popupArrow--left");
const ARROW_RIGHT = document.querySelector(".popupArrow--right");


let currentImgIndex;

const showNextImg = () => {
    if(currentImgIndex === PHOTOS.length - 1){
        currentImgIndex = 0;
    } else {
        currentImgIndex++;
    }
        POPUP_IMG.src = PHOTOS[currentImgIndex].src
};


const showPreviousImg = () => {
    if(currentImgIndex === 0){
        currentImgIndex = PHOTOS.length - 1;
    } else {
        currentImgIndex--;
    }
        POPUP_IMG.src = PHOTOS[currentImgIndex].src
};


const exitPopup = ()=> {
        POPUP.classList.add("hidden");
}

PHOTOS.forEach( (photo, index) => {
    photo.addEventListener("click", (e)=> {
        POPUP.classList.remove("hidden");
        POPUP_IMG.src = e.target.src;
        currentImgIndex = index;
    });
});

POPUP_CLOSE.addEventListener("click", exitPopup);


ARROW_RIGHT.addEventListener("click", showNextImg);
ARROW_LEFT.addEventListener("click", showPreviousImg); 

document.addEventListener("keydown", (e) => {
    if( !POPUP.classList.contains("hidden")){
    if (e.code === "ArrowRight" || e.keyCode === 39){
        showNextImg();
    }
    if (e.code === "ArrowLeft" || e.keyCode === 37){
        showPreviousImg();
    }

    if (e.code === "Escape" || e.keycode === 27){
        exitPopup();
    }
}
});


