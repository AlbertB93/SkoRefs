


const PHOTOS = document.querySelectorAll(".gallery--photo--field2");

const TEST = document.getElementsByClassName("gallery--photo--field2");

console.log(TEST);
console.log(PHOTOS);
let j=1;

for (let i=0;TEST.length;i++){


    TEST[i].innerHTML = '<img src="../images/gallery/g' + j +'.jpg" alt="zdjecie" class="gallery--photo" />';
    j++;
    console.log(TEST[i].src);
}




/* 
PHOTOS.forEach( (photo, index) => {
    photo.src = 
    });
}); */