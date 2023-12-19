let iSecond = document.querySelector('.search-box .search-submit');

document.querySelector('#elastic').oninput = function () {
    let val = this.value.trim().toLowerCase();
    let elasticItems = document.querySelectorAll('.shop-item');
    if (val !== '') {
        elasticItems.forEach(function (elem) {
            if (elem.innerText.toLowerCase().search(val) === -1) {
                elem.classList.add('hide-card');
            }else{
                elem.classList.remove('hide-card');
            }
        });
    }else{
        elasticItems.forEach(function (elem) {
            elem.classList.remove('hide-card');
        });
    }
};

iSecond.addEventListener("click", function () {
    document.getElementById('elastic').value = "";
    let elasticItems = document.querySelectorAll('.shop-item');
    elasticItems.forEach(function (elem) {
        elem.classList.remove('hide-card');
    })
});