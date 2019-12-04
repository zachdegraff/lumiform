const header = document.querySelector('header')
window.onscroll = function() {
    if (document.documentElement.scrollTop > 200){
        header.classList.add('fixed')
    }else{
        header.classList.remove('fixed')
    }
};
const tabElement = document.getElementsByClassName('header__item');
const tabContent = document.getElementsByClassName('content__item');
function removeClases(data){
    [].forEach.call(data, function(el) {
        el.classList.remove("active");
    });
}
document.onclick = function(event) {
    removeClases(tabElement)
    removeClases(tabContent)
    let target = event.target || event.srcElement;
    let index = target.dataset.index;
    target.classList.add('active');
    tabContent[index].classList.add('active');
};
