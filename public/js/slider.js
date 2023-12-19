let slider = document.querySelector("#slider");
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
let intervalID;

function playSlider() {
    setTimeout(function () {
            bull2.classList.add("bull-active");
            bull1.classList.remove("bull-active");
            bull3.classList.remove("bull-active");
            bull4.classList.remove("bull-active");
            bull5.classList.remove("bull-active");
            slide1.classList.remove("showSlide");
            slide1.classList.add("hideSlide");
            slide2.classList.remove("hideSlide");
            slide2.classList.add("showSlide");
        }, 7000,
        setTimeout(function () {
                bull3.classList.add("bull-active");
                bull1.classList.remove("bull-active");
                bull2.classList.remove("bull-active");
                bull4.classList.remove("bull-active");
                bull5.classList.remove("bull-active");
                slide2.classList.remove("showSlide");
                slide2.classList.add("hideSlide");
                slide3.classList.remove("hideSlide");
                slide3.classList.add("showSlide");
            }, 14000,
            setTimeout(function () {
                    bull4.classList.add("bull-active");
                    bull1.classList.remove("bull-active");
                    bull2.classList.remove("bull-active");
                    bull3.classList.remove("bull-active");
                    bull5.classList.remove("bull-active");
                    slide3.classList.remove("showSlide");
                    slide3.classList.add("hideSlide");
                    slide4.classList.remove("hideSlide");
                    slide4.classList.add("showSlide");
                }, 21000,
                setTimeout(function () {
                        bull5.classList.add("bull-active");
                        bull1.classList.remove("bull-active");
                        bull2.classList.remove("bull-active");
                        bull3.classList.remove("bull-active");
                        bull4.classList.remove("bull-active");
                        slide4.classList.remove("showSlide");
                        slide4.classList.add("hideSlide");
                        slide5.classList.remove("hideSlide");
                        slide5.classList.add("showSlide");
                    }, 28000,
                    setTimeout(function () {
                            bull1.classList.add("bull-active");
                            bull2.classList.remove("bull-active");
                            bull3.classList.remove("bull-active");
                            bull4.classList.remove("bull-active");
                            bull5.classList.remove("bull-active");
                            slide5.classList.remove("showSlide");
                            slide5.classList.add("hideSlide");
                            slide1.classList.remove("hideSlide");
                            slide1.classList.add("showSlide");
                        }, 35000
                    ))))
    );
}

playSlider();

/*intervalID = setInterval(function() {
    playSlider();
}, 35000);*/

bulls.forEach(function (item) {
    item.addEventListener("click", function () {
        clearInterval(intervalID);
        if (item.dataset.index === "0") {
            slide1.classList.remove("hideSlide");
            slide1.classList.add("showSlide");
            slide2.classList.remove("showSlide");
            slide2.classList.add("hideSlide");
            slide3.classList.remove("showSlide");
            slide3.classList.add("hideSlide");
            slide4.classList.remove("showSlide");
            slide4.classList.add("hideSlide");
            slide5.classList.remove("showSlide");
            slide5.classList.add("hideSlide");
            bull1.classList.add("bull-active");
            bull2.classList.remove("bull-active");
            bull3.classList.remove("bull-active");
            bull4.classList.remove("bull-active");
            bull5.classList.remove("bull-active");
        }
        if (item.dataset.index === "1") {
            slide1.classList.remove("showSlide");
            slide1.classList.add("hideSlide");
            slide2.classList.remove("hideSlide");
            slide2.classList.add("showSlide");
            slide3.classList.remove("showSlide");
            slide3.classList.add("hideSlide");
            slide4.classList.remove("showSlide");
            slide4.classList.add("hideSlide");
            slide5.classList.remove("showSlide");
            slide5.classList.add("hideSlide");
            bull2.classList.add("bull-active");
            bull1.classList.remove("bull-active");
            bull3.classList.remove("bull-active");
            bull4.classList.remove("bull-active");
            bull5.classList.remove("bull-active");
        }
        if (item.dataset.index === "2") {
            slide1.classList.remove("showSlide");
            slide1.classList.add("hideSlide");
            slide2.classList.remove("showSlide");
            slide2.classList.add("hideSlide");
            slide3.classList.remove("hideSlide");
            slide3.classList.add("showSlide");
            slide4.classList.remove("showSlide");
            slide4.classList.add("hideSlide");
            slide5.classList.remove("showSlide");
            slide5.classList.add("hideSlide");
            bull3.classList.add("bull-active");
            bull2.classList.remove("bull-active");
            bull1.classList.remove("bull-active");
            bull4.classList.remove("bull-active");
            bull5.classList.remove("bull-active");
        }
        if (item.dataset.index === "3") {
            slide1.classList.remove("showSlide");
            slide1.classList.add("hideSlide");
            slide2.classList.remove("showSlide");
            slide2.classList.add("hideSlide");
            slide3.classList.remove("showSlide");
            slide3.classList.add("hideSlide");
            slide4.classList.remove("hideSlide");
            slide4.classList.add("showSlide");
            slide5.classList.remove("showSlide");
            slide5.classList.add("hideSlide");
            bull4.classList.add("bull-active");
            bull2.classList.remove("bull-active");
            bull3.classList.remove("bull-active");
            bull1.classList.remove("bull-active");
            bull5.classList.remove("bull-active");
        }
        if (item.dataset.index === "4") {
            slide1.classList.remove("showSlide");
            slide1.classList.add("hideSlide");
            slide2.classList.remove("showSlide");
            slide2.classList.add("hideSlide");
            slide3.classList.remove("showSlide");
            slide3.classList.add("hideSlide");
            slide4.classList.remove("showSlide");
            slide4.classList.add("hideSlide");
            slide5.classList.remove("hideSlide");
            slide5.classList.add("showSlide");
            bull5.classList.add("bull-active");
            bull2.classList.remove("bull-active");
            bull3.classList.remove("bull-active");
            bull4.classList.remove("bull-active");
            bull1.classList.remove("bull-active");
        }
    })
});
