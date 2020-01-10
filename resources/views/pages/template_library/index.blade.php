@extends('layout/base')

@section("head.title", __("Template Library"))

@section("content")
    <div class="sidebar-wrapper">
        <div class="container mx-auto">
            <h1 class="page-title text-center text-70 font-cocogoose font-bold leading-snug text-primary uppercase tracking-normal py-16 lg:pb-24 lg:pt-26">
                @lang('Lumiform Template Library')
            </h1>
            <div class="flex justify-between">
                <aside class="sidebar template-library-categories">
                    @include('pages/template_library/sidebar', ['categories' => $categories, 'search' => $search])
                </aside>

                <section class="template__content">

                    <h3 class="section-title font-cocogoose font-bold text-50 tracking-heading text-light-blue uppercase mb-5">
                        @if ($category)
                            @if ($search) <span
                                    style="color: #aaaaaa;">{{count($templates)}} @lang('results for') </span>
                            @else
                                {{ __($category->title) }}
                            @endif

                        @endif

                        @if ($search)
                            <span class="px-2" style="background-color: rgba(141, 95, 214, 0.1)">
                                 {{ $search }}
                            </span>
                        @endif
                    </h3>

                    <ul class="templates mb-10 flex justify-between sm:flex-no-wrap flex-wrap">
                        {{--@foreach($templates as $template)
                            @include('pages/template_library/template_item', ["template" => $template])
                        @endforeach--}}
                        @include('pages/template_library/template_item')
                    </ul>

                    {{ $templates->links() }}
                </section>
            </div>
        </div>
    </div>

@endsection
