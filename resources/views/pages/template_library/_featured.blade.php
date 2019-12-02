@extends('layout/base')

@section("head.title", __("Template Library"))

@section("content")
<h1 class="page-title">@lang('Template Library')</h1>

<div class="sidebar-wrapper">
    <aside class="sidebar template-library-categories">
        @include('pages/template_library/sidebar', ['categories' => $categories])
    </aside>

    <section>
        @foreach($categories as $category)
            <h2 class="subtitle"><a href="@urlTo("templateLibrary.index", ["categories" => $category->slug])">{{ $category->title }}</a></h2>
            <ul class="templates">
            @foreach($category->featuredTemplates()->take(3)->get() as $template)
                @include('pages/template_library/template_item', ["template" => $template])
            @endforeach
            </ul>
        @endforeach
    </section>
</div>

@endsection
