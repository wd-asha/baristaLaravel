let slider = document.querySelector("#slider");
let slides = document.querySelectorAll(".slide");
let slide1 = document.querySelector(".slide1");
let slide2 = document.querySelector(".slide2");
let slide3 = document.querySelector(".slide3");
let slide4 = document.querySelector(".slide4");
let slide5 = document.querySelector(".slide5");
let bulls = document.querySelectorAll(".bull");
let bull1 = document.querySelector(".bull1");
let bull2 = document.querySelector(".bull2");
let bull3 = document.querySelector(".bull3");
let bull4 = document.querySelector(".bull4");
let bull5 = document.querySelector(".bull5");
let slide1Title = document.querySelector(".slide1-title");
let slide1Text = document.querySelector(".slide1-text");
let slide1Actions = document.querySelector(".slide1-actions");
let slide2Left = document.querySelector(".slide2-left");
let slide2Title = document.querySelector(".slide2-title");
let ingredientMaker = document.querySelector(".ingredient-maker");
let ingredientGrinder = document.querySelector(".ingredient-grinder");
let ingredientCaps = document.querySelector(".ingredient-caps");
let slide3Title = document.querySelector(".slide3-title");
let slide3Text = document.querySelector(".slide3-text");
let slide3Actions = document.querySelector(".slide3-actions");
let slide4Title = document.querySelector(".slide4-title");
let flavours = document.querySelector(".flavours");
let days = document.querySelector(".days");
let slide5Box1 = document.querySelector(".slide5-right-box1");
let slide5Box2 = document.querySelector(".slide5-right-box2");
let slide5Text = document.querySelector(".slide5-text");


function hideSliders() {
    slides.forEach(function (item) {
        item.classList.remove("showSlide");
        item.classList.add("hideSlide"); 
    });
}

function hideBulls() {
    bulls.forEach(function (item) {
        item.classList.remove("active-bull");
    });
}

function showSlide(slide) {
    slide.classList.add("showSlide");
    slide.classList.remove("hideSlide");
}

function activeBull(bull) {
    bull.classList.add("active-bull");
}

function Sliding(index) {
    hideSliders();
    hideBulls();
    if (index === 5) {
        showSlide(slide5);
        days.classList.add("days");
        slide5Box1.classList.add("startPos");
        slide5Box2.classList.add("startPos");
        slide5Text.classList.add("startPos");
        setTimeout(function() {
            days.classList.remove("startPos")}, 500),
            setTimeout(function() {
                slide5Box1.classList.remove("startPos")}, 600),
            setTimeout(function() {
                slide5Box2.classList.remove("startPos")}, 700),
            setTimeout(function () {
                slide5Text.classList.remove("startPos")}, 800);
        activeBull(bull5);
    }
    if (index === 4) {
        showSlide(slide4);
        slide4Title.classList.add("startPos");
        flavours.classList.add("startPos");
        setTimeout(function() {
            slide4Title.classList.remove("startPos")}, 500),
            setTimeout(function() {
                flavours.classList.remove("startPos")}, 600);
        activeBull(bull4);
    }
    if (index === 3) {
        showSlide(slide3);
        slide3Title.classList.add("startPos");
        slide3Text.classList.add("startPos");
        slide3Actions.classList.add("startPos");
        setTimeout(function() {
            slide3Title.classList.remove("startPos")}, 500),
            setTimeout(function() {
                slide3Text.classList.remove("startPos")}, 600),
            setTimeout(function() {
                slide3Actions.classList.remove("startPos")}, 700);
        activeBull(bull3);
    }
    if (index === 2) {
        showSlide(slide2);
        slide2Left.classList.add("startPos");
        slide2Title.classList.add("startPos");
        ingredientMaker.classList.add("startPos");
        ingredientGrinder.classList.add("startPos");
        ingredientCaps.classList.add("startPos");
        setTimeout(function() {
            slide2Left.classList.remove("startPos")}, 500),
            setTimeout(function() {
                slide2Title.classList.remove("startPos")}, 600),
                setTimeout(function() {
                    ingredientMaker.classList.remove("startPos")}, 700),
                    setTimeout(function () {
                        ingredientGrinder.classList.remove("startPos")}, 800),
                        setTimeout(function () {
                            ingredientCaps.classList.remove("startPos")}, 900);
        activeBull(bull2);
    }
    if (index === 1) {
        showSlide(slide1);
        slide1Title.classList.add("startPos");
        slide1Text.classList.add("startPos");
        slide1Actions.classList.add("startPos");
        setTimeout(function() {
            slide1Title.classList.remove("startPos")}, 500),
            setTimeout(function() {
                slide1Text.classList.remove("startPos")}, 600),
                setTimeout(function() {
                    slide1Actions.classList.remove("startPos")}, 700);
        activeBull(bull1);
    }
}

