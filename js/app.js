const navbar = document.getElementById("navbar");
const navToggle = document.getElementById("nav-toggle");

navToggle.addEventListener("click", (ev) => {
  ev.preventDefault();

  if (!navbar.classList.contains("navToggled")) {
    navbar.classList.add("navToggled");
  } else {
    navbar.classList.remove("navToggled");
  }
});
