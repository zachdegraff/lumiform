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
</script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
