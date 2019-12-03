@extends('layout/base')

@section("head.title", __("Lumiform - Easy & FREE Digital Inspection / Audit App"))

@section("content")
    <section id="home__banner">
        <div class="container mx-auto flex">
            <div class="banner__left md:flex-2 lg:flex-1 pt-32 pb-24">
                <h1 class="banner__heading mb-10">@lang('A new, easy way for inspections AND audits')</h1>
                <p class="banner__text mb-10">@lang('Equip your team with the Lumiform app and brighten up your quality and
                    safety workflows.')</p>
                <form action="">
                    <div class="home__banner--email flex justify-between mb-8 ">

                        <input class="pl-8 w-2/5" type="email" placeholder="{{__('Enter e-mail address')}}">
                        <button class="button__base w-2/5">@lang('Get Lumiform FREE')</button>

                    </div>
                </form>
                <div class="banner__signin">
                    <small class="banner__small-text">@lang('Already using Lumiform?') <a href=""> @lang('Sign in')</a>
                    </small>
                </div>
            </div>
            <div class="banner__right md:flex-shrink-0 lg:flex-1 relative">
                <img src="{{asset('img/tablet.png')}}" alt="" class="absolute banner__image">
            </div>
        </div>
    </section>
    <section id="home__trusted">
        <div class="container mx-auto">
            <h4 class="section__title mb-5">@lang('Trusted by forward-thinking of all shapes and sizes')</h4>
            <div class="flex items-center justify-between trusted__gallery">
                <div class="gallery__item">
                    <img src="{{asset('img/back-factory.png')}}" alt="">
                </div>
                <div class="gallery__item">
                    <img src="{{asset('img/helbing.png')}}" alt="">
                </div>
                <div class="gallery__item">
                    <img src="{{asset('img/beumer.png')}}" alt="">
                </div>
                <div class="gallery__item">
                    <img src="{{asset('img/burger.png')}}" alt="">
                </div>
                <div class="gallery__item">
                    <img src="{{asset('img/rectangle-1.png')}}" alt="">
                </div>
                <div class="gallery__item">
                    <img src="{{asset('img/tatar.png')}}" alt="" class="fixed-height">
                </div>
                <div class="gallery__item">
                    <img src="{{asset('img/oetker.png')}}" alt="">
                </div>
                <div class="gallery__item">
                    <img src="{{asset('img/doco.png')}}" alt="">
                </div>
                <div class="gallery__item">
                    <img src="{{asset('img/pizza-hut.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="home__procedure" class="md:pt-10 lg:pt-16 xxl:pt-32 lg:pb-20 xxl:pb-48">
        <div class="container mx-auto">
            <h2 class="section__title-large lg:mb-16 xxl:mb-32 text-center">@lang('AN intuitive app for all quality and safety procedures')</h2>
            <div class="procedure__content flex">
                <div class="md:w-2/2 md:mx-auto md:mt-5 lg:w-2/5">
                    <ul class="list--circle__check mb-20 md:mx-auto">
                        <li>@lang('Create customised forms in minutes')</li>
                        <li>@lang('Start with expert-proofed templates')</li>
                        <li>@lang('Conduct inspections faster via app')</li>
                        <li>@lang('Fully automated, customisable reports')</li>
                        <li>@lang('Data analysis')</li>
                    </ul>
                    <a href="" class="description-link">
                        @lang('LEARN MORE ABOUT THE PRODUCT')
                    </a>
                </div>
                <div class="md:w-0 lg:w-3/5">
                    <img src="{{asset('img/landing-page-devices.png')}}" alt="" class="procedure__image">
                </div>
            </div>
        </div>
    </section>
    <section id="home__cases" class="md:pb-20 lg:pb-64">
        <div class="container mx-auto">
            <div class="case__items">
                <div class="case__item flex mt-24">
                    <div class="item__text flex-1">
                        <h6 class="item__heading mb-5">@lang('Improve quality and safety')</h6>
                        <p>@lang('Your reputation is everything – preserve it. Don’t just digitise your inspections and audits: continuously optimise procedures.')</p>
                    </div>
                    <div class="item__image flex-1">
                        <img src="{{asset('img/improve-quality.png')}}" alt="">
                    </div>
                </div>
                <div class="case__item reversed flex mt-24">
                    <div class="item__text flex-1">
                        <h6 class="item__heading mb-5">@lang('Save time and money')</h6>
                        <p>@lang('Cut your inspection time by up to half, resolve issues up to four times faster, get customised reports that are generated fully automatically, and uncover underperforming areas in a snap.')</p>
                    </div>
                    <div class="item__image flex-1">
                        <img src="{{asset('img/save-time.png')}}" alt="">
                    </div>
                </div>
            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="home__start">
        <div class="container mx-auto flex align-baseline md:pb-10 lg:pb-24">
            <div class="start__text md:w-2/3 md:mx-auto md:text-center lg:w-2/5">
                <h3 class="md:text-center section__title-large mb-10 lg:text-left">@lang('Start right away, with ready-to-use checklists')</h3>
                <p class="mb-24">@lang('Lumiform provides free, ready-to-use templates that you can further customise, to enable you to start industry-proofed checklists within minutes.')</p>
                <a href="" class="description-link">@lang('DISCOVER TEMPLATES')</a>
            </div>
            <div class="start__image md:w-0 lg:w-3/5">
                <img src="{{asset('img/checklists-tablet.png')}}" alt="">
            </div>

        </div>

    </section>
    <section id="home__learn">
        <div class="container mx-auto md:my-12 lg:my-24 xxl:my-48 ">
            <div class="learn__text w-2/3 mx-auto mb-32">
                <h3 class="learn__heading mb-6">@lang('Learn and grow through inspiration')</h3>
                <p>@lang('We offer you a wide range of inspiring options that show how companies use Lumiform to continuously improve their quality and safety procedures.')</p>
            </div>


            <div class="learn__items md:flex-wrap flex">
                <div class="learn__item md:w-1/2 lg:flex-1 text-center">
                    <div class="with__circle mb-24 mx-auto">
                        <div class="image__circle" style="background:#00B2FF19 ;"></div>
                        <img src="{{asset('img/industries.png')}}" alt="">
                    </div>
                    <a href="" class="description-link" style="color: #00B2FF">@lang('SOLUTION BY INDUSTRIES')</a>
                </div>
                <div class="learn__item md:w-1/2 lg:flex-1 text-center">
                    <div class="with__circle mb-24 mx-auto">
                        <div class="image__circle" style="background:#FD2F581A ;"></div>
                        <img src="{{asset('img/type-solution.png')}}" alt="">
                    </div>
                    <a href="" class="description-link" style="color: #00B2FF">@lang('SOLUTION BY TYPE')</a>
                </div>
                <div class="learn__item md:w-1/2 lg:flex-1 text-center">
                    <div class="with__circle mb-24 mx-auto">
                        <div class="image__circle" style="background:#F3EFFB ;"></div>
                        <img src="{{asset('img/case-study.png')}}" alt="">
                    </div>
                    <a href="" class="description-link">@lang('CASE STUDIES')</a>
                </div>
                <div class="learn__item md:w-1/2 lg:flex-1 text-center">
                    <div class="with__circle mb-24 mx-auto">
                        <div class="image__circle" style="background:#8D5FD6;"></div>
                        <img src="{{asset('img/use-cases.png')}}" alt="">
                    </div>
                    <a href="" class="description-link" style="color: #8D5FD6">@lang('APP USES')</a>
                </div>
            </div>
        </div>
    </section>
    <section id="home__leaders">
        <div class="container mx-auto py-24">
            <h3 class="section__title-large mb-20 text-center">@lang('Manage quality and safety like industry leaders.')</h3>
            <div class="leader__items flex flex-wrap">
                <div class="leader__item mr-10 flex items-center">
                    <img src="{{asset('img/adidas.png')}}" alt="">
                </div>
                <div class="leader__item mr-10 flex items-center">
                    <img src="{{asset('img/ritter.png')}}" alt="">
                </div>
                <div class="leader__item mr-10 flex items-center">
                    <img src="{{asset('img/aldi.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="home__easy" class="xl:pt-24 xxl:pt-32">
        <div class="xxl:container mx-auto md:py-12">
            <h3 class="section__title-large md:w-2/3 md:mx-auto text-center mb-20 "
                style="color: #ffffff">@lang('It’s easy to get started with Lumiform. And it’s free of charge.')</h3>
            <div class="easy__content flex">
                <div class="easy__image md:w-0 w-1/4 flex justify-end pt-8">
                    <img src="{{asset('img/home-easy-img.png')}}" alt="">
                </div>
                <div class="easy__submit md:w-full lg:w-3/4 xxl:w-2/4 px-16">
                    <form action="">
                        <div class="home__banner--email flex justify-between mb-8 ">

                            <input class="pl-8 w-2/4 mx-4" type="email" placeholder="{{__('Enter e-mail address')}}">
                            <button class="button__base w-2/4 mx-4">@lang('Get Lumiform FREE')</button>
                        </div>
                    </form>
                    <div class="banner__signin">
                        <small class="banner__small-text text-center block" style="color: #ffffff;">@lang('We also offer <a href=""> paid plans </a> with additional features, storage and support.')
                        </small>
                    </div>
                </div>

            </div>
        </div>
    </section>
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