/*  FUNKCJE DO REFS.HTML */
{
  function openPopup(myDiv) {
    document.getElementsByClassName("popup--main")[myDiv].style.display =
      "flex";
    document.querySelector(".refs--container").style.opacity = 0.1;
  }
  function closePopup(myDiv) {
    document.getElementsByClassName("popup--main")[myDiv].style.display =
      "none";
    document.querySelector(".refs--container").style.opacity = 1;
  }
}

/*  FUNKCJE DO GALLERY.HTML */
const PHOTOS_CONTAINER = document.querySelectorAll(".gallery--photo--field");
const POPUP = document.querySelector(".popupGallery");
const POPUP_CLOSE = document.querySelector(".popupCloseBtn");
const POPUP_IMG = document.querySelector(".popupGallery--img");
const ARROW_LEFT = document.querySelector(".popupArrow--left");
const ARROW_RIGHT = document.querySelector(".popupArrow--right");
const GALLERY_CONTAINER_ID = document.querySelector(".gallery--container");
let currentImgIndex;
let photoCounter = 1;

console.log(PHOTOS_CONTAINER);
console.log(GALLERY_CONTAINER_ID.getAttribute("id"));
let galleryId = GALLERY_CONTAINER_ID.getAttribute("id");

// Źródła strony

function openPopupSourcesPhotos() {
  document.getElementsByClassName("popup--sourcesPhotos")[0].style.display =
    "flex";
  GALLERY_CONTAINER_ID.style.opacity = 0.05;
}

function closePopupSourcesPhotos() {
  document.getElementsByClassName("popup--sourcesPhotos")[0].style.display =
    "none";
  GALLERY_CONTAINER_ID.style.opacity = 1;
}

// DODAWANIE ZDJĘĆ DO GALERII

if (galleryId == 1) {
  photoCounter = 1;
} else if (galleryId == 2) {
  photoCounter = 21;
} else if (galleryId == 3) {
  photoCounter = 41;
} else if (galleryId == 4) {
  photoCounter = 61;
} else if (galleryId == 5) {
  photoCounter = 81;
}

for (i = 0; i < PHOTOS_CONTAINER.length; i++) {
  PHOTOS_CONTAINER[i].innerHTML =
    '<img src="../images/gallery/g' +
    photoCounter +
    '.jpg" alt="zdjecie" class="gallery--photo" />';
  photoCounter++;
}

const PHOTOS = document.querySelectorAll(".gallery--photo");

// PRZYPISYWANIE NASTĘPNEGO ZDJĘĆIA W GALERII
const showNextImg = () => {
  if (currentImgIndex === PHOTOS.length - 1) {
    currentImgIndex = 0;
  } else {
    currentImgIndex++;
  }
  POPUP_IMG.src = PHOTOS[currentImgIndex].src;
};

// PRZYPISYWANIE PPRZEDNIEGO ZDJĘCIA W GALERII
const showPreviousImg = () => {
  if (currentImgIndex === 0) {
    currentImgIndex = PHOTOS.length - 1;
  } else {
    currentImgIndex--;
  }
  POPUP_IMG.src = PHOTOS[currentImgIndex].src;
};

// ZAMYKANIE POPUPA
const exitPopup = () => {
  POPUP.classList.add("hidden");
};

// WŁĄCZANIE POPUPA
PHOTOS.forEach((photo, index) => {
  photo.addEventListener("click", (e) => {
    POPUP.classList.remove("hidden");
    POPUP_IMG.src = e.target.src;
    currentImgIndex = index;
  });
});

// PRZYPISANIE LISTENERÓW DO PRZYCISKÓW
POPUP_CLOSE.addEventListener("click", exitPopup);
ARROW_RIGHT.addEventListener("click", showNextImg);
ARROW_LEFT.addEventListener("click", showPreviousImg);

document.addEventListener("keydown", (e) => {
  if (!POPUP.classList.contains("hidden")) {
    if (e.code === "ArrowRight" || e.keyCode === 39) {
      showNextImg();
    }
    if (e.code === "ArrowLeft" || e.keyCode === 37) {
      showPreviousImg();
    }

    if (e.code === "Escape" || e.keycode === 27) {
      exitPopup();
    }
  }
});
