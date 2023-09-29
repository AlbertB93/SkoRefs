let month1 = document.getElementById("month-1");
let month2 = document.getElementById("month-2");
let m1w1 = document.getElementById("m1-w1");
let m1w2 = document.getElementById("m1-w2");
let m1w3 = document.getElementById("m1-w3");
let m1w4 = document.getElementById("m1-w4");
let m1w5 = document.getElementById("m1-w5");
let m2w1 = document.getElementById("m2-w1");
let m2w2 = document.getElementById("m2-w2");
let m2w3 = document.getElementById("m2-w3");
let m2w4 = document.getElementById("m2-w4");
let m2w5 = document.getElementById("m2-w5");
let m2w6 = document.getElementById("m2-w6");
let m2w7 = document.getElementById("m2-w7");
let m2w8 = document.getElementById("m2-w8");
let m1w1Table = document.getElementById("aug_05-06");
let m1w2Table = document.getElementById("aug_12");
let m1w3Table = document.getElementById("aug_15-16");
let m1w4Table = document.getElementById("aug_19-20");
let m1w5Table = document.getElementById("aug_23-27");
let m2w1Table = document.getElementById("sep_02-03");
let m2w2Table = document.getElementById("sep_05-06");
let m2w3Table = document.getElementById("sep_08-10");
let m2w4Table = document.getElementById("sep_13");
let m2w5Table = document.getElementById("sep_15-17");
let m2w6Table = document.getElementById("sep_19-20");
let m2w7Table = document.getElementById("sep_23-24");
let m2w8Table = document.getElementById("sep_26-01");

function displayFlex(nameOfMonth) {
  var month = document.getElementById(nameOfMonth);

  if (month.style.display === "flex") {
    month.style.display = "none";
    m1w1.classList.remove("active--week");
    m1w2.classList.remove("active--week");
    m1w3.classList.remove("active--week");
    m1w4.classList.remove("active--week");
    m1w5.classList.remove("active--week");
    m2w1.classList.remove("active--week");
    m2w2.classList.remove("active--week");
    m2w3.classList.remove("active--week");
    m2w4.classList.remove("active--week");
    m2w5.classList.remove("active--week");
    m2w6.classList.remove("active--week");
    m2w7.classList.remove("active--week");
    m2w8.classList.remove("active--week");
    m1w1Table.style.display = "none";
    m1w2Table.style.display = "none";
    m1w3Table.style.display = "none";
    m1w4Table.style.display = "none";
    m1w5Table.style.display = "none";
    m2w1Table.style.display = "none";
    m2w2Table.style.display = "none";
    m2w3Table.style.display = "none";
    m2w4Table.style.display = "none";
    m2w5Table.style.display = "none";
    m2w6Table.style.display = "none";
    m2w7Table.style.display = "none";
    m2w8Table.style.display = "none";
  } else {
    month.style.display = "flex";
  }

  if (nameOfMonth === "august") {
    month1.classList.contains("active")
      ? month1.classList.remove("active")
      : month1.classList.add("active");
  } else if (nameOfMonth === "september") {
    month2.classList.contains("active")
      ? month2.classList.remove("active")
      : month2.classList.add("active");
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
  } else if (idOfWeek === "aug_23-27") {
    m1w5.classList.contains("active--week")
      ? m1w5.classList.remove("active--week")
      : m1w5.classList.add("active--week");
  } else if (idOfWeek === "sep_02-03") {
    m2w1.classList.contains("active--week")
      ? m2w1.classList.remove("active--week")
      : m2w1.classList.add("active--week");
  } else if (idOfWeek === "sep_05-06") {
    m2w2.classList.contains("active--week")
      ? m2w2.classList.remove("active--week")
      : m2w2.classList.add("active--week");
  } else if (idOfWeek === "sep_08-10") {
    m2w3.classList.contains("active--week")
      ? m2w3.classList.remove("active--week")
      : m2w3.classList.add("active--week");
  } else if (idOfWeek === "sep_13") {
    m2w4.classList.contains("active--week")
      ? m2w4.classList.remove("active--week")
      : m2w4.classList.add("active--week");
  } else if (idOfWeek === "sep_15-17") {
    m2w5.classList.contains("active--week")
      ? m2w5.classList.remove("active--week")
      : m2w5.classList.add("active--week");
  } else if (idOfWeek === "sep_19-20") {
    m2w6.classList.contains("active--week")
      ? m2w6.classList.remove("active--week")
      : m2w6.classList.add("active--week");
  } else if (idOfWeek === "sep_23-24") {
    m2w7.classList.contains("active--week")
      ? m2w7.classList.remove("active--week")
      : m2w7.classList.add("active--week");
  } else if (idOfWeek === "sep_26-01") {
    m2w8.classList.contains("active--week")
      ? m2w8.classList.remove("active--week")
      : m2w8.classList.add("active--week");
  }
}
