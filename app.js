
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
    let openBtn = document.getElementsByClassName("ref--person--logo"
    );

    openBtn[0].onclick = openPopup;
 /*   openBtn[1].onclick = openPopup2; */
/*     openBtn[2].onclick = openPopuptest(2); */


    let closeBtn = document.getElementsByClassName("popup--btn");
     closeBtn[0].onclick = closePopup;
    /* closeBtn[1].onclick = closePopup2; */
   /*  closeBtn[2].onclick = closePopuptest(2); */

}

function openPopup() {
/* 
    let popupBox =  document.getElementsByClassName("popup--main") */

    let testing = document.getElementsByClassName("popup--main")[0];
    testing.style.display = "flex";
    document.getElementsByClassName("refs--main")[0].style.opacity = 0.3;


}

function closePopup() {
    document.getElementsByClassName("popup--main")[0].style.display = "none";
    document.getElementsByClassName("refs--main")[0].style.opacity = 1;
}


function openPopup2() {
    /* 
        let popupBox =  document.getElementsByClassName("popup--main") */
    
        document.getElementsByClassName("popup--main")[1].style.display = "flex";
        document.getElementsByClassName("refs--main")[0].style.opacity = 0.3;
    }
    
    function closePopup2() {
        document.getElementsByClassName("popup--main")[1].style.display = "none";
        document.getElementsByClassName("refs--main")[0].style.opacity = 1;
    }

    function openPopuptest(myDiv) {
        /* 
            let popupBox =  document.getElementsByClassName("popup--main") */
        
            document.getElementsByClassName("popup--main")[myDiv].style.display = "flex";
            document.getElementsByClassName("refs--main")[0].style.opacity = 0.3;
        }
        
        function closePopup2(myDiv) {
            document.getElementsByClassName("popup--main")[myDiv].style.display = "none";
            document.getElementsByClassName("refs--main")[0].style.opacity = 1;
        }
    



document.addEventListener("DOMContentLoaded", init); 




/*  FUNKCJE DO REFS.HTML  ALBERT */
/*

    let openBtns = document.getElementsByClassName("ref--person--logo");


    

        openBtns[0].onclick = openPopup(0);
    


        

    let closeBtn = document.getElementsByClassName("popup--main").getElementById("popup--btn");
    closeBtn.onclick = closePopup(0);



function openPopup(myPop) {
        document.getElementsByClassName("popup--main")[myPop].style.display = "flex";
        document.getElementsByClassName("refs--main")[0].style.opacity = 0.3;
}

function closePopup(myPop) {
    document.getElementsByClassName("popup--main")[myPop].style.display = "none";
    document.getElementsByClassName("refs--main")[0].style.opacity = 1;
}

*/
