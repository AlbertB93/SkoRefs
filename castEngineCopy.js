
let month1 = document.getElementById('month-1');
let month2 = document.getElementById('month-2');
let m1w1 = document.getElementById('m1-w1');
let m1w1Table = document.getElementById('feb_25-26');
let m2w1 = document.getElementById('m2-w1');
let m2w1Table = document.getElementById('mar_04-05');



function displayFlex(przekazanaZmienna) {
    var week = document.getElementById(przekazanaZmienna);
    console.log(week);

    if (week.style.display === "flex"){
        week.style.display = "none";
        m1w1.classList.remove("active--week")
        m2w1.classList.remove("active--week")
        m1w1Table.style.display = "none";
        m2w1Table.style.display = "none";


    } else {
        week.style.display = "flex";        
    };

if(przekazanaZmienna==='february'){
    (month1.classList.contains("active")) ? month1.classList.remove("active") : month1.classList.add("active");
} else if(przekazanaZmienna==='march'){
    (month2.classList.contains("active")) ? month2.classList.remove("active") : month2.classList.add("active");
}

}


function displayBlock(zmTest) {
    var week = document.getElementById(zmTest);
    week.style.display = (week.style.display == "block") ? "none" : "block";

     if (zmTest === 'feb_25-26'){
        (m1w1.classList.contains("active--week")) ? m1w1.classList.remove("active--week") : m1w1.classList.add("active--week"); 
    } else if (zmTest === 'mar_04-05'){
        (m2w1.classList.contains("active--week")) ? m2w1.classList.remove("active--week") : m2w1.classList.add("active--week");
    }  
    
}
 
