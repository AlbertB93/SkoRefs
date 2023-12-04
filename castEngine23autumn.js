let month1 = document.getElementById("month-1");
let month2 = document.getElementById("month-2");
let month3 = document.getElementById("month-3");
let month4 = document.getElementById("month-4");
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
let m3w1 = document.getElementById("m3-w1");
let m3w2 = document.getElementById("m3-w2");
let m3w3 = document.getElementById("m3-w3");
let m3w4 = document.getElementById("m3-w4");
let m3w5 = document.getElementById("m3-w5");
let m4w1 = document.getElementById("m4-w1");
let m4w2 = document.getElementById("m4-w2");
let m4w3 = document.getElementById("m4-w3");
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
let m3w1Table = document.getElementById("oct_04-05");
let m3w2Table = document.getElementById("oct_06-08");
let m3w3Table = document.getElementById("oct_12-15");
let m3w4Table = document.getElementById("oct_18-22");
let m3w5Table = document.getElementById("oct_25-31");
let m4w1Table = document.getElementById("nov_03-05");
let m4w2Table = document.getElementById("nov_10-12");
let m4w3Table = document.getElementById("nov_18-29");

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
    m3w1.classList.remove("active--week");
    m3w2.classList.remove("active--week");
    m3w3.classList.remove("active--week");
    m3w4.classList.remove("active--week");
    m3w5.classList.remove("active--week");
    m4w1.classList.remove("active--week");
    m4w2.classList.remove("active--week");
    m4w3.classList.remove("active--week");
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
    m3w1Table.style.display = "none";
    m3w2Table.style.display = "none";
    m3w3Table.style.display = "none";
    m3w4Table.style.display = "none";
    m3w5Table.style.display = "none";
    m4w1Table.style.display = "none";
    m4w2Table.style.display = "none";
    m4w3Table.style.display = "none";
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
  } else if (nameOfMonth === "october") {
    month3.classList.contains("active")
      ? month3.classList.remove("active")
      : month3.classList.add("active");
  } else if (nameOfMonth === "november") {
    month4.classList.contains("active")
      ? month4.classList.remove("active")
      : month4.classList.add("active");
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
  } else if (idOfWeek === "oct_04-05") {
    m3w1.classList.contains("active--week")
      ? m3w1.classList.remove("active--week")
      : m3w1.classList.add("active--week");
  } else if (idOfWeek === "oct_06-08") {
    m3w2.classList.contains("active--week")
      ? m3w2.classList.remove("active--week")
      : m3w2.classList.add("active--week");
  } else if (idOfWeek === "oct_12-15") {
    m3w3.classList.contains("active--week")
      ? m3w3.classList.remove("active--week")
      : m3w3.classList.add("active--week");
  } else if (idOfWeek === "oct_18-22") {
    m3w4.classList.contains("active--week")
      ? m3w4.classList.remove("active--week")
      : m3w4.classList.add("active--week");
  } else if (idOfWeek === "oct_25-31") {
    m3w5.classList.contains("active--week")
      ? m3w5.classList.remove("active--week")
      : m3w5.classList.add("active--week");
  } else if (idOfWeek === "nov_03-05") {
    m4w1.classList.contains("active--week")
      ? m4w1.classList.remove("active--week")
      : m4w1.classList.add("active--week");
  } else if (idOfWeek === "nov_10-12") {
    m4w2.classList.contains("active--week")
      ? m4w2.classList.remove("active--week")
      : m4w2.classList.add("active--week");
  }else if (idOfWeek === "nov_18-29") {
    m4w3.classList.contains("active--week")
      ? m4w3.classList.remove("active--week")
      : m4w3.classList.add("active--week");
  }

}

