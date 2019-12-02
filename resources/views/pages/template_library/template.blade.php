@extends('layout/base')

@section("head.title", $template->title . ' - ' . __("Template Library"))

@section("content")

@if ($template->image)
    <img src="@urlToImage($template->image)" />
@endif

<h1>{{ $template->title }}</h1>

{!! $template->long_description !!}

@if (isset($template->form->items))
    @include('components/template_preview/preview', [ 'template' => $template ])
@endif

@endsection
