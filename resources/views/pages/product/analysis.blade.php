@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="analysis__banner" class="py-10 lg:pt-32 lg:pb-24 bg-red-light relative">
        <div class="container mx-auto flex ">
            <div class="banner__left  w-full lg:w-2/3">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('Fully automated reports and in-depth analyses.')
                </h1>
                <div class="banner__submit">
                    <form action=""
                          class="mb-10 flex flex-col md:flex-row items-center md:justify-center lg:flex-none lg:justify-start">
                        <input type="email" class="w-full sm:w-360 pl-8 h-50 xxl:h-70 rounded-20"
                               placeholder="@lang('Enter e-mail address')">
                        <button class="font-extrabold w-215 mt-5 md:ml-10 md:mt-0  xxl:ml-12 bg-red text-white uppercase font-cocogoose text-17 lg:text-xl  h-50 xxl:h-70 px-8 rounded-20">@lang('TRY FOR FREE')</button>
                    </form>
                    <div class="banner__signin text-center lg:text-left">
                        <small class="banner__small-text">@lang('Already using Lumiform?') <a
                                    href=""> @lang('Sign in')</a>
                        </small>
                    </div>
                </div>
            </div>
            <div class="analysis__banner--image  absolute w-1/3 hidden lg:block">
                <img src="{{asset('img/group-1327.svg')}}" alt="">

            </div>

        </div>

    </section>
    <div class="background-grey"></div>
    <section class="py-10 lg:pt-32 lg:pb-24 with__border--bottom">
        <div class="container mx-auto md:flex-no-wrap md:flex-row-reverse flex-wrap flex justify-between items-center">

            <div class="w-full md:w-1/2 lg:w-4/12">
                <h3 class="font-bold font-cocogoose text-primary text-30 lg:text-40 uppercase tracking-heading mb-10">
                    @lang('All quality and safety results <span class="text-purple">in one system </span>')
                </h3>
                <p class="text-17 lg:text-30 font-din font-light tracking-text text-secondary">
                    @lang('View the results of all inspections and issues in the Lumiform desktop app. Get full transparency about who conducted which inspection or resolved which issue, when and where.  ')
                </p>
                <button class="button__base px-8 py-5 mt-10 md:mt-20 md:mx-0 mx-auto">@lang('Get Lumiform FREE')</button>

            </div>
            <div class="mx-auto md:w-1/2 lg:w-7/12 md:pr-5 lg:pr-0 mt-10 md:mt-0">
                <img src="{{asset('img/group-1916.svg')}}" alt="">
            </div>
        </div>

    </section>
    <section class="py-10 lg:pt-32 lg:pb-24 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-green text-30 lg:text-40 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('Customise all reports easily <span class="text-primary">to meet your specific needs</span>')
            </h2>
            <div class="flex justify-around items-center md:flex-no-wrap flex-wrap mb-10 lg:mb-20">

                <div class="w-full md:w-6/12 lg:w-4/12 mb-10 md:mb-0 text-center md:text-left">
                    <h3 class="font-cocogoose font-black text-gold uppercase text-20 md:text-30 mb-4">
                        @lang('Define header page')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-20">
                        @lang('In the form builder, define which information should appear on your header page in the customised audit report. Use both fields, which are automatically filled out by the system (date and inspector) and individual queries, such as comment fields or second inspector.')
                    </p>
                </div>
                <div class="w-full md:w-4/12 lg:w-5/12">
                    <img src="{{asset('img/group-1328.svg')}}" alt="" class="mx-auto md:mx-0">
                </div>

            </div>
            <div class="flex justify-around items-center md:flex-no-wrap flex-wrap mb-10">

                <div class="w-full md:w-6/12 lg:w-4/12 mb-10 md:mb-0 text-center md:text-left">
                    <h3 class="font-cocogoose font-black text-green uppercase text-20 md:text-30 mb-4">
                        @lang('Create fully customised report templates')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-20">
                        @lang('
                        Create your audit report, including the company logo. Select whether your report should display the location, scores, checklist description, instruction fields and unfilled checks.
                        <br>
                        <br>
                        Define the final result, depending on the score, for example, results between 90% and 100% are called ‘Excellent’.
                        ')
                    </p>
                </div>
                <div class="w-full md:w-4/12 lg:w-5/12">
                    <img src="{{asset('img/group-1743.svg')}}" alt="" class="mx-auto md:mx-0">
                </div>

            </div>
            <div class="flex justify-around items-center md:flex-no-wrap flex-wrap mb-10 lg:mb-20">

                <div class="w-full md:w-6/12 lg:w-4/12 mb-10 md:mb-0 text-center md:text-left">
                    <h3 class="font-cocogoose font-black text-gold uppercase text-20 md:text-30 mb-4">
                        @lang('Create and secure reports securely and automatically')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-20">
                        @lang('Download all automatically generated audit reports in your own design, as a PDF file. Retrieve all safely stored reports at any time.')
                    </p>
                </div>
                <div class="w-full md:w-4/12 lg:w-5/12">
                    <img src="{{asset('img/group-1744.svg')}}" alt="" class="mx-auto ">
                </div>

            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section class="py-10 lg:pt-32 lg:pb-24 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-light-blue text-30 lg:text-40 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('All issues compliantly documented <span class="text-primary"> without any hassle</span>')
            </h2>
            <div class="flex justify-around md:flex-no-wrap flex-wrap">
                <div class="md:w-5/12 lg:w-4/12 text-center md:text-left mb-10 md:mb-0">
                    <div class="flex items-center justify-center  md:h-300 lg:h-420 mb-20">
                        <img src="{{asset('img/group-2728.png')}}" alt=""
                             srcset="{{asset('img/group-2728.png')}},
                                     {{asset('img/group-2728@2x.png')}} 2x"
                        >
                    </div>

                    <h3 class="font-cocogoose font-black text-purple uppercase text-20 md:text-30 mb-4">
                        @lang('Save time with the issue overview')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-20">
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

                    <h3 class="font-cocogoose font-black text-red uppercase text-20 md:text-30 mb-4">
                        @lang('Document troubleshooting')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-20">
                        @lang('All solution actions are automatically recorded and attached to the audit report, which leads to complete and compliant documentation.')
                    </p>
                </div>
            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section class="py-10 lg:pt-32 lg:pb-24 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-green text-30 lg:text-40 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('Detailed analyses and reporting')
            </h2>
            <div class="flex justify-around items-center md:flex-no-wrap flex-wrap mb-10 lg:mb-32">

                <div class="w-full md:w-6/12 lg:w-4/12 mb-10 md:mb-0 text-center md:text-left">
                    <h3 class="font-cocogoose font-black text-light-blue uppercase text-20 md:text-30 mb-4">
                        @lang('in-depth Analysis <span class="text-primary">of all collected data</span>')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-20">
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
                    <h3 class="font-cocogoose font-black text-purple uppercase text-20 md:text-30 mb-4">
                        @lang('Filter performance stats')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-20">
                        @lang('Analyse the number of inspections, negative responses, overdue inspections, incidents raised and resolved – the average score is broken down into the six criteria seen here.')
                    </p>
                </div>
                <div class="w-full md:w-4/12 lg:w-5/12 ">
                    <div class="feature__items flex flex-wrap ">
                        <div class="feature__item w-1/2 lg:w-1/3 text-center mb-10 lg:mb-20 ">
                            <img src="{{asset('img/time-icon.svg')}}" alt="" class="mb-6 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('time')</span>
                        </div>
                        <div class="feature__item w-1/2 lg:w-1/3 text-center mb-10 lg:mb-20">
                            <img src="{{asset('img/site-icon.svg')}}" alt="" class="mb-6 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('site')</span>
                        </div>
                        <div class="feature__item w-1/2 lg:w-1/3 text-center mb-10 lg:mb-20">
                            <img src="{{asset('img/checklist-icon.svg')}}" alt="" class="mb-6 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('checklist')</span>
                        </div>
                        <div class="feature__item w-1/2 lg:w-1/3 text-center mb-10">
                            <img src="{{asset('img/check-icon.svg')}}" alt="" class="mb-6 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('check')</span>
                        </div>
                        <div class="feature__item w-1/2 lg:w-1/3 text-center mb-10">
                            <img src="{{asset('img/group-icon.svg')}}" alt="" class="mb-6 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('users & groups')</span>
                        </div>
                        <div class="feature__item w-1/2 lg:w-1/3 text-center mb-10">
                            <img src="{{asset('img/category-icon.svg')}}" alt="" class="mb-6 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('categories')</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex justify-around items-center md:flex-no-wrap flex-wrap mb-10 lg:mb-32">

                <div class="w-full md:w-6/12 lg:w-4/12 mb-10 md:mb-0 text-center md:text-left">
                    <h3 class="font-cocogoose font-black text-gold uppercase text-20 md:text-30 mb-4">
                        @lang('Weekly and monthly reporting')
                    </h3>
                    <p class="font-light text-secondary font-din text-17  lg:text-20">
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
    <section id="easy" class="pt-12 lg:pt-24 bg-orange-light">
        <div class="container mx-auto md:pt-12">
            <h3 class="section__title-large  md:mx-auto text-center mb-5 lg:mb-20 "
                style="color: #ffffff">@lang('Improve your quality and safety efforts with meaningful analyses')</h3>
            <div class="easy__content flex">
                <div class="easy__image w-0 lg:w-1/4 flex justify-start">
                    <img src="{{asset('img/group-1919.svg')}}" alt="">
                </div>
                <div class="easy__submit w-full lg:w-3/4 xxl:w-2/4 px-5 lg:px-16">
                    <form action="">
                        <div class="home__banner--email flex flex-col justify-center  md:flex-row lg:justify-between mb-8">

                            <input class="pl-8 w-full sm:w-360 lg:w-2/4 sm:mx-4" type="email"
                                   placeholder="{{__('Enter e-mail address')}}">
                            <button class="base__button mx-auto mt-5 md:mt-0 w-215 lg:w-auto px-8 bg-orange md:mx-4 font-extrabold text-white uppercase font-cocogoose text-17 lg:text-xl h-70  rounded-20 items-center flex">@lang('TRY FOR FREE')</button>
                        </div>
                    </form>
                    <div class="banner__signin">
                        <small class="banner__small-text text-center block"
                               style="color: #ffffff;">@lang('We also offer <a href=""> paid plans </a> with additional features, storage and support.')
                        </small>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
