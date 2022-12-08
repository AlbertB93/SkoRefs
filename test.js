console.log("Działa")


let august = document.getElementById('august');
let september = document.getElementById('september');
let month = document.getElementById('month-1');
let month2 = document.getElementById('month-2');
let aWeek1 = document.getElementById('week-1');
let aWeek2 = document.getElementById('week-2');
let aWeek3 = document.getElementById('week-3');



let testSieWrz = document.getElementsByClassName('cast--container--month');

console.log(testSieWrz);

function displayFlex(weeks) {
    var week = document.getElementById(weeks);
    week.style.display = (week.style.display == "flex") ? "none" : "flex";

    if (weeks === 'august'){
    month.style.background = (month.style.background == "orange") ? "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))" : "orange";
    month.style.color = (month.style.color == "black") ? "orange" : "black";  
/*         aWeek1.style.display = (aWeek1.style.display == "flex") ? "none" : "flex";
            aWeek2.style.display = (aWeek2.style.display == "flex") ? "none" : "flex"; */
    } else if (weeks === 'september'){
    month2.style.background = (month2.style.background == "orange") ? "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))" : "orange";
    month2.style.color = (month2.style.color == "black") ? "orange" : "black";    
    }


}

function displayBlock(weeks) {
    var week = document.getElementById(weeks);
    week.style.display = (week.style.display == "block") ? "none" : "block";

    if (weeks === 'august_06_07'){
    aWeek1.style.background = (aWeek1.style.background == "orange") ? "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))" : "orange";
    aWeek1.style.color = (aWeek1.style.color == "black") ? "orange" : "black";  
    } else if (weeks === 'august_13_14'){
    aWeek2.style.background = (aWeek2.style.background == "orange") ? "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))" : "orange";
    aWeek2.style.color = (aWeek2.style.color == "black") ? "orange" : "black";    
    } else if (weeks === 'sept_13_14'){
    aWeek3.style.background = (aWeek2.style.background == "orange") ? "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))" : "orange";
    aWeek3.style.color = (aWeek2.style.color == "black") ? "orange" : "black";    
    }
    
}

function displayNone() {

august.style.display="none";    
september.style.display="none";

/* aWeek1.style.display="none";
aWeek2.style.display="none";
 */
let testowaTab = document.getElementsByClassName('test');
let testowaTab2 = document.getElementsByClassName('cast--container--month--week');


for (let i=0; i < testSieWrz.length; i++){
    testSieWrz[i].style.background = "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))";
    testSieWrz[i].style.color = "orange";
}

for (let i=0; i < testowaTab2.length; i++){
    testowaTab2[i].style.background = "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))";
    testowaTab2[i].style.color = "orange";
}



for (let i=0; i < testowaTab.length; i++){
    testowaTab[i].style.display="none";  
    testowaTab[i].style.background = "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))";
    testowaTab[i].style.color = "orange";
}


} 