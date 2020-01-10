@extends('layout/base')

@section("head.title", $template->title . ' - ' . __("Template Library"))

@section("content")
    <div class="sidebar-wrapper">
        <div class="container mx-auto">

            <h1 class="page-title text-center text-70 font-cocogoose font-bold leading-snug text-primary uppercase tracking-normal lg:pb-24 lg:pt-26 py-16">
                @lang('Lumiform Template Library')
            </h1>
            <div class="flex justify-between lg:pb-32 pb-8">
                <aside class="sidebar template-library-categories">
                    @include('pages/template_library/sidebar', ['categories' => $categories])
                </aside>
                <div class="template__content template-page">
                    <div class="back__section lg:py-6 py-3">
                        <a href="javascript:void(0)"
                           class="back__btn text-20 font-cocogoose font-bold uppercase tracking-large">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40.5" height="16.994"
                                 viewBox="0 0 40.5 16.994"
                                 class="mr-5">
                                <g id="Group_585" data-name="Group 585" transform="translate(-411 0.572)">
                                    <path id="Path_114" data-name="Path 114" d="M0,0H37"
                                          transform="translate(412.5 7.926)"
                                          fill="none" stroke="#aaaaaa" stroke-linecap="round" stroke-width="3"/>
                                    <path id="Path_113" data-name="Path 113" d="M856.116,56l6.051,6.378-6.051,6.374"
                                          transform="translate(-412.166 -54.451)" fill="none" stroke="#aaaaaa"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                </g>
                            </svg>
                            @lang('back')
                        </a>
                    </div>
                    @if ($template->image)
                        {{--<img src="@urlToImage($template->image)" />--}}
                        <div class="template__img lg:mb-16 mb-5">
                            <img src="{{asset('img').'/'.$template->image}}"/>
                        </div>
                    @endif
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="uppercase font-cocogoose font-bold text-50 text-red tracking-heading leading-snug ">{{ $template->title }}</h1>
                        <a href=""
                           class="base__button font-extrabold bg-red text-white uppercase font-cocogoose text-20 h-70 px-8 rounded-20 items-center flex">
                            @lang('Use template')
                        </a>
                    </div>
                    <p class="font-din font-light tracking-text leading-snug text-secondary text-30">
                        {!! __($template->long_description) !!}
                    </p>
                    {{--@if (isset($template->form->items))
                        @include('components/template_preview/preview', [ 'template' => $template ])
                    @endif--}}
                    <div class="form__image w-full mt-20">
                        <img src="{{asset('img').'/'.$template->image}}" alt="" class="w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('.back__btn').addEventListener('click', function () {
            window.history.back();
        })
    </script>
@endsection
