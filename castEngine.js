let month1 = document.getElementById("month-1");
let month2 = document.getElementById("month-2");
let month3 = document.getElementById("month-3");
let month4 = document.getElementById("month-4");
let month5 = document.getElementById("month-5");
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
let m4w3 = document.getElementById("m4-w3");
let m4w4 = document.getElementById("m4-w4");
let m4w5 = document.getElementById("m4-w5");
let m4w1Table = document.getElementById("may_03");
let m4w2Table = document.getElementById("may_06-07");
let m4w3Table = document.getElementById("may_13-15");
let m4w4Table = document.getElementById("may_20-21");
let m4w5Table = document.getElementById("may_27-31");
let m5w1 = document.getElementById("m5-w1");
let m5w2 = document.getElementById("m5-w2");
let m5w3 = document.getElementById("m5-w3");
let m5w4 = document.getElementById("m5-w4");
let m5w1Table = document.getElementById("june_03-04");
let m5w2Table = document.getElementById("june_06-08");
let m5w3Table = document.getElementById("june_09-13");
let m5w4Table = document.getElementById("june_15-19");

function displayFlex(nameOfMonth) {
  var month = document.getElementById(nameOfMonth);
  console.log(month);

  if (month.style.display === "flex") {
    month.style.display = "none";
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
    m4w3.classList.remove("active--week");
    m4w4.classList.remove("active--week");
    m4w5.classList.remove("active--week");
    m5w1.classList.remove("active--week");
    m5w2.classList.remove("active--week");
    m5w3.classList.remove("active--week");
    m5w4.classList.remove("active--week");
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
    m4w3Table.style.display = "none";
    m4w4Table.style.display = "none";
    m4w5Table.style.display = "none";
    m5w1Table.style.display = "none";
    m5w2Table.style.display = "none";
    m5w3Table.style.display = "none";
    m5w4Table.style.display = "none";
  } else {
    month.style.display = "flex";
  }

  if (nameOfMonth === "february") {
    month1.classList.contains("active")
      ? month1.classList.remove("active")
      : month1.classList.add("active");
  } else if (nameOfMonth === "march") {
    month2.classList.contains("active")
      ? month2.classList.remove("active")
      : month2.classList.add("active");
  } else if (nameOfMonth === "april") {
    month3.classList.contains("active")
      ? month3.classList.remove("active")
      : month3.classList.add("active");
  } else if (nameOfMonth === "may") {
    month4.classList.contains("active")
      ? month4.classList.remove("active")
      : month4.classList.add("active");
  } else if (nameOfMonth === "june") {
    month5.classList.contains("active")
      ? month5.classList.remove("active")
      : month5.classList.add("active");
  }
}

function displayBlock(idOfWeek) {
  var week = document.getElementById(idOfWeek);
  week.style.display = week.style.display == "block" ? "none" : "block";

  if (idOfWeek === "feb_25-26") {
    m1w1.classList.contains("active--week")
      ? m1w1.classList.remove("active--week")
      : m1w1.classList.add("active--week");
  } else if (idOfWeek === "mar_04-05") {
    m2w1.classList.contains("active--week")
      ? m2w1.classList.remove("active--week")
      : m2w1.classList.add("active--week");
  } else if (idOfWeek === "mar_11-12") {
    m2w2.classList.contains("active--week")
      ? m2w2.classList.remove("active--week")
      : m2w2.classList.add("active--week");
  } else if (idOfWeek === "mar_18-19") {
    m2w3.classList.contains("active--week")
      ? m2w3.classList.remove("active--week")
      : m2w3.classList.add("active--week");
  } else if (idOfWeek === "mar_24-26") {
    m2w4.classList.contains("active--week")
      ? m2w4.classList.remove("active--week")
      : m2w4.classList.add("active--week");
  } else if (idOfWeek === "apr_01-02") {
    m3w1.classList.contains("active--week")
      ? m3w1.classList.remove("active--week")
      : m3w1.classList.add("active--week");
  } else if (idOfWeek === "apr_05-08") {
    m3w2.classList.contains("active--week")
      ? m3w2.classList.remove("active--week")
      : m3w2.classList.add("active--week");
  } else if (idOfWeek === "apr_11-13") {
    m3w3.classList.contains("active--week")
      ? m3w3.classList.remove("active--week")
      : m3w3.classList.add("active--week");
  } else if (idOfWeek === "apr_14-16") {
    m3w4.classList.contains("active--week")
      ? m3w4.classList.remove("active--week")
      : m3w4.classList.add("active--week");
  } else if (idOfWeek === "apr_19-23") {
    m3w5.classList.contains("active--week")
      ? m3w5.classList.remove("active--week")
      : m3w5.classList.add("active--week");
  } else if (idOfWeek === "apr_26-27") {
    m3w6.classList.contains("active--week")
      ? m3w6.classList.remove("active--week")
      : m3w6.classList.add("active--week");
  } else if (idOfWeek === "apr_28-30") {
    m3w7.classList.contains("active--week")
      ? m3w7.classList.remove("active--week")
      : m3w7.classList.add("active--week");
  } else if (idOfWeek === "may_03") {
    m4w1.classList.contains("active--week")
      ? m4w1.classList.remove("active--week")
      : m4w1.classList.add("active--week");
  } else if (idOfWeek === "may_06-07") {
    m4w2.classList.contains("active--week")
      ? m4w2.classList.remove("active--week")
      : m4w2.classList.add("active--week");
  } else if (idOfWeek === "may_13-15") {
    m4w3.classList.contains("active--week")
      ? m4w3.classList.remove("active--week")
      : m4w3.classList.add("active--week");
  } else if (idOfWeek === "may_20-21") {
    m4w4.classList.contains("active--week")
      ? m4w4.classList.remove("active--week")
      : m4w4.classList.add("active--week");
  } else if (idOfWeek === "may_27-31") {
    m4w5.classList.contains("active--week")
      ? m4w5.classList.remove("active--week")
      : m4w5.classList.add("active--week");
  } else if (idOfWeek === "june_03-04") {
    m5w1.classList.contains("active--week")
      ? m5w1.classList.remove("active--week")
      : m5w1.classList.add("active--week");
  } else if (idOfWeek === "june_06-08") {
    m5w2.classList.contains("active--week")
      ? m5w2.classList.remove("active--week")
      : m5w2.classList.add("active--week");
  } else if (idOfWeek === "june_09-13") {
    m5w3.classList.contains("active--week")
      ? m5w3.classList.remove("active--week")
      : m5w3.classList.add("active--week");
  } else if (idOfWeek === "june_15-19") {
    m5w4.classList.contains("active--week")
      ? m5w4.classList.remove("active--week")
      : m5w4.classList.add("active--week");
  }
}
