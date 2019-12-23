<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("head.title")</title>

    {{-- <link rel="stylesheet" type="text/css" href="/theme.css">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    @if (app()->environment() !== 'production')
        <meta name="robots" content="noindex, nofollow">
    @endif
</head>
<body>
<header class="w-full xl:h-20 xxl:h-32 flex items-center z-50 bg-white">
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
    function showChild(event,element) {
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

    function openModal(target,content){
        content.classList.add('modal-opened');
        target.style.display = "block";
    }
    regBtn.onclick = function () {openModal (regModal,regContent)};
    loginBtn.onclick = function () { openModal (loginModal,loginContent)};
    function hideModal(target,content){
        content.classList.remove('modal-opened');
        target.style.display = "none";
    }
    signUp.onclick = function (){
        hideModal(loginModal,loginContent);
        openModal (regModal,regContent)
    };
    signIn.onclick = function (){
        openModal (loginModal,loginContent);
        hideModal (regModal,regContent)
    };
    window.onclick = function (event) {

        if (event.target == regModal) {
            hideModal(regModal,regContent)
        }else if(event.target == loginModal) {
            hideModal(loginModal,loginContent)
        }
    }
    /* End Login/Register logic*/
</script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
