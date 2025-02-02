var header = document.getElementById("desktopMenu")?.parentElement;
var lastScrollY = window.scrollY;
var menuList = document.getElementById("menuList");

window.addEventListener("scroll", () => {
  const currentScrollY = window.scrollY;

  if (currentScrollY > window.innerHeight) {
    if (currentScrollY > lastScrollY && !menuList.classList.contains("show")) {
      header.classList.add("hidden");
    } else {
      header.classList.remove("hidden");
    }
  }

  lastScrollY = currentScrollY;
});
