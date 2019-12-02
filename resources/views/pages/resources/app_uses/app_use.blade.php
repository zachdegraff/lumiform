@extends('layout/base')

@section("head.title", $appUse->title . ' - ' . __("App Uses"))

@section("content")

<div class="sidebar-wrapper app-use-page">
    <aside class="sidebar">
        <ul class="related-templates">
        @foreach ($appUse->templates as $template)
            <li><a href="@urlTo("templateLibrary.template", ["templateSlug" => $template->slug, "templateId" => $template->id])">{{ $template->title }}</a></li>
        @endforeach
        </ul>
    </aside>

    <section>
        <div class="hero"
            @if ($appUse->image)
                style="background-image: url(@urlToImage($appUse->image));"
            @endif
        >
            <h1>{{ $appUse->title }}</h1>
        </div>

        {!! $appUse->long_description !!}

        <ul class="related-templates-extended">
        @foreach ($appUse->templates as $template)
            <li>
                <h3>{{ $template->title }}</h3>
                <p>{{ $template->short_description }}</p>
                <a href="@urlTo("templateLibrary.template", ["templateSlug" => $template->slug, "templateId" => $template->id])">
                    {{ __('Download template') }}
                </a>
            </li>
        @endforeach
        </ul>
    </section>
</div>

@endsection
