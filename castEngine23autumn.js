let month1 = document.getElementById("month-1");
let m1w1 = document.getElementById("m1-w1");
let m1w1Table = document.getElementById("aug_05-06");

function displayFlex(nameOfMonth) {
  var month = document.getElementById(nameOfMonth);
  console.log(month);

  if (month.style.display === "flex") {
    month.style.display = "none";
    m1w1.classList.remove("active--week");
    m1w1Table.style.display = "none";
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
  }
}
