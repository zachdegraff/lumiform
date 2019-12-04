@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="product__banner" class="xxl:pt-32 xxl:pb-24 xxl:bg-grey relative">
        <div class="container mx-auto flex">
            <div class="banner__left xxl:w-1/2">
                <h1 class="tracking-normal xxl:text-70 xxl:mb-16 font-cocogoose uppercase font-extrabold">@lang('Extremely powerful.')</h1>
                <div class="banner__submit">
                    <form action="" class="xxl:mb-10">
                        <input type="email" class="xxl:w-64 xxl:h-70 xxl:pl-8 xxl:rounded-20"
                               placeholder="@lang('Enter e-mail address')">
                        <button class="font-extrabold xxl:ml-16 bg-red xxl:text-white uppercase font-cocogoose xxl:text-xl xxl:h-70 xxl:px-8 xxl:rounded-20">@lang('TRY FOR FREE')</button>
                    </form>
                    <div class="banner__signin">
                        <small class="banner__small-text">@lang('Already using Lumiform?') <a
                                    href=""> @lang('Sign in')</a>
                        </small>
                    </div>
                </div>
            </div>
            <div class="banner__right absolute top-0 right-0">
                <img src="{{asset('img/landing-page-devices.svg')}}" alt="">
            </div>
        </div>

    </section>
    <section id="how__works" class="xxl:pt-48 xxl:pb-40">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary xxl:text-40 mb-3 uppercase tracking-heading">@lang('How Lumiform works')</h2>
            <p class="font-light text-center font-din xxl:text-30 text-secondary tracking-text mb-40">@lang('Make sure you’re mastering the whole process – from flexible form building to fast problem solving to in depth analysis.')</p>
        </div>
        <div id="tab">
            <div class="mx-auto tab__header xxl:h-70 flex xxl:text-20 rounded-l-20 rounded-r-20 xxl:mb-48">
                <div class="header__item xxl:py-5 xxl:px-24 font-cocogoose font-bold text-secondary active" data-index="0">@lang('Create forms')</div>
                <div class=" header__item xxl:py-5 xxl:px-24 font-cocogoose font-bold text-secondary" data-index="1">@lang('Conduct via app')</div>
                <div class=" header__item xxl:py-5 xxl:px-24 font-cocogoose font-bold text-secondary" data-index="2">@lang('Resolve issues')</div>
                <div class=" header__item  xxl:py-5 xxl:px-24 font-cocogoose font-bold text-secondary" data-index="3">@lang('Results, reports, & analyses')</div>
            </div>
            <div class="tab__content">
                <div class="content__item active flex">
                    <div class="xxl:w-1/2 flex items-center flex-col">
                        <div class="xxl:w-3/5 mb-5">
                            <h3 class="mb-5 font-bold xxl:text-40 tracking-heading uppercase font-cocogoose text-primary">
                                @lang('<span class="text-light-blue">Start within minutes</span> with forms that are tailored to your needs.')
                            </h3>
                            <p class="text-left font-light font-din xxl:text-30 text-secondary tracking-text">
                                @lang('Use ready-made, expert-proofed checklists from the template library, which you can further customise according to your needs. Or, start from scratch and convert manual hard copies or excel lists into digital checklists.')
                            </p>

                        </div>
                        <a href=""
                           class="uppercase text-red text-center block xxl:text-20 tracking-large">@lang('Discover how to create custom forms')</a>

                    </div>

                    <div class="xxl:w-1/2">
                        <img src="{{asset('img/group-1105.svg')}}" alt="">
                    </div>
                </div>
                <div class="content__item flex">
                    <div class="xxl:w-1/2 flex items-center flex-col">
                        <div class="xxl:w-3/5 mb-5">
                            <h3 class="mb-5 font-bold xxl:text-40 tracking-heading uppercase font-cocogoose text-primary">
                                @lang('<span class="text-purple">Conduct quickly and reliably</span>, whenever and wherever you need to')
                            </h3>
                            <p class="text-left font-light font-din xxl:text-30 text-secondary tracking-text">
                                @lang('Conduct inspections and audits, whether on a tablet or smartphone, Android or iOS – online or offline. The highly intuitive and easy-to-use app guides you through all checks.')
                            </p>

                        </div>
                        <a href=""
                           class="uppercase text-red text-center block xxl:text-20 tracking-large">@lang('Discover how to conduct via the intuitive app')</a>

                    </div>
                    <div class="xxl:w-1/2">
                        <img src="{{asset('img/group-916.svg')}}" alt="">
                    </div>
                </div>
                <div class="content__item flex">
                    <div class="xxl:w-1/2 flex items-center flex-col">
                        <div class="xxl:w-3/5 mb-5">
                            <h3 class="mb-5 font-bold xxl:text-40 tracking-heading uppercase font-cocogoose text-red">
                                @lang('Uncover more issues <span class="text-primary">and </span> resolve them faster.')
                            </h3>
                            <p class="text-left font-light font-din xxl:text-30 text-secondary tracking-text">
                                @lang('Make sure all field workers can quickly report quality and safety issues. Keep track of the troubleshooting progress and resolve problems together, with your teammates.')
                            </p>

                        </div>
                        <a href=""
                           class="uppercase text-red text-center block xxl:text-20 tracking-large">@lang('DISCOVER HOW TO SOLVE ISSUES QUICKLY')</a>

                    </div>
                    <div class="xxl:w-1/2">
                        <img src="{{asset('img/group-1433.svg')}}" alt="">
                    </div>
                </div>
                <div class="content__item flex">
                    <div class="xxl:w-1/2 flex items-center flex-col">
                        <div class="xxl:w-3/5 mb-5">
                            <h3 class="mb-5 font-bold xxl:text-40 tracking-heading uppercase font-cocogoose text-red">
                                @lang('Custom reports <span class="text-primary">and </span> detailed analyses')
                            </h3>
                            <p class="text-left font-light font-din xxl:text-30 text-secondary tracking-text">
                                @lang('Audit reports are automatically created, so you don’t waste time on post-processing. Uncover areas of your organisation that need your attention, and continuously improve quality and security through in-depth analyses.')
                            </p>

                        </div>
                        <a href=""
                           class="uppercase text-red text-center block xxl:text-20 tracking-large">@lang('DISCOVER CUSTOM REPORTS AND ANALYSES')</a>

                    </div>
                    <div class="xxl:w-1/2">
                        <img src="{{asset('img/group-928.svg')}}" alt="">
                    </div>
                </div>
            </div>

        </div>
        <a href=""
           class="mx-auto mt-8 base__button font-extrabold bg-red xxl:text-white uppercase font-cocogoose xxl:text-xl xxl:h-70 xxl:px-8 xxl:rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>

    </section>
    <section id="flow" class="xxl:py-32 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary xxl:text-40 xxl:mb-20 uppercase tracking-heading">@lang('The Lumiform flow')</h2>
            <p class="xxl:px-16 text-center font-light font-din xxl:text-30 text-secondary tracking-text xxl:mb-20">
                @lang('Digitise all quality and safety efforts, and cut down inspection time, with the Lumiform app. And, even more importantly, continuously optimise your quality and safety operations easily, with the Lumiform flow.')
            </p>
            <div class="flow__process flex justify-between  xxl:pt-24 relative ">
                <div class="process__item relative z-10">
                    <img src="{{asset('img/group-1810.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="">
                    <p class="uppercase text-light-blue font-bold font-cocogoose xxl:text-30 item__bottom--text ">@lang('create')</p>
                </div>
                <div class="process__item relative z-10">
                    <img src="{{asset('img/group-1823.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="">
                    <p class="uppercase text-gold font-bold font-cocogoose xxl:text-30 item__bottom--text">@lang('Conduct')</p>
                </div>
                <div class="process__item relative z-10">
                    <img src="{{asset('img/group-1836.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="">
                    <p class="uppercase text-red font-bold font-cocogoose xxl:text-30 item__bottom--text">@lang('Correct')</p>
                </div>
                <div class="process__item relative z-10">
                    <img src="{{asset('img/group-2564.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="">
                    <p class="uppercase text-purple font-bold font-cocogoose xxl:text-30 item__bottom--text">@lang('Analyse')</p>
                </div>
                <div class="process__item relative z-10">
                    <img src="{{asset('img/group-2580.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="">
                    <p class="uppercase text-green font-bold font-cocogoose xxl:text-30 item__bottom--text">@lang('Optimise')</p>
                </div>
                <div class="line z-0"></div>
            </div>
        </div>
    </section>
    <section id="feedback" class="bg-red-light xxl:py-16">
        <div class="container mx-auto xxl:px-32 flex">
            <div class="xxl:w-1/3">
                <img src="{{asset('img/group-1031.svg')}}" alt="">
            </div>
            <div class="xxl:w-2/3 pl-20 flex flex-col justify-around">
                <p class="font-din font-light xxl:text-30 text-secondary">@lang('“With Lumiform, we conduct quality and safety checks quickly, easyly, and reliably while improving quality and safety ongoing.”')</p>
                <div class="signature flex items-center">
                    <p class="font-din font-light xxl:text-20 text-secondary">@lang('- Valentin Döhring, CEO')</p>
                    <img src="{{asset('img/signature.svg')}}" alt="" class="ml-12">
                </div>
            </div>

        </div>

    </section>
    <section id="leaders">
        <div class="container mx-auto xl:pt-32 xl:pb-24">
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
    <section id="easy" class="xl:pt-24 xxl:pt-32 bg-purple-light">
        <div class="xxl:container mx-auto md:pt-12">
            <h3 class="section__title-large md:w-2/3 md:mx-auto text-center mb-20 "
                style="color: #ffffff">@lang('It’s easy to get started - free of charge')</h3>
            <div class="easy__content flex">
                <div class="easy__image md:w-0 xxl:w-1/4 flex justify-end">
                    <img src="{{asset('img/group-1975.svg')}}" alt="">
                </div>
                <div class="easy__submit md:w-full lg:w-3/4 xxl:w-2/4 px-16 pt-8">
                    <form action="">
                        <div class="home__banner--email flex justify-between mb-8 ">

                            <input class="pl-8 w-2/4 mx-4" type="email" placeholder="{{__('Enter e-mail address')}}">
                            <button class="base__button xxl:px-8 bg-purple mx-4 font-extrabold xxl:text-white uppercase font-cocogoose xxl:text-xl xxl:h-70  xxl:rounded-20 items-center flex">@lang('Get Lumiform FREE')</button>
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
