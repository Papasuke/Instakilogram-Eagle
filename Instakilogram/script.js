var menuSections = document.querySelector(".menu-icon");
var sidebar = document.querySelector(".left-sidebar");
var middleSide = document.querySelector(".middle-side");
// var form = document.getElementById("inside-form");

menuSections.onclick = function(){
    sidebar.classList.toggle("shortcut-sidebar")
    middleSide.classList.toggle("full-middle-side")
}
