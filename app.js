

function toggle(idDiv) {
    var oDiv = document.getElementsByClassName('ref--person--container1')[0];
    oDiv.style.display = (oDiv.style.display == "none") ? "block" : "none";
} 






/* NIE DZIAŁA

function toggle(idDiv) {
    var oDiv = document.getElementsByClassName('ref--person--container1');

    oDiv.forEach( (e) => {
           e.style.display = (e.style.display == "none") ? "block" : "none";
    });

 
} 
 */