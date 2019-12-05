
    const header = document.querySelector('header')
    window.onscroll = function () {
        if (document.documentElement.scrollTop > 50) {
            header.classList.add('fixed')
        } else {
            header.classList.remove('fixed')
        }
    };




