

function toggle(idDiv) {
    var oDiv = document.getElementById(idDiv);
    oDiv.style.display = (oDiv.style.display == "flex") ? "none" : "flex";

}



function toggleBlock(idDiv) {
    var oDiv = document.getElementById(idDiv);
    oDiv.style.display = (oDiv.style.display == "block") ? "none" : "block";

}




/* NIE DZIAŁA

function toggle(idDiv) {
    var oDiv = document.getElementsByClassName('ref--person--container1');

    oDiv.forEach( (e) => {
           e.style.display = (e.style.display == "none") ? "block" : "none";
    });

 
} 
 */