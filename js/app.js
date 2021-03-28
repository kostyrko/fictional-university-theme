window.addEventListener("DOMContentLoaded", (event) => {
  const menu = document.querySelector(".main-navigation");
  const menuButton = document.querySelector(".site-header__menu-trigger");
  menuButton.addEventListener("click", () => {
    if (!menu.classList.contains("main-navigation--active")) {
      menu.classList.add("main-navigation--active");
      menuButton.classList.add("fa-window-close");
    } else {
      menu.classList.remove("main-navigation--active");
      menuButton.classList.remove("fa-window-close");
    }
  });
});
