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
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
