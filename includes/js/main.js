// Navbar functionality

var plate = document.getElementById("plate");
var mainNav = document.getElementById("mainNav");

function openNav() {
    plate.classList.toggle("active");

    if (mainNav.style.display == "block") {
        mainNav.style.display = "none";
    } else {
        mainNav.style.display = "block";
    }
}