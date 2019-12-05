@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="product__banner" class="py-10 lg:pt-32 lg:pb-24 bg-grey relative">
        <div class="container mx-auto flex">
            <div class="banner__left lg:w-1/2 w-full">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">@lang('Extremely powerful.')</h1>
                <div class="banner__submit">
                    <form action="" class="mb-10 flex flex-col md:flex-row lg:flex-none justify-around">
                        <input type="email" class="w-full md:w-1/2 lg:w-56 xxl:w-64 h-70 pl-8 rounded-20"
                               placeholder="@lang('Enter e-mail address')">
                        <button class="font-extrabold w-full mt-5 md:ml-10 md:mt-0 md:w-1/2 xxl:ml-16 bg-red text-white uppercase font-cocogoose text-17 lg:text-xl h-70 px-8 rounded-20">@lang('TRY FOR FREE')</button>
                    </form>
                    <div class="banner__signin">
                        <small class="banner__small-text">@lang('Already using Lumiform?') <a
                                    href=""> @lang('Sign in')</a>
                        </small>
                    </div>
                </div>
            </div>
            <div class="banner__right hidden lg:block absolute top-0 right-0">
                <img src="{{asset('img/landing-page-devices.svg')}}" alt="">
            </div>
        </div>

    </section>
    <section id="how__works" class="py-16 lg:pt-48 lg:pb-40">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-3 uppercase tracking-heading">@lang('How Lumiform works')</h2>
            <p class="font-light text-center font-din md:text-20 lg:text-30 text-secondary tracking-text mb-10 lg:mb-40">@lang('Make sure you’re mastering the whole process – from flexible form building to fast problem solving to in depth analysis.')</p>
        </div>
        <div id="tab" class="px-5 lg:px-0">
            <div class="mx-auto tab__header flex-wrap sm:flex-no-wrap h-auto sm:h-40 md:h-70 flex md:text-15 lg:text-20 rounded-l-20 rounded-r-20 mb-12 lg:mb-48">
                <div class="header__item flex sm:flex-none sm:w-auto justify-center items-center w-1/2  py-2 px-2 md:py-5 md:px-5 xxl:px-24 font-cocogoose font-bold text-secondary active" onclick="openTab(this)" data-index="0">@lang('Create forms')</div>
                <div class=" header__item flex sm:flex-none sm:w-auto justify-center items-center w-1/2  py-2 px-2 md:py-5 md:px-5 xxl:px-24 font-cocogoose font-bold text-secondary" onclick="openTab(this)" data-index="1">@lang('Conduct via app')</div>
                <div class=" header__item flex sm:flex-none sm:w-auto justify-center items-center w-1/2  py-2 px-2 md:py-5 md:px-5 xxl:px-24 font-cocogoose font-bold text-secondary" onclick="openTab(this)" data-index="2">@lang('Resolve issues')</div>
                <div class=" header__item flex sm:flex-none sm:w-auto justify-center items-center w-1/2   py-2 px-2 md:py-5 md:px-5 xxl:px-24 font-cocogoose font-bold text-secondary" onclick="openTab(this)" data-index="3">@lang('Results, reports, & analyses')</div>
            </div>
            <div class="tab__content">
                <div class="content__item active flex">
                    <div class="w-full sm:w-4/5 lg:w-1/2 flex items-start lg:items-center flex-col">
                        <div class="w-full lg:w-3/5 mb-5  pr-5">
                            <h3 class="mb-5 font-bold md:text-25 lg:text-40 tracking-heading uppercase font-cocogoose text-primary">
                                @lang('<span class="text-light-blue">Start within minutes</span> with forms that are tailored to your needs.')
                            </h3>
                            <p class="text-left font-light font-din md:text-20 lg:text-30 text-secondary tracking-text">
                                @lang('Use ready-made, expert-proofed checklists from the template library, which you can further customise according to your needs. Or, start from scratch and convert manual hard copies or excel lists into digital checklists.')
                            </p>

                        </div>
                        <a href=""
                           class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large lg:mt-auto">
                            @lang('Discover how to create custom forms')
                            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                        </a>

                    </div>

                    <div class="w-0 sm:w-1/5 lg:w-1/2">
                        <img src="{{asset('img/group-1105.svg')}}" alt="">
                    </div>
                </div>
                <div class="content__item ">
                    <div class="w-full sm:w-4/5 lg:w-1/2 flex items-start lg:items-center flex-col">
                        <div class="w-full lg:w-3/5 mb-5  pr-5">
                            <h3 class="mb-5 font-bold  md:text-25 lg:text-40 tracking-heading uppercase font-cocogoose text-primary">
                                @lang('<span class="text-purple">Conduct quickly and reliably</span>, whenever and wherever you need to')
                            </h3>
                            <p class="text-left font-light font-din md:text-20 lg:text-30 text-secondary tracking-text">
                                @lang('Conduct inspections and audits, whether on a tablet or smartphone, Android or iOS – online or offline. The highly intuitive and easy-to-use app guides you through all checks.')
                            </p>

                        </div>
                        <a href=""
                           class="flex items-center uppercase text-red text-center block text-20 tracking-large mt-auto">
                            @lang('Discover how to conduct via the intuitive app')
                            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                        </a>

                    </div>
                    <div class="w-0 sm:w-1/5 lg:w-1/2">
                        <img src="{{asset('img/group-916.svg')}}" alt="">
                    </div>
                </div>
                <div class="content__item">
                    <div class="w-full sm:w-4/5 lg:w-1/2 flex items-start lg:items-center flex-col">
                        <div class="w-full lg:w-3/5 mb-5  pr-5">
                            <h3 class="mb-5 font-bold  md:text-25 lg:text-40 tracking-heading uppercase font-cocogoose text-red">
                                @lang('Uncover more issues <span class="text-primary">and </span> resolve them faster.')
                            </h3>
                            <p class="text-left font-light font-din md:text-20 lg:text-30 text-secondary tracking-text">
                                @lang('Make sure all field workers can quickly report quality and safety issues. Keep track of the troubleshooting progress and resolve problems together, with your teammates.')
                            </p>

                        </div>
                        <a href=""
                           class="flex items-center uppercase text-red text-center block text-20 tracking-large">
                            @lang('DISCOVER HOW TO SOLVE ISSUES QUICKLY')
                            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                        </a>

                    </div>
                    <div class="w-0 sm:w-1/5 lg:w-1/2">
                        <img src="{{asset('img/group-1433.svg')}}" alt="">
                    </div>
                </div>
                <div class="content__item">
                    <div class="w-full sm:w-4/5 lg:w-1/2 flex items-start lg:items-center flex-col">
                        <div class="w-full lg:w-3/5 mb-5  pr-5">
                            <h3 class="mb-5 font-bold  md:text-25 lg:text-40 tracking-heading uppercase font-cocogoose text-gold">
                                @lang('Custom reports <span class="text-primary">and </span> detailed analyses')
                            </h3>
                            <p class="text-left font-light font-din md:text-20 lg:text-30 text-secondary tracking-text">
                                @lang('Audit reports are automatically created, so you don’t waste time on post-processing. Uncover areas of your organisation that need your attention, and continuously improve quality and security through in-depth analyses.')
                            </p>

                        </div>
                        <a href=""
                           class=" flex items-center uppercase text-red text-center block text-20 tracking-large">
                            @lang('DISCOVER CUSTOM REPORTS AND ANALYSES')
                            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                        </a>

                    </div>
                    <div class="w-0 sm:w-1/5 lg:w-1/2">
                        <img src="{{asset('img/group-928.svg')}}" alt="">
                    </div>
                </div>
            </div>

        </div>
        <a href=""
           class="mx-auto mt-8 base__button font-extrabold bg-red text-white uppercase font-cocogoose text-xl h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>

    </section>
    <section id="flow" class="py-12 lg:py-32 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-8 lg:mb-20 uppercase tracking-heading">@lang('The Lumiform flow')</h2>
            <p class="px-16 text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-20">
                @lang('Digitise all quality and safety efforts, and cut down inspection time, with the Lumiform app. And, even more importantly, continuously optimise your quality and safety operations easily, with the Lumiform flow.')
            </p>
            <div class="flow__process flex-wrap lg:flex-no-wrap flex justify-between  pt-24 relative ">
                <div class="w-2/5 lg:w-1/6 process__item relative z-10 lg:mb-0 mb-40">
                    <img src="{{asset('img/group-1810.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="" class="mx-auto lg:mx-0">
                    <p class="uppercase text-light-blue font-bold font-cocogoose md:text-20 xl:text-30 item__bottom--text ">@lang('create')</p>
                </div>
                <div class="w-2/5 lg:w-1/6 process__item relative z-10 lg:mb-0 mb-40">
                    <img src="{{asset('img/group-1823.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="" class="mx-auto lg:mx-0">
                    <p class="uppercase text-gold font-bold font-cocogoose md:text-20 xl:text-30 item__bottom--text">@lang('Conduct')</p>
                </div>
                <div class="w-2/5 lg:w-1/6 process__item relative z-10 lg:mb-0 mb-40">
                    <img src="{{asset('img/group-1836.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="" class="mx-auto lg:mx-0">
                    <p class="uppercase text-red font-bold font-cocogoose md:text-20 xl:text-30 item__bottom--text">@lang('Correct')</p>
                </div>
                <div class="w-2/5 lg:w-1/6 process__item relative z-10 lg:mb-0 mb-40">
                    <img src="{{asset('img/group-2564.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="" class="mx-auto lg:mx-0">
                    <p class="uppercase text-purple font-bold font-cocogoose md:text-20 xl:text-30 item__bottom--text">@lang('Analyse')</p>
                </div>
                <div class="w-2/5 lg:w-1/6 process__item relative z-10 lg:mb-0">
                    <img src="{{asset('img/group-2580.svg')}}" alt="" class="item__top--image">
                    <img src="{{asset('img/path-2511.svg')}}" alt="" class="mx-auto lg:mx-0">
                    <p class="uppercase text-green font-bold font-cocogoose md:text-20 xl:text-30 item__bottom--text">@lang('Optimise')</p>
                </div>
                <div class="line z-0 hidden lg:block"></div>
            </div>
        </div>
    </section>
    <section id="feedback" class="bg-red-light py-16">
        <div class="container mx-auto px-32 flex">
            <div class="w-0 lg:w-1/3">
                <img src="{{asset('img/group-1031.svg')}}" alt="">
            </div>
            <div class="w-full lg:w-2/3 pl-5 lg:pl-20 flex flex-col justify-around">
                <p class="font-din font-light text-30 text-secondary">@lang('“With Lumiform, we conduct quality and safety checks quickly, easyly, and reliably while improving quality and safety ongoing.”')</p>
                <div class="signature flex items-center">
                    <p class="font-din font-light text-20 text-secondary">@lang('- Valentin Döhring, CEO')</p>
                    <img src="{{asset('img/signature.svg')}}" alt="" class="ml-12">
                </div>
            </div>

        </div>

    </section>
    <section id="leaders">
        <div class="container  mx-auto md:py-24 py-10">
            <h3 class="section__title-large mb-20 text-center">@lang('Manage quality and safety like industry leaders.')</h3>
            <div class="leader__items flex flex-wrap  justify-between">
                <div class="leader__item md:mr-10 flex items-center md:w-auto w-1/4 mr-0">
                    <img src="{{asset('img/adidas.png')}}" alt="">
                </div>
                <div class="leader__item md:mr-10 flex items-center md:w-auto w-1/4 mr-0">
                    <img src="{{asset('img/ritter.png')}}" alt="">
                </div>
                <div class="leader__item md:mr-10 flex items-center md:w-auto w-1/4 mr-0">
                    <img src="{{asset('img/aldi.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="easy" class="pt-10 xl:pt-24 xxl:pt-32 bg-purple-light">
        <div class="container mx-auto md:pt-12">
            <h3 class="section__title-large md:w-2/3 md:mx-auto text-center mb-20 "
                style="color: #ffffff">@lang('It’s easy to get started - free of charge')</h3>
            <div class="easy__content flex">
                <div class="easy__image w-0 lg:w-1/4 flex justify-end">
                    <img src="{{asset('img/group-1975.svg')}}" alt="">
                </div>
                <div class="easy__submit w-full lg:w-3/4 xxl:w-2/4 px-5 lg:px-16">
                    <form action="">
                        <div class="home__banner--email flex flex-col lg:flex-row justify-between mb-8">

                            <input class="pl-8 w-full md:w-2/4 mx-4" type="email" placeholder="{{__('Enter e-mail address')}}">
                            <button class="base__button mx-auto mt-5 md:mt-0 w-full md:w-auto px-8 bg-purple md:mx-4 font-extrabold text-white uppercase font-cocogoose text-xl h-70  rounded-20 items-center flex">@lang('Get Lumiform FREE')</button>
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

    <script>
        const tabElement = document.getElementsByClassName('header__item');
        const tabContent = document.getElementsByClassName('content__item');

        function removeClases(data) {
            [].forEach.call(data, function (el) {
                el.classList.remove("active");
            });
        }

        function openTab (event) {
            removeClases(tabElement)
            removeClases(tabContent)

            let index = event.dataset.index;
            event.classList.add('active');
            tabContent[index].classList.add('active');
        };
    </script>
@endsection
