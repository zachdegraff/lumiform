@extends('layout/base')

@section("head.title", __("product/analysis.title"))
@section('meta-tags')

    <meta name="description" content="@lang('product/analysis.description')">
@endsection
@section("content")
    <section id="analysis__banner" class="py-16 bg-red-light">
        <div class="container mx-auto flex ">
            <div class="banner__left  w-full lg:w-7/12 mt-16">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('product/analysis.bannerTitle')
                </h1>
                @include('components.product.banner_form',['buttonText' => 'product/analysis.buttonText'])
            </div>
            <div class="analysis__banner--image   w-5/12 flex">
                <img src="{{asset('img/group-5045.png')}}" alt=""
                     srcset="{{asset('img/group-5045.png')}},{{asset('img/group-5045@2x.png')}} 2x" class="ml-auto">

            </div>

        </div>

    </section>
    <section class="py-10 lg:pt-32 lg:pb-24 with__border--bottom" id="analysis">
        <div class="container mx-auto md:flex-no-wrap md:flex-row-reverse flex-wrap flex justify-between items-center">
            <div class="flex mb-12 flex-row-reverse justify-between mb-16">
                <div class="digitise__item--text w-full sm:w-1/2 lg:w-4/12  flex flex-col justify-center">
                    <h3 class="text-center sm:text-left lg:text-50 font-bold font-cocogoose uppercase mb-5 text-primary">
                        @lang('All quality and safety results <span class="text-purple">in one system</span>')
                    </h3>
                    <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din mb-5 sm:mb-0">
                        @lang('View the results of all inspections and issues in the Lumiform desktop app. Get full transparency about who conducted which inspection or resolved which issue, when and where.  ')
                    </p>

                </div>
                <div class="digitise__item--image   w-7/12">
                    <img class="mx-auto" src="{{asset('img/group-916.png')}}" alt=""
                         srcset="
                    {{asset('img/group-916.png')}},
                    {{asset('img/group-916@2x.png')}} 2x"
                    >
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="#"
               class="leading-none bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-17 lg:text-20 h-70  rounded-20 px-8 py-6"> @lang('Get Lumiform FREE')</a>
        </div>
    </section>
    <section class="py-10 lg:pt-32 lg:pb-24 with__border--bottom">
        <div class="container mx-auto custom-text-size">
            <h2 class="font-bold text-center font-cocogoose text-green text-30 lg:text-50 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('Customise all reports easily <span class="text-primary">to meet your specific needs</span>')
            </h2>
            @include('components.product.image_text_horizontal',
                [
                'heading' => 'Define header page',
                'headingColor' => 'gold',
                'text' => 'In the form builder, define which information should appear on your header page in the customised audit report. Use both fields, which are automatically filled out by the system (date and inspector) and individual queries, such as comment fields or second inspector..',
                'image' => 'group-1328.svg',
                ]
                )
            @include('components.product.image_text_horizontal',
                [
                'heading' => 'Create <span class="text-green">fully customised report templates</span>',
                'headingColor' => 'primary',
                'text' => '
                        Create your audit report, including the company logo. Select whether your report should display the location, scores, checklist description, instruction fields and unfilled checks.
                        <br>
                        <br>
                        Define the final result, depending on the score, for example, results between 90% and 100% are called ‘Excellent’',
                'image' => 'group-1743.svg',
                ]
                )
            @include('components.product.image_text_horizontal',
               [
               'heading' => 'Create and secure reports<span class="text-light-blue"> securely and automatically </span>',
               'headingColor' => 'primary',
               'text' => 'Download all automatically generated audit reports in your own design, as a PDF file. Retrieve all safely stored reports at any time.. Use both fields, which are automatically filled out by the system (date and inspector) and individual queries, such as comment fields or second inspector..',
               'image' => 'group-1744.svg',
               ]
               )

            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section class="py-10 lg:pt-32 lg:pb-24 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-light-blue text-30 lg:text-50 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('All issues compliantly documented <span class="text-primary"> without any hassle</span>')
            </h2>
            <div class="flex justify-around md:flex-no-wrap flex-wrap">
                <div class="md:w-5/12 lg:w-4/12 text-center md:text-left mb-10 md:mb-0">
                    <div class="flex items-center   md:h-300 lg:h-420 mb-20">
                        <img src="{{asset('img/group-2728.png')}}" alt=""
                             srcset="{{asset('img/group-2728.png')}},
                                     {{asset('img/group-2728@2x.png')}} 2x"
                        >
                    </div>

                    <h3 class="font-cocogoose font-black text-purple uppercase text-20 md:text-38 mb-4">
                        @lang('Save time with the <br> issue overview')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-24">
                        @lang('Define that in PDF reports, all issues found in the inspection and audit are displayed separately, above all other results. Use this functionality to identify failed checks, and resolve issues directly, and more quickly.')
                    </p>
                </div>
                <div class="md:w-5/12 lg:w-4/12 text-center md:text-left mb-10 md:mb-0">
                    <div class="flex items-center justify-center   md:h-300 lg:h-420 mb-20">
                        <img src="{{asset('img/group-2727.png')}}" alt=""
                             srcset="{{asset('img/group-2727.png')}},
                                     {{asset('img/group-2727@2x.png')}} 2x"
                        >
                    </div>

                    <h3 class="font-cocogoose font-black text-red uppercase text-20 md:text-38 mb-4">
                        @lang('Document <br> troubleshooting')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-24">
                        @lang('All solution actions are automatically recorded and attached to the audit report, which leads to complete and compliant documentation.')
                    </p>
                </div>
            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section class="py-10 lg:pt-32 lg:pb-24 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-gold text-30 lg:text-40 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('Detailed analyses and reporting')
            </h2>
            <div class="flex justify-around items-center md:flex-no-wrap flex-wrap mb-10 lg:mb-32">

                <div class="w-full md:w-6/12 lg:w-4/12 mb-10 md:mb-0 text-center md:text-left">
                    <h3 class="font-cocogoose font-black text-light-blue uppercase text-20 md:text-38 mb-4">
                        @lang('in-depth Analysis <span class="text-primary">of all collected data</span>')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-24">
                        @lang('Evaluate all collected data by filtering it according to different criteria, such as location, inspector, checklist, etc. Quickly identify areas that need your attention, in order to improve your quality and safety processes continuously.')
                    </p>
                </div>
                <div class="w-full md:w-4/12 lg:w-5/12">
                    <img src="{{asset('img/group-2750.png')}}" alt=""
                         srcset="{{asset('img/group-2750.png')}},
                                 {{asset('img/group-2750@2x.png')}} 2x"
                         class="mx-auto md:mx-0">
                </div>

            </div>
            <div class="flex justify-around items-center md:flex-no-wrap flex-wrap mb-10 lg:mb-32">

                <div class="w-full md:w-6/12 lg:w-4/12 mb-10 md:mb-0 text-center md:text-left">
                    <h3 class="font-cocogoose font-black text-purple uppercase text-20 md:text-38 mb-4">
                        @lang('Filter performance stats')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-24">
                        @lang('Analyse the number of inspections, negative responses, overdue inspections, incidents raised and resolved – the average score is broken down into the six criteria seen here.')
                    </p>
                </div>
                <div class="w-full md:w-4/12 lg:w-5/12 ">
                    <div class="feature__items flex flex-wrap ">
                        @include('components.product.icons_raw',[
                            'text' => 'time',
                            'image' => 'time-icon.svg',
                             'class' => 'w-1/3 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'site',
                            'image' => 'site-icon.svg',
                             'class' => 'w-1/3 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'checklist',
                            'image' => 'checklist-icon.svg',
                             'class' => 'w-1/3 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'check',
                            'image' => 'check-icon.svg',
                             'class' => 'w-1/3',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'users & groups',
                            'image' => 'group-icon.svg',
                             'class' => 'w-1/3',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'categories',
                            'image' => 'category-icon.svg',
                             'class' => 'w-1/3',
                            ])

                    </div>
                </div>

            </div>
            <div class="flex justify-around items-center md:flex-no-wrap flex-wrap mb-10 lg:mb-32">

                <div class="w-full md:w-6/12 lg:w-4/12 mb-10 md:mb-0 text-center md:text-left">
                    <h3 class="font-cocogoose font-black text-gold uppercase text-20 md:text-38 mb-4">
                        @lang('Weekly and monthly reporting')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-24">
                        @lang('Get automatic weekly and monthly updates of what has been happening in your organisation.')
                    </p>
                </div>
                <div class="w-full md:w-4/12 lg:w-5/12">
                    <img src="{{asset('img/group-2750.png')}}" alt=""
                         srcset="{{asset('img/group-2771.png')}},
                                 {{asset('img/group-2771@2x.png')}} 2x"
                         class="mx-auto ">
                </div>

            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    @include('components.product.bottom_form',[
   'heading' =>'Improve your quality and safety efforts with meaningful analyses',
   'sectionBg' =>'orange-light',
   'buttonBg' =>'orange',
   'image' =>'img/group-1919.svg',
   ])

@endsection
