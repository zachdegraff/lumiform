@extends('layout/base')

@section("head.title", __("Template Library"))

@section("content")
<div class="sidebar-wrapper">
    <aside class="sidebar template-library-categories">
    @include('pages/template_library/sidebar', ['categories' => $categories, 'search' => $search])
    </aside>

    <section>

        <h1 class="section-title">
            @if ($category)
                {{ $category->title }}@if ($search):@endif
            @endif

            @if ($search)
                &ldquo;{{ $search }}&rdquo;
            @endif
        </h1>

        <ul class="templates">
        @foreach($templates as $template)
            @include('pages/template_library/template_item', ["template" => $template])
        @endforeach
        </ul>

        {{ $templates->links() }}
    </section>
</div>

@endsection
