let month1 = document.getElementById("month-1");
let month2 = document.getElementById("month-2");
let month3 = document.getElementById("month-3");
let month4 = document.getElementById("month-4");
let m1w1 = document.getElementById("m1-w1");
let m1w1Table = document.getElementById("feb_25-26");
let m2w1 = document.getElementById("m2-w1");
let m2w2 = document.getElementById("m2-w2");
let m2w3 = document.getElementById("m2-w3");
let m2w4 = document.getElementById("m2-w4");
let m2w1Table = document.getElementById("mar_04-05");
let m2w2Table = document.getElementById("mar_11-12");
let m2w3Table = document.getElementById("mar_18-19");
let m2w4Table = document.getElementById("mar_24-26");
let m3w1 = document.getElementById("m3-w1");
let m3w2 = document.getElementById("m3-w2");
let m3w3 = document.getElementById("m3-w3");
let m3w4 = document.getElementById("m3-w4");
let m3w5 = document.getElementById("m3-w5");
let m3w6 = document.getElementById("m3-w6");
let m3w7 = document.getElementById("m3-w7");
let m3w1Table = document.getElementById("apr_01-02");
let m3w2Table = document.getElementById("apr_05-08");
let m3w3Table = document.getElementById("apr_11-13");
let m3w4Table = document.getElementById("apr_14-16");
let m3w5Table = document.getElementById("apr_19-23");
let m3w6Table = document.getElementById("apr_26-27");
let m3w7Table = document.getElementById("apr_28-30");
let m4w1 = document.getElementById("m4-w1");
let m4w2 = document.getElementById("m4-w2");
let m4w1Table = document.getElementById("may_03");
let m4w2Table = document.getElementById("may_06-07");

function displayFlex(przekazanaZmienna) {
  var week = document.getElementById(przekazanaZmienna);
  console.log(week);

  if (week.style.display === "flex") {
    week.style.display = "none";
    m1w1.classList.remove("active--week");
    m2w1.classList.remove("active--week");
    m2w2.classList.remove("active--week");
    m2w3.classList.remove("active--week");
    m2w4.classList.remove("active--week");
    m3w1.classList.remove("active--week");
    m3w2.classList.remove("active--week");
    m3w3.classList.remove("active--week");
    m3w4.classList.remove("active--week");
    m3w5.classList.remove("active--week");
    m3w6.classList.remove("active--week");
    m3w7.classList.remove("active--week");
    m4w1.classList.remove("active--week");
    m4w2.classList.remove("active--week");
    m1w1Table.style.display = "none";
    m2w1Table.style.display = "none";
    m2w2Table.style.display = "none";
    m2w3Table.style.display = "none";
    m2w4Table.style.display = "none";
    m3w1Table.style.display = "none";
    m3w2Table.style.display = "none";
    m3w3Table.style.display = "none";
    m3w4Table.style.display = "none";
    m3w5Table.style.display = "none";
    m3w6Table.style.display = "none";
    m3w7Table.style.display = "none";
    m4w1Table.style.display = "none";
    m4w2Table.style.display = "none";
  } else {
    week.style.display = "flex";
  }

  if (przekazanaZmienna === "february") {
    month1.classList.contains("active")
      ? month1.classList.remove("active")
      : month1.classList.add("active");
  } else if (przekazanaZmienna === "march") {
    month2.classList.contains("active")
      ? month2.classList.remove("active")
      : month2.classList.add("active");
  } else if (przekazanaZmienna === "april") {
    month3.classList.contains("active")
      ? month3.classList.remove("active")
      : month3.classList.add("active");
  } else if (przekazanaZmienna === "may") {
    month4.classList.contains("active")
      ? month4.classList.remove("active")
      : month4.classList.add("active");
  }
}

function displayBlock(zmTest) {
  var week = document.getElementById(zmTest);
  week.style.display = week.style.display == "block" ? "none" : "block";

  if (zmTest === "feb_25-26") {
    m1w1.classList.contains("active--week")
      ? m1w1.classList.remove("active--week")
      : m1w1.classList.add("active--week");
  } else if (zmTest === "mar_04-05") {
    m2w1.classList.contains("active--week")
      ? m2w1.classList.remove("active--week")
      : m2w1.classList.add("active--week");
  } else if (zmTest === "mar_11-12") {
    m2w2.classList.contains("active--week")
      ? m2w2.classList.remove("active--week")
      : m2w2.classList.add("active--week");
  } else if (zmTest === "mar_18-19") {
    m2w3.classList.contains("active--week")
      ? m2w3.classList.remove("active--week")
      : m2w3.classList.add("active--week");
  } else if (zmTest === "mar_24-26") {
    m2w4.classList.contains("active--week")
      ? m2w4.classList.remove("active--week")
      : m2w4.classList.add("active--week");
  } else if (zmTest === "apr_01-02") {
    m3w1.classList.contains("active--week")
      ? m3w1.classList.remove("active--week")
      : m3w1.classList.add("active--week");
  } else if (zmTest === "apr_05-08") {
    m3w2.classList.contains("active--week")
      ? m3w2.classList.remove("active--week")
      : m3w2.classList.add("active--week");
  } else if (zmTest === "apr_11-13") {
    m3w3.classList.contains("active--week")
      ? m3w3.classList.remove("active--week")
      : m3w3.classList.add("active--week");
  } else if (zmTest === "apr_14-16") {
    m3w4.classList.contains("active--week")
      ? m3w4.classList.remove("active--week")
      : m3w4.classList.add("active--week");
  } else if (zmTest === "apr_19-23") {
    m3w5.classList.contains("active--week")
      ? m3w5.classList.remove("active--week")
      : m3w5.classList.add("active--week");
  } else if (zmTest === "apr_26-27") {
    m3w6.classList.contains("active--week")
      ? m3w6.classList.remove("active--week")
      : m3w6.classList.add("active--week");
  } else if (zmTest === "apr_28-30") {
    m3w7.classList.contains("active--week")
      ? m3w7.classList.remove("active--week")
      : m3w7.classList.add("active--week");
  } else if (zmTest === "may_03") {
    m4w1.classList.contains("active--week")
      ? m4w1.classList.remove("active--week")
      : m4w1.classList.add("active--week");
  } else if (zmTest === "may_06-07") {
    m4w2.classList.contains("active--week")
      ? m4w2.classList.remove("active--week")
      : m4w2.classList.add("active--week");
  }
}
