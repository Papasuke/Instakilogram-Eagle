var menuSections = document.querySelector(".menu-icon");
var sidebar = document.querySelector(".left-sidebar");
var middleSide = document.querySelector(".middle-side");
var form = document.getElementById("inside-form");

menuSections.onclick = function(){
    sidebar.classList.toggle("shortcut-sidebar")
    middleSide.classList.toggle("full-middle-side")
}

function openRegister(){
    form.style.transform = "rotateY(-180deg)"
}

function openLogin(){
    form.style.transform = "rotateY(0deg)"
}