const botMenus = document.querySelectorAll(".bot-menu a.parent-menu");
var menuList = document.getElementById("menuList");
const menuItems = document.querySelectorAll(".menu-items");

botMenus.forEach((botMenu) => {
  const dataList = botMenu.getAttribute("data-list");

  botMenu.addEventListener("click", function (e) {
    e.preventDefault();
    if (!dataList) return;

    botMenus.forEach((botMenu) => {
      botMenu.classList.remove("active");
    });

    let isAlreadyActive = menuList.classList.contains("show");
    let activeMenuItems = null;

    menuItems.forEach((menuItem) => {
      if (menuItem.style.display === "flex") {
        activeMenuItems = menuItem;
      }
    });

    const idActiveMenuItem = activeMenuItems
      ? activeMenuItems.getAttribute("id")
      : null;

    if (isAlreadyActive && idActiveMenuItem === `menuList-${dataList}`) {
      botMenu.classList.remove("active");
      menuList.style.height = "0";
      menuList.style.opacity = "0";
      setTimeout(() => {
        menuList.classList.remove("show");
        menuItems.forEach((menuItem) => {
          menuItem.style.display = "none";
        });
      }, 300);
      return;
    }

    menuItems.forEach((menuItem) => {
      menuItem.style.display = "none";
    });

    botMenu.classList.add("active");
    const menuListId = document.getElementById(`menuList-${dataList}`);

    menuList.style.height = "0";
    menuList.style.opacity = "0";
    menuList.classList.remove("show");
    setTimeout(() => {
      menuListId.style.display = "flex";
      menuList.style.height = `${menuList.scrollHeight}px`;
      menuList.style.opacity = "1";
      menuList.classList.add("show");
    }, 100);
  });

  window.addEventListener("click", function (e) {
    if (!menuList.classList.contains("show")) return;

    if (!e.target.closest(".bot-menu") && !e.target.closest("#menuList")) {
      botMenus.forEach((botMenu) => {
        botMenu.classList.remove("active");
      });

      menuList.style.height = "0";
      menuList.style.opacity = "0";
      setTimeout(() => {
        menuList.classList.remove("show");
        menuItems.forEach((menuItem) => {
          menuItem.style.display = "none";
        });
      }, 300);
    }
  });
});
