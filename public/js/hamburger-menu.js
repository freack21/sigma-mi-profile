const hamburger = document.getElementById("hamburger");
const dropdownMenu = document.getElementById("dropdownMenu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");

  if (dropdownMenu.classList.contains("show")) {
    dropdownMenu.classList.remove("show");
    setTimeout(() => {
      dropdownMenu.style.display = "none";
    }, 300);
    document.body.classList.remove("dropdown-active");
    return;
  }

  document.body.classList.add("dropdown-active");
  dropdownMenu.style.display = "flex";
  setTimeout(() => {
    dropdownMenu.classList.add("show");
  }, 10);
});
