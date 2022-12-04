console.log('Działa ')

let btn = document.querySelector('#btn1');

let btn2 = document.getElementsByTagName('a');

console.log(btn2);

let myTest = () =>{
btn.style.background = 'orange';
btn2[11].style.color = 'black';
}

let functionBtnTwo = () =>{
    console.log('Weszlismy do funckji')
    btn = document.querySelector('#btn2');
btn.style.background = 'orange';
btn2[12].style.color = 'black';
}

myTest();




