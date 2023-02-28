console.log("Działa castEngineCopy")


/* let august = document.getElementById('february');
let september = document.getElementById('september');
let month = document.getElementById('month-1');
let month2 = document.getElementById('month-2');
let aWeek1 = document.getElementById('week-1');
let aWeek2 = document.getElementById('week-2');
let aWeek3 = document.getElementById('week-3');
let mojaZmienna = document.getElementById('feb_26-26');

let testSieWrz = document.getElementsByClassName('cast--container--month');
 */

let month = document.getElementById('month-1');
let february = document.getElementById('february');
let aWeek1 = document.getElementById('m1-w1');
let aWeek2 = document.getElementById('m1-w2');

function displayFlex(przekazanaZmienna) {
    var week = document.getElementById(przekazanaZmienna);
    console.log(week);

    if (week.style.display === "flex"){
        week.style.display = "none";
/*         mojaZmienna.style.display = "none"; */
    } else {
        week.style.display = "flex";        
    };

if(przekazanaZmienna==='february'){
    (month.classList.contains("active")) ? month.classList.remove("active") : month.classList.add("active");
}


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




function displayBlock(zmTest) {
    var week = document.getElementById(zmTest);
    week.style.display = (week.style.display == "block") ? "none" : "block";

     if (zmTest === 'feb_25-26'){
        (aWeek1.classList.contains("active--week")) ? aWeek1.classList.remove("active--week") : aWeek1.classList.add("active--week"); 
    } else if (zmTest === 'feb_27-28'){
        (aWeek2.classList.contains("active--week")) ? aWeek2.classList.remove("active--week") : aWeek2.classList.add("active--week");
    }  
    
}
 
