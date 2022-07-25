const toggle = document.querySelector(".nav-toggle");
const menu = document.querySelector(".nav-menu");
const items = document.querySelectorAll(".nav-item");
var url = window.location.pathname;
var urlRegExp = new RegExp(url.replace(/\/$/,"") + "$");
// create regexp to match current url pathname and remove trailing slash if present
// as it could collide with the link in navigation in case trailing slash wasn't present there

document.addEventListener("click", closeSubmenu, false);
document.addEventListener("mouseover", closeSubmenu, false);
window.addEventListener("resize", function() {
    if (menu.querySelector(".dropdown.focused")) {
        menu.querySelector(".dropdown.focused").classList.remove("focused");
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
$(".nav-menu a").each(function(){
    if (urlRegExp.test(this.href.replace(/\/$/,""))) {
        $(this).closest(".nav-item").addClass("active");
    }
});

function toggleMenu() {
    if (menu.classList.contains("focused")) {
        menu.classList.remove("focused");
        toggle.querySelector("a").innerHTML = "<i class='fa-solid fa-bars'></i>";
    } else {
        menu.classList.add("focused");
        toggle.querySelector("a").innerHTML = "<i class='fa-solid fa-times'></i>";
    }
}
function toggleItem(e) {
    if (
        e.type != "mouseover" ||
        (e.type == "mouseover" && screen.width >=1024)
    ) {
        if (this.classList.contains("focused")) {
            this.classList.remove("focused");
        } else if (menu.querySelector(".dropdown.focused")) {
            menu.querySelector(".dropdown.focused").classList.remove("focused");
            this.classList.add("focused");
        } else {
            this.classList.add("focused");
        }
    }
}
function closeSubmenu(e) {
    if (menu.querySelector(".dropdown.focused")) {
        let isClickInside = menu
            .querySelector(".dropdown.focused")
            .contains(e.target);

        if (!isClickInside && menu.querySelector(".dropdown.focused")) {
            menu.querySelector(".dropdown.focused").classList.remove("focused");
        }
    }
}
function smoothScrollTo(pos, time) {
    var currentPos = window.pageYOffset;
    var start = null;
    if(time == null) time = 500;
    pos = +pos, time = +time;
    window.requestAnimationFrame(function step(currentTime) {
        start = !start ? currentTime : start;
        var progress = currentTime - start;
        if (currentPos < pos) {
            window.scrollTo(0, ((pos - currentPos) * progress / time) + currentPos);
        } else {
            window.scrollTo(0, currentPos - ((currentPos - pos) * progress / time));
        }
        if (progress < time) {
            window.requestAnimationFrame(step);
        } else {
            window.scrollTo(0, pos);
        }
    });
}