const searchMenuMobile = document.getElementById("searchMenuMobile");
const searchInputMobile = document.getElementById("searchInputMobile");

searchMenuMobile.addEventListener("click", function (e) {
  e.preventDefault();

  searchMenuMobile.classList.toggle("active");

  if (searchInputMobile.classList.contains("show")) {
    searchInputMobile.classList.remove("show");
    setTimeout(() => {
      searchInputMobile.style.display = "none";
    }, 300);
    return;
  }

  searchInputMobile.style.display = "block";
  setTimeout(() => {
    searchInputMobile.classList.add("show");
  }, 10);
});
