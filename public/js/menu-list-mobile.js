const menuListMobile = document.querySelectorAll(".menu-list a.parent-menu");
const menuItemsMobile = document.querySelectorAll(".menu-items-mobile");

menuListMobile.forEach((menuList) => {
  const dataList = menuList.getAttribute("data-list");

  menuList.addEventListener("click", function (e) {
    e.preventDefault();
    if (!dataList) return;

    menuListMobile.forEach((menuList) => {
      menuList.classList.remove("active");
    });

    let activeMenuItems = null;
    menuItemsMobile.forEach((menuItem) => {
      if (menuItem.style.display === "flex") {
        activeMenuItems = menuItem;
      }
    });

    const idActiveMenuItem = activeMenuItems
      ? activeMenuItems.getAttribute("id")
      : null;

    if (idActiveMenuItem === `menuListMobile-${dataList}`) {
      menuList.classList.remove("active");

      menuItemsMobile.forEach((menuItem) => {
        menuItem.style.display = "none";
      });
      return;
    }

    menuItemsMobile.forEach((menuItem) => {
      menuItem.style.display = "none";
    });

    menuList.classList.add("active");
    const menuListId = document.getElementById(`menuListMobile-${dataList}`);

    menuListId.style.display = "flex";
  });
});