let count = 2;
let sliderID;
let interval = 5000;

function First() {
    bull1.classList.add("active-bull");
    setTimeout(function() {
        slide1Title.classList.remove("startPos")}, 500),
        setTimeout(function() {
            slide1Text.classList.remove("startPos")}, 600),
        setTimeout(function() {
            slide1Actions.classList.remove("startPos")}, 700);
}

First();

/* Click on Slider - stop sliding */
slider.addEventListener("click", function () {
    clearInterval(sliderID);
});

/* Start sliding */
sliderID = setInterval(function () {
        if(count > 5) {
            count = 1;
        }
        Sliding(count);
        count = count + 1;
    }, Number(interval));


/* Click on Bull - stop sliding and show Slide */
bulls.forEach(function (bull) {
    bull.addEventListener("click", function () {
        clearInterval(sliderID);
        hideSliders();
        hideBulls();
        activeBull(bull);
        index = bull.dataset.index;
        if(Number(index) === 1) {
            slide1Title.classList.add("startPos");
            slide1Text.classList.add("startPos");
            slide1Actions.classList.add("startPos");
            setTimeout(function() {
                slide1Title.classList.remove("startPos")}, 500),
                setTimeout(function() {
                    slide1Text.classList.remove("startPos")}, 600),
                setTimeout(function() {
                    slide1Actions.classList.remove("startPos")}, 700);
        }
        if(Number(index) === 2) {
            ingredientMaker.classList.add("startPos");
            ingredientGrinder.classList.add("startPos");
            ingredientCaps.classList.add("startPos");
            setTimeout(function() {
                slide2Left.classList.remove("startPos")}, 500),
                setTimeout(function() {
                    slide2Title.classList.remove("startPos")}, 600),
                setTimeout(function() {
                    ingredientMaker.classList.remove("startPos")}, 700),
                setTimeout(function () {
                    ingredientGrinder.classList.remove("startPos")}, 800),
                setTimeout(function () {
                    ingredientCaps.classList.remove("startPos")}, 900);
        }
        if(Number(index) === 3) {
            slide3Title.classList.add("startPos");
            slide3Text.classList.add("startPos");
            slide3Actions.classList.add("startPos");
            setTimeout(function() {
                slide3Title.classList.remove("startPos")}, 500),
                setTimeout(function() {
                    slide3Text.classList.remove("startPos")}, 600),
                setTimeout(function() {
                    slide3Actions.classList.remove("startPos")}, 700);
        }
        if(Number(index) === 4) {
            slide4Title.classList.add("startPos");
            flavours.classList.add("startPos");
            setTimeout(function() {
                slide4Title.classList.remove("startPos")}, 500),
                setTimeout(function() {
                    flavours.classList.remove("startPos")}, 600);
        }
        if(Number(index) === 4) {
            days.classList.add("days");
            slide5Box1.classList.add("startPos");
            slide5Box2.classList.add("startPos");
            slide5Text.classList.add("startPos");
            setTimeout(function() {
                days.classList.remove("startPos")}, 500),
                setTimeout(function() {
                    slide5Box1.classList.remove("startPos")}, 600),
                setTimeout(function() {
                    slide5Box2.classList.remove("startPos")}, 700),
                setTimeout(function () {
                    slide5Text.classList.remove("startPos")}, 800);
        }

        Sliding(Number(index));
    })
});