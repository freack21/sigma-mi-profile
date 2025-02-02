const searchMenu = document.getElementById("search-menu");
const searchInput = document.getElementById("searchInput");
const iconCancel = document.getElementById("iconCancel");

iconCancel.addEventListener("click", function (e) {
  searchInput.classList.remove("show");
  setTimeout(() => {
    searchInput.style.display = "none";
    searchMenu.style.display = "flex";
  }, 300);
});

searchMenu.addEventListener("click", function (e) {
  e.preventDefault();

  searchInput.style.display = "block";
  setTimeout(() => {
    searchInput.classList.add("show");
    searchMenu.style.display = "none";
  }, 10);
});
