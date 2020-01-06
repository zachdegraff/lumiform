<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("head.title")</title>
    @yield('meta-tags')
    {{-- <link rel="stylesheet" type="text/css" href="/theme.css">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/icons/favicon.png')}}"/>

    @if (app()->environment() !== 'production')
        <meta name="robots" content="noindex, nofollow">
    @endif
</head>
<body>
<header class="w-full h-20 xxl:h-24 flex items-center z-50 bg-white-95">
    @include("layout/header")
</header>
<div class="content wrapper">
    @yield("content")
</div>
@include('components.auth.login')
@include('components.auth.signup')
<footer class="pt-16">
    @include("layout/footer")
</footer>
<script>

    let hamburger = document.querySelector('#nav-icon3');
    let menu = document.querySelector('.menu__items');
    hamburger.addEventListener('click',function () {
        this.classList.contains('open') ? this.classList.remove('open') : this.classList.add('open')
        menu.classList.contains('open') ? menu.classList.remove('open') : menu.classList.add('open')
    })
    function openMenu(el) {
        let items = document.querySelectorAll('.menu__item')

        if (el.classList.contains('active')) {
            el.classList.remove('active')
        } else {
            items.forEach(function (item) {
                item.classList.remove("active");
            });
            el.classList.add('active')
        }
    }

    function showChild(event, element) {
        let items = document.querySelectorAll('.sub__menu--item')
        let subItems = document.querySelectorAll('.nav__subitem--2')
        console.log(event)
        event.stopPropagation();
        let dataId = element.dataset.id
        let subItem = document.getElementById(dataId)
        if (element.classList.contains('active')) {
            element.classList.remove('active')
            subItem.classList.remove('active')
        } else {
            items.forEach(function (item) {
                item.classList.remove("active");
            });
            subItems.forEach(function (sub) {
                sub.classList.remove("active");
            });
            element.classList.add('active')

            subItem.classList.add('active')
        }
    }

    /* Start Login/Register logic*/
    let regModal = document.getElementById("signUp");
    let regContent = document.querySelector("#signUp .modal-content");
    let regBtn = document.querySelector(".nav__register");
    let loginModal = document.getElementById("logIn");
    let loginContent = document.querySelector("#logIn .modal-content");
    let loginBtn = document.querySelector(".nav__login");
    let signUp = document.querySelector(".sign-up");
    let signIn = document.querySelector(".sign-in");

    function openModal(target, content) {
        content.classList.add('modal-opened');
        target.style.display = "block";
    }

    regBtn.onclick = function () {
        openModal(regModal, regContent)
    };
    loginBtn.onclick = function () {
        openModal(loginModal, loginContent)
    };

    function hideModal(target, content) {
        content.classList.remove('modal-opened');
        target.style.display = "none";
    }

    signUp.onclick = function () {
        hideModal(loginModal, loginContent);
        openModal(regModal, regContent)
    };
    signIn.onclick = function () {
        openModal(loginModal, loginContent);
        hideModal(regModal, regContent)
    };
    window.onclick = function (event) {

        if (event.target == regModal) {
            hideModal(regModal, regContent)
        } else if (event.target == loginModal) {
            hideModal(loginModal, loginContent)
        }
    }
    /* End Login/Register logic*/
    let filters = [];
    let sections = document.querySelectorAll('.category__section');
    document.querySelectorAll('.filter__item').forEach(function (filter) {
        filter.addEventListener('click', function () {

            this.classList.contains('active') ? this.classList.remove('active') : this.classList.add('active')
            let cat = this.dataset.category;
            if (cat) {
                if (filters.includes(cat)) {
                    let index = filters.indexOf(cat);
                    filters.splice(index, 1);
                    if (!filter.length){
                        sections.forEach(function (section) {
                            section.style.display = 'block'
                        });
                    } else{
                        sections.forEach(function (section) {
                            section.style.display = 'block'
                        });
                        let item = document.getElementById(cat);
                        item.style.display = 'none'
                    }

                } else {
                    filters.push(cat);
                    sections.forEach(function (section) {
                        section.style.display = 'none'
                    });
                    filters.forEach(function (filter) {
                        document.getElementById(filter).style.display = 'block'
                    })

                }


            }


        })
    });
</script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
