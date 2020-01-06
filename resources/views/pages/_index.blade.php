@extends('layout/base')

@section("head.title", __("home/index.title"))
@section('meta-tags')
    @foreach(__('home/index.keywords') as $keyword)
        <meta name="keywords" content="{{$keyword}}">
    @endforeach
    <meta name="description" content="@lang('home/index.description')">
@endsection
@section("content")
    <section id="home__banner" class="relative">
        <div class="container mx-auto flex">
            <div class="banner__left py-12 md:py-20 xxl:py-32 w-full lg:w-6/12 xxl:w-5/12">
                <h1 class="mb-5 text-primary text-70 font-cocogoose font-extrabold uppercase tracking-normal leading-tight">
                    @lang('home/index.bannerTitle')
                </h1>
                <p class="font-din text-30 font-light text-secondary mb-12 xxl:mb-32 w-11/12"> @lang('home/index.bannerText')</p>
                @include('components.product.banner_form')
            </div>
            <div class="banner__right md:flex-shrink-0 lg:flex-1 relative">
                <img src="{{asset('img/tablet.png')}}" alt="" class="absolute banner__image">
            </div>
        </div>
    </section>
    @include('components.use-cases.section_companies',['fontSize' => 'text-20','bgColor' => 'grey-light'])
    <section id="home__procedure" class="py-10 lg:pt-16 xxl:pt-28 lg:pb-20 xxl:pb-48">
        <div class="container mx-auto">
            <h2 class="md:mb-32 mb-10 text-center text-50 font-cocogoose font-black leading-none tracking-text uppercase text-light-blue">
                @lang('AN intuitive app for  all quality and safety procedures')
            </h2>
            <div class="procedure__content flex pt-5">
                <div class="w-full mx-auto mt-5  md:w-1/2 xl:w-2/5">
                    <ul class="list--circle__check mb-20 md:mx-auto">
                        <li>@lang('Create customised forms in minutes')</li>
                        <li>@lang('Start with expert-proofed templates')</li>
                        <li>@lang('Conduct inspections faster via app')</li>
                        <li>@lang('Solve issues together with teammates.')</li>
                        <li>@lang('Fully automated, customisable reports')</li>
                        <li>@lang('Data analysis')</li>
                    </ul>
                    <a href="@urlTo('product')"
                       class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large my-5 lg:mt-10">
                        @lang('LEARN MORE ABOUT THE PRODUCT')
                        <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                    </a>
                </div>
                <div class="w-0 md:w-1/2 xl:w-3/5">
                    <img src="{{asset('img/landing-page-devices.png')}}" alt="" class="procedure__image">
                </div>
            </div>
        </div>
    </section>
    <section id="home__cases" class="pb-10 lg:pb-64">
        <div class="container mx-auto">
            <div class="case__items md:w-10/12 mx-auto">
                <div class="case__item flex mt-24 justify-between">
                    <div class="item__text ">
                        <h6 class="text-50 font-cocogoose font-black tracking-middle leading-none uppercase mb-5 text-green">@lang('Improve quality and safety')</h6>
                        <p>@lang('Your reputation is everything – preserve it. Don’t just digitise your inspections and audits: continuously optimise procedures.')</p>
                    </div>
                    <div class="item__image">
                        <img src="{{asset('img/improve-quality.png')}}" alt="">
                    </div>
                </div>
                <div class="case__item reversed flex mt-24 justify-between">
                    <div class="item__text ">
                        <h6 class="text-50 font-cocogoose font-black tracking-middle leading-none uppercase mb-5 text-gold">@lang('Save time and money')</h6>
                        <p>@lang('Cut your inspection time by up to half, resolve issues up to four times faster, get customised reports that are generated fully automatically, and uncover underperforming areas in a snap.')</p>
                    </div>
                    <div class="item__image ">
                        <img src="{{asset('img/save-time.png')}}" alt="">
                    </div>
                </div>
            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="home__start">
        <div class="container mx-auto flex align-baseline ">
            <div class="start__text w-full md:w-3/5 md:w-2/3 md:mx-auto md:text-center lg:w-2/5">
                <h3 class="md:text-center text-50 font-cocogoose uppercase leading-none tracking-middle mb-10 lg:text-left">
                    @lang('Start right away, with <span class="text-gold">ready-to-use checklists</span>')
                </h3>
                <p class="mb-24">
                    @lang('Lumiform provides free, ready-to-use templates that you can further customise, to enable you to start industry-proofed checklists within minutes.')
                </p>
                <a href="@urlTo('templateLibrary')"
                   class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large my-5 lg:mt-10">
                    @lang('DISCOVER TEMPLATES')
                    <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                </a>

            </div>
            <div class="start__image w-0 md:w-2/5 lg:w-3/5">
                <img src="{{asset('img/checklists-tablet.png')}}" alt="" srcset="{{asset('img/checklists-tablet.png')}}, {{asset('img/checklists-tablet@2x.png')}} 2x">
            </div>

        </div>

    </section>
    <section id="home__learn">
        <div class="container mx-auto my-12 lg:my-24 xxl:my-48 ">
            <div class=" w-full lg:w-2/3 mx-auto mb-12 lg:mb-32">
                <h3 class="text-50 font-cocogoose font-black text-primary uppercase text-center mb-5">
                    @lang('Learn and grow through <span class="text-purple">inspiration</span>')
                </h3>
                <p class="ml-10 font-din text-30 tracking-text font-light text-secondary">
                    @lang('We offer you a wide range of inspiring options that show how companies <span class="line__break"> </span>use  Lumiform to continuously improve their quality and safety procedures.')
                </p>
            </div>


            <div class="learn__items flex-wrap lg:flex-no-wrap flex">
                <div class="learn__item w-full md:w-1/2 lg:flex-1 text-center mb-5">
                    <div class="with__circle mb-10 lg:mb-24 mx-auto">
                        <div class="image__circle" style="background:#00B2FF19 ;"></div>
                        <img src="{{asset('img/industries.png')}}" alt="">
                    </div>

                    <a href=" @urlTo('industries')" class="text-20 font-extrabold font-cocogoose uppercase flex items-center justify-center" style="color: #00B2FF;">
                        @include('components.product.arrow-right',['color' => '#00B2FF','text' => 'SOLUTION BY INDUSTRIES'])
                    </a>
                </div>
                <div class="learn__item w-full md:w-1/2 lg:flex-1 text-center mb-5">
                    <div class="with__circle  mb-10 lg:mb-24 mx-auto">
                        <div class="image__circle" style="background:#FD2F581A ;"></div>
                        <img src="{{asset('img/type-solution.png')}}" alt="">
                    </div>
                    <a href=" @urlTo('useCases')" class="text-20 font-extrabold font-cocogoose uppercase flex items-center justify-center" style="color: #FD2F58;">
                        @include('components.product.arrow-right',['color' => '#FD2F58','text' => 'SOLUTION BY category'])
                    </a>
                </div>

                <div class="learn__item w-full md:w-1/2 lg:flex-1 text-center mb-5">
                    <div class="with__circle  mb-10 lg:mb-24 mx-auto">
                        <div class="image__circle" style="background:#F3EFFB ;"></div>
                        <img src="{{asset('img/case-study.png')}}" alt="">
                    </div>
                    <a href=" @urlTo('resources')" class="text-20 font-extrabold font-cocogoose uppercase flex items-center justify-center" style="color: #8D5FD6;">
                        @include('components.product.arrow-right',['color' => '#8D5FD6','text' => 'CASE STUDIES'])
                    </a>

                </div>
                <div class="learn__item w-full md:w-1/2 lg:flex-1 text-center mb-5">
                    <div class="with__circle  mb-10 lg:mb-24 mx-auto">
                        <div class="image__circle" style="background:#00B2FF19;"></div>
                        <img src="{{asset('img/use-cases.png')}}" alt="">
                    </div>
                    <a href=" @urlTo('resources.appUses')" class="text-20 font-extrabold font-cocogoose uppercase flex items-center justify-center" style="color: #00C389;">
                        @include('components.product.arrow-right',['color' => '#00C389','text' => 'APP USES'])
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('components.product.companions_section',[
   'heading' => 'Manage quality and safety like industry leaders',
   'icons' => [
   'adidasArtboard.svg','ALDIArtboard.svg','AllianzArtboard.svg','ARALArtboard.svg','audi-black-vector-logo.svg','BecksArtboard.svg',
   'BMWArtboard.svg','BOSCHArtboard.svg','DHlArtboard.svg','DPArtboard.svg','dpd-logo-png.svg','Dr._Oetker-Logo.svg','EDEKAArtboard.svg',
   'FantaArtboard.svg','hasseroeder-vector-logo.svg','HermesArtboard.svg','HIPPArtboard.svg','KauflandArtboard.svg','KrombacherArtboard.svg',
   'LIDLArtboard.svg','LufthansaArtboard.svg','Mercedes-BenzArtboard.svg','MieleArtboard.svg','NestleArtboard.svg','NIVEAArtboard.svg',
   'obi-vector-logo.svg','OTTOArtboard.svg','PUMAArtboard.svg','RittersportArtboard.svg','SchwarzkopfArtboard.svg','Siemens.svg',
   'tchibo1Artboard.svg','tui-vector-logo.svg'
   ]
   ])
    @include('components.product.bottom_form',[
   'heading' =>'It’s easy to get started with Lumiform.',
   'sectionBg' =>'green-opacity',
   'buttonBg' =>'green',
   'image' =>'img/home-easy-img.png',
   ])

    {{--<h1>@lang('Digital inspections and audits')</h1>
    <p>@lang('Lumiform is the most flexible form builder bringing light into your internal quality and safety procedures.')</p>
    <input placeholder="@lang('Enter your e-mail address')"/>
    <button>@lang('Try for free')</button>
    <p>@lang('Already using Lumiform?') <a href="">@lang('Sign in')</a></p>

    <h2>@lang('All quality and safety efforts in one hand!')</h2>
    <h3>@lang('Create forms')</h3>
    <h3>@lang('Organize inspections')</h3>
    <h3>@lang('Conduct via App')</h3>
    <h3>@lang('Solve issues')</h3>
    <a href="">@lang('Take the product tour')</a>

    <h2>@lang('Get inspired by our ready-to-use checklist templates')</h2>
    <p>@lang('Get started fast with ready-to use inspection and audit templates built by industry experts.')</p>
    <a href="">@lang('Discover templates')</a>

    <h2>@lang('See how Lumiform can help you')</h2>
    <p>@lang('Get started fast with ready-to use inspection and audit templates built by industry experts.')</p>
    <h3>@lang('Solution by Industries')</h3>
    <h3>@lang('Solution by Type')</h3>
    <h3>@lang('Case Studies')</h3>
    <h3>@lang('Blog Articlas')</h3>

    <h2>@lang('You’ll be in good company')</h2>
    <p>@lang('Teams of different industries, sizes and use cases have already used Lumiform where their quality and safety inspections take place.')</p>

    <h2>@lang('It’s easy to get started with Lumiform. And it’s free.')</h2>
    <input placeholder="@lang('Enter your e-mail address')"/>
    <button>@lang('Try for free')</button>
    <p>@lang('Use Lumiform for free now. We also offer <a href=":link">paid plans</a> with additional features, storage, and support.', ['link' => "/".__('plans')])</p>--}}
@endsection