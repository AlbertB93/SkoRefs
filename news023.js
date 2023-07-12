// news023

let arrowLeft = document.querySelector('#arrow--left');
let arrowRight = document.querySelector('#arrow--right');
let activeElementNumber = 1;

function hidePhoto() {
  activeElement = document.querySelector('.active');
  activeElement.classList.remove("active");
}

function showPhoto(numberOfPhoto) {
  hidePhoto();
  document.querySelector('#photo' + numberOfPhoto).classList.add('active');
}

for (let i = 1; i < 7; i++) {
  function showPhotoActive() {
    activeElement = i;
    showPhoto(i)
    activeElementNumber = i;
  }
  document.querySelector("#dot" + i).addEventListener('click', showPhotoActive)
}

function showNextPhoto() {
  if (activeElementNumber === 6) {
    activeElementNumber = 1;
  } else {
    activeElementNumber++;
  }
  console.log(activeElementNumber)
  showPhoto(activeElementNumber);
}

function showPrevPhoto() {
  if (activeElementNumber === 1) {
    activeElementNumber = 6;
  } else {
    activeElementNumber--;
  }
  console.log(activeElementNumber)
  showPhoto(activeElementNumber);
}

arrowLeft.addEventListener('click', showPrevPhoto);
arrowRight.addEventListener('click', showNextPhoto);