let month1 = document.getElementById("month-1");
let m1w1 = document.getElementById("m1-w1");
let m1w2 = document.getElementById("m1-w2");
let m1w3 = document.getElementById("m1-w3");
let m1w4 = document.getElementById("m1-w4");
let m1w1Table = document.getElementById("aug_05-06");
let m1w2Table = document.getElementById("aug_12");
let m1w3Table = document.getElementById("aug_15-16");
let m1w4Table = document.getElementById("aug_19-20");

function displayFlex(nameOfMonth) {
  var month = document.getElementById(nameOfMonth);
  console.log(month);
  console.log('M1W3' + m1w3);
  console.log('M1W4' + m1w4);
  console.log(m1w4Table);

  if (month.style.display === "flex") {
    month.style.display = "none";
    m1w1.classList.remove("active--week");
    m1w2.classList.remove("active--week");
    m1w3.classList.remove("active--week");
    m1w4.classList.remove("active--week");
    m1w1Table.style.display = "none";
    m1w2Table.style.display = "none";
    m1w3Table.style.display = "none";
    m1w4Table.style.display = "none";
  } else {
    month.style.display = "flex";
  }

  if (nameOfMonth === "august") {
    month1.classList.contains("active")
      ? month1.classList.remove("active")
      : month1.classList.add("active");
  }
}

function displayBlock(idOfWeek) {
  var week = document.getElementById(idOfWeek);
  week.style.display = week.style.display == "block" ? "none" : "block";

  if (idOfWeek === "aug_05-06") {
    m1w1.classList.contains("active--week")
      ? m1w1.classList.remove("active--week")
      : m1w1.classList.add("active--week");
  } else if (idOfWeek === "aug_12") {
    m1w2.classList.contains("active--week")
      ? m1w2.classList.remove("active--week")
      : m1w2.classList.add("active--week");
  } else if (idOfWeek === "aug_15-16") {
    m1w3.classList.contains("active--week")
      ? m1w3.classList.remove("active--week")
      : m1w3.classList.add("active--week");
  } else if (idOfWeek === "aug_19-20") {
    m1w4.classList.contains("active--week")
      ? m1w4.classList.remove("active--week")
      : m1w4.classList.add("active--week");
  }
}
