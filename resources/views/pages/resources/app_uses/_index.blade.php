@extends('layout/base')

@section("head.title", __("App Uses"))

@section("content")
    <h1 class="page-title">{{ __('App Uses') }}</h1>

    <ul class="app-uses">
    @foreach($appUses as $appUse)
        @include('pages/resources/app_uses/app_use_item', ["appUse" => $appUse])
    @endforeach
    </ul>
@endsection
