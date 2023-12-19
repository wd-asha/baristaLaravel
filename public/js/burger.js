let burger = document.querySelector("#burger");
let navBurger = document.querySelector("#navBurger");
let navPanel = document.querySelector(".nav-panel");
let navItems = document.querySelectorAll(".nav-item");
let interval2 = 300;

burger.addEventListener("click", function () {
    navPanel.classList.add("showPanel");
    window.scrollTo(pageXOffset, 0);
    navItems.forEach(function (item) {
        setTimeout(function () {
            item.classList.remove("leftPos");
        }, Number(interval2));
        interval2 = interval2 + 60;
    })
});

navBurger.addEventListener("click", function () {
    navPanel.classList.remove("showPanel");
    navItems.forEach(function (item) {
        item.classList.add("leftPos");
        interval2 = 300;
    })
});