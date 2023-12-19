let filterPrice = document.querySelector("#filter-price");
let filterInput = document.querySelector("#filter-input");
let filterBtn = document.querySelector("#filter-btn");
let shopItems = document.querySelectorAll(".shop-item");

filterInput.addEventListener('input', function () {
    filterPrice.textContent = filterInput.value;
});

filterBtn.addEventListener('click', function () {

    shopItems.forEach(function (item) {
        let price = item.dataset.price;
        if(price >= filterInput.value) {
            item.classList.add("hide");
       }else{
            item.classList.remove("hide");
        }

    });
});
