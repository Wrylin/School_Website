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

form.addEventListener('submit', (e) => {
    e.preventDefault();

    let name, email, number, text;

    name = document.getElementById('name').value;
    email = document.getElementById('email').value;
    number = document.getElementById('number').value;
    text = document.getElementById('text').value;
    console.log(name);
    console.log(email);
    console.log(number);
    console.log(text);

    form.reset();
})