@extends('layout/base')

@section("head.title", __("Template Library"))

@section("content")


    <div class="sidebar-wrapper">
        <div class="container mx-auto">
            <h1 class="page-title text-center text-70 font-cocogoose font-bold leading-snug text-primary uppercase tracking-normal lg:pb-24 lg:pt-26 py-12">
                @lang('Lumiform Template Library')
            </h1>
            <div class="flex justify-between relative">
                <aside class="sidebar template-library-categories">
                    @include('pages/template_library/sidebar', ['categories' => $categories])
                </aside>
                <section class="template__content">
                    <div id="is_industry" class="category__section" style="display: block">
                        @php $i = 1 @endphp
                        @foreach($categories->where('is_industry',1) as $category)
                            <div class="template__content--item
                                                    @if($i % 4 == 0) color-gold @elseif($i % 3 == 0) color-blue @elseif($i % 2 == 0 ) color-green @elseif($i % 5 == 0) color-purple @endif
                                    ">
                                <h2 class="subtitle text-50 font-cocogoose tracking-heading text-left uppercase text-primary font-bold mb-4">
                                    <a
                                            href='@urlTo("templateLibrary.index", ["categories" => $category->slug])'
                                            class="flex items-center sm:justify-start justify-center">
                                        {{ $category->title }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40.5" height="16.994"
                                             viewBox="0 0 40.5 16.994" class="ml-5">
                                            <g id="Group_585" data-name="Group 585" transform="translate(-411 0.572)">
                                                <path id="Path_114" data-name="Path 114" d="M0,0H37"
                                                      transform="translate(412.5 7.926)" fill="none" stroke="#4d4d4d"
                                                      stroke-linecap="round" stroke-width="3"/>
                                                <path id="Path_113" data-name="Path 113"
                                                      d="M856.116,56l6.051,6.378-6.051,6.374"
                                                      transform="translate(-412.166 -54.451)" fill="none"
                                                      stroke="#4d4d4d"
                                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                            </g>
                                        </svg>
                                    </a>
                                </h2>
                                <ul class="templates mb-10 flex sm:flex-no-wrap flex-wrap justify-between">
                                    {{--@foreach($category->featuredTemplates()->take(3)->get() as $template)
                                        @include('pages/template_library/template_item', ["template" => $template])
                                    @endforeach--}}
                                    @include('pages/template_library/template_item')
                                </ul>
                            </div>
                            @php $i++ @endphp
                        @endforeach
                    </div>
                    <div id="is_use_case" class="category__section" style="display: block">
                        <div class="featured__items template__content--item color-purple">
                            <h2 class="subtitle text-50 font-cocogoose tracking-heading text-left uppercase text-primary font-bold mb-4">
                                <a
                                        href='@urlTo("templateLibrary.index", ["categories" => $category->slug])'
                                        class="flex items-center sm:justify-start justify-center ">
                                    @lang('Featured')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40.5" height="16.994"
                                         viewBox="0 0 40.5 16.994" class="ml-5">
                                        <g id="Group_585" data-name="Group 585" transform="translate(-411 0.572)">
                                            <path id="Path_114" data-name="Path 114" d="M0,0H37"
                                                  transform="translate(412.5 7.926)" fill="none" stroke="#4d4d4d"
                                                  stroke-linecap="round" stroke-width="3"/>
                                            <path id="Path_113" data-name="Path 113"
                                                  d="M856.116,56l6.051,6.378-6.051,6.374"
                                                  transform="translate(-412.166 -54.451)" fill="none" stroke="#4d4d4d"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                        </g>
                                    </svg>
                                </a>
                            </h2>
                            <ul class="0 flex justify-between flex-wrap mb-5">
                                @foreach($categories->where('is_use_case',1) as $category)
                                    @include('pages/template_library/category_block',['category' => $category])
                                @endforeach
                            </ul>
                        </div>
                        @php $i = 1 @endphp
                        @foreach($categories->where('is_use_case',1) as $category)
                            <div class="template__content--item
                                                    @if($i % 4 == 0) color-gold @elseif($i % 3 == 0) color-blue @elseif($i % 2 == 0 ) color-green @elseif($i % 5 == 0) color-purple @endif
                                    ">
                                <h2 class="subtitle text-50 font-cocogoose tracking-heading text-left uppercase text-primary font-bold mb-4">
                                    <a
                                            href='@urlTo("templateLibrary.index", ["categories" => $category->slug])'
                                            class="flex items-center sm:justify-start justify-center ">
                                        {{ $category->title }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40.5" height="16.994"
                                             viewBox="0 0 40.5 16.994" class="ml-5">
                                            <g id="Group_585" data-name="Group 585" transform="translate(-411 0.572)">
                                                <path id="Path_114" data-name="Path 114" d="M0,0H37"
                                                      transform="translate(412.5 7.926)" fill="none" stroke="#4d4d4d"
                                                      stroke-linecap="round" stroke-width="3"/>
                                                <path id="Path_113" data-name="Path 113"
                                                      d="M856.116,56l6.051,6.378-6.051,6.374"
                                                      transform="translate(-412.166 -54.451)" fill="none"
                                                      stroke="#4d4d4d"
                                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                            </g>
                                        </svg>
                                    </a>
                                </h2>
                                <ul class="templates mb-10 flex sm:flex-no-wrap flex-wrap justify-between">
                                    {{--@foreach($category->featuredTemplates()->take(3)->get() as $template)
                                        @include('pages/template_library/template_item', ["template" => $template])
                                    @endforeach--}}
                                    @include('pages/template_library/template_item')
                                </ul>
                            </div>
                            @php $i++ @endphp
                        @endforeach
                        @php $i = 1 @endphp
                    </div>
                    <div  class="category__section" style="display: block">
                    @foreach($categories->where('is_use_case',0)->where('is_industry',0) as $category)
                        <div class="template__content--item
                                                    @if($i % 4 == 0) color-gold @elseif($i % 3 == 0) color-blue @elseif($i % 2 == 0 ) color-green @elseif($i % 5 == 0) color-purple @endif
                                ">
                            <h2 class="subtitle text-40 font-cocogoose tracking-heading text-left uppercase text-primary font-bold mb-4">
                                <a
                                        href='@urlTo("templateLibrary.index", ["categories" => $category->slug])'
                                        class="flex items-center">
                                    {{ $category->title }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40.5" height="16.994"
                                         viewBox="0 0 40.5 16.994" class="ml-5">
                                        <g id="Group_585" data-name="Group 585" transform="translate(-411 0.572)">
                                            <path id="Path_114" data-name="Path 114" d="M0,0H37"
                                                  transform="translate(412.5 7.926)" fill="none" stroke="#4d4d4d"
                                                  stroke-linecap="round" stroke-width="3"/>
                                            <path id="Path_113" data-name="Path 113"
                                                  d="M856.116,56l6.051,6.378-6.051,6.374"
                                                  transform="translate(-412.166 -54.451)" fill="none" stroke="#4d4d4d"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                        </g>
                                    </svg>
                                </a>
                            </h2>
                            <ul class="templates mb-10 flex sm:flex-no-wrap flex-wrap justify-between">
                                {{--@foreach($category->featuredTemplates()->take(3)->get() as $template)
                                    @include('pages/template_library/template_item', ["template" => $template])
                                @endforeach--}}
                                @include('pages/template_library/template_item')
                            </ul>
                        </div>
                        @php $i++ @endphp
                    @endforeach
                </section>

            </div>
            </div>
        </div>
    </div>

@endsection
