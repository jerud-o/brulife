const toggle = document.querySelector(".nav-toggle");
const menu = document.querySelector(".nav-menu");
const items = document.querySelectorAll(".nav-item");

function toggleMenu() {
    if (menu.classList.contains("active")) {
        menu.classList.remove("active");
        toggle.querySelector("a").innerHTML = "<i class='fa-solid fa-bars'></i>";
    } else {
        menu.classList.add("active");
        toggle.querySelector("a").innerHTML = "<i class='fa-solid fa-times'></i>";
    }
}
function toggleItem(e) {
    if (
        e.type != "mouseover" ||
        (e.type == "mouseover" && screen.width >=1024)
    ) {
        if (this.classList.contains("active")) {
            this.classList.remove("active");
        } else if (menu.querySelector(".dropdown.active")) {
            menu.querySelector(".dropdown.active").classList.remove("active");
            this.classList.add("active");
        } else {
            this.classList.add("active");
        }
    }
}
function closeSubmenu(e) {
    if (menu.querySelector(".dropdown.active")) {
      let isClickInside = menu
        .querySelector(".dropdown.active")
        .contains(e.target);
   
      if (!isClickInside && menu.querySelector(".dropdown.active")) {
        menu.querySelector(".dropdown.active").classList.remove("active");
      }
    }
  }

document.addEventListener("click", closeSubmenu, false);
document.addEventListener("mouseover", closeSubmenu, false);
window.addEventListener("resize", function() {
    if (menu.querySelector(".dropdown.active")) {
        menu.querySelector(".dropdown.active").classList.remove("active");
    }
}, false);
toggle.addEventListener("click", toggleMenu, false);
for (let item of items) {
    if (item.querySelector(".dropdown-menu")) {
        item.addEventListener("click", toggleItem, false);
        item.addEventListener("mouseover", toggleItem, false);
        item.addEventListener("keypress", toggleItem, false);
    }
}