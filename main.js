// navbar
window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0)
})

// show/hide navbar
const menu = document.querySelector(".nav_menu");
const menubtn = document.querySelector("#open-menu-btn");
const closebtn = document.querySelector("#close-menu-btn");

menubtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closebtn.style.display = "inline-block";
    menubtn.style.display = "none";
})

closebtn.addEventListener('click', () => {
    menu.style.display = "none";
    closebtn.style.display = "none";
    menubtn.style.display = "inline-block";
})

//contact form
var form = document.getElementById('form');
let name, email, number, text;

form.addEventListener('submit', function(event) {
    event.preventDefault();

    name = document.getElementById('name');
    email = document.getElementById('email');
    number = document.getElementById('number');
    text = document.getElementsByClassName('text');

    console.log(name);
    console.log(email);
    console.log(number);
    console.log(text);
})