<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("head.title")</title>

    {{--<link rel="stylesheet" type="text/css" href="/theme.css">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    @if (app()->environment() !== 'production')
        <meta name="robots" content="noindex, nofollow">
    @endif
</head>
<body>
    <header class="h-32 flex items-center">
        @include("layout/header")
    </header>
    <section class="content wrapper">
        @yield("content")
    </section>
    <footer class="pt-16">
        @include("layout/footer")
    </footer>
</body>
</html>