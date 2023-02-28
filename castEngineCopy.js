console.log("Działa castEngineCopy")


let august = document.getElementById('february');
let september = document.getElementById('september');
let month = document.getElementById('month-1');
let month2 = document.getElementById('month-2');
let aWeek1 = document.getElementById('week-1');
let aWeek2 = document.getElementById('week-2');
let aWeek3 = document.getElementById('week-3');
let mojaZmienna = document.getElementById('feb_26-26');

let testSieWrz = document.getElementsByClassName('cast--container--month');



function displayFlex(przekazanaZmienna) {
    var week = document.getElementById(przekazanaZmienna);
    console.log(week);

    if (week.style.display === "flex"){
        week.style.display = "none";
        mojaZmienna.style.display = "none";
    } else {
        week.style.display = "flex";        
    };

if(przekazanaZmienna==='august'){
    (month.classList.contains("active")) ? month.classList.remove("active") : month.classList.add("active");
}

console.log(month);
 /*    if (przekazanaZmienna === 'august'){
        if (month.classList.contains("cast--container--month")){
        month.classList.replace("cast--container--month", "cast--container--month-reverse");
    } else {
            month.classList.replace("cast--container--month-reverse", "cast--container--month");

    }
    } else if (przekazanaZmienna === 'september'){
    month2.style.background = (month2.style.background == "orange") ? "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))" : "orange";
    month2.style.color = (month2.style.color == "black") ? "orange" : "black";    
    } */
}

function displayBlock(weeks) {
    var week = document.getElementById(weeks);
    console.log(week);
    week.style.display = (week.style.display == "block") ? "none" : "block";

    if (weeks === 'august_06_07'){
    aWeek1.style.background = (aWeek1.style.background == "linear-gradient(to top, rgb(252, 176, 34), rgb(210, 148, 34))") ? "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))" : "linear-gradient(to top, rgb(252, 176, 34), rgb(210, 148, 34))";
    aWeek1.style.color = (aWeek1.style.color == "black") ? "orange" : "black";  
    } else if (weeks === 'august_13_14'){
        (aWeek2.classList.contains("active")) ? aWeek2.classList.remove("active") : aWeek2.classList.add("active");
    } else if (weeks === 'sept_13_14'){
    aWeek3.style.background = (aWeek2.style.background == "orange") ? "linear-gradient(to right, rgb(28, 27, 27), rgb(40, 37, 37))" : "orange";
    aWeek3.style.color = (aWeek2.style.color == "black") ? "orange" : "black";    
    }
    
}

