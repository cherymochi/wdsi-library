// Programmer : Nathalea Evans, 2101707

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  if (this.window.scrollY > 0) {
    header.style.backgroundColor = "#290649";
  } else {
    header.style.backgroundColor = "transparent";
  }
});
