// Programmer : Nathalea Evans, 2101707

// Nigaton Bar Animation
window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  if (this.window.scrollY > 0) {
    header.style.backgroundColor = "#2b124c";
  } else {
    header.style.backgroundColor = "transparent";
  }
});

// Mobile Navigation Bar Animation
const mobileMenu = document.querySelector(".mobile");
const hamburger = document.querySelector(".hamburger");
const menu = document.querySelector(".navbar");

// Highlight the menu item that is currently active
menu.addEventListener("click", function () {
  this.classList.toggle("is-active");
});

// Animate the hamburger menu and show the mobile menu
hamburger.addEventListener("click", function () {
  this.classList.toggle("is-active");
  mobileMenu.classList.toggle("is-active");
});
