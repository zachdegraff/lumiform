@extends('layout/base')

@section("head.title", __("Plans & Pricing - Lumiform"))

@section("content")
    <section class="bg-grey-light lg:pt-28 lg:pb-32 py-16">
        <div class="container mx-auto">
            <h1 class="tracking-normal text-primary text-center  text-40 xxl:text-70 mb-10 font-cocogoose uppercase font-extrabold">
                @lang('Choose the plan that works best for you')
            </h1>
            <div class="subscribtion flex justify-center items-center mb-10 lg:mb-26">
                <p class="text-20 font-din font-light tracking-text text-secondary">
                    @lang('Pay annually (20% off)')
                </p>
                <label class="switch mx-3 sm:mx-8">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p class="text-20 font-din font-light tracking-text text-secondary">
                    @lang('Pay monthly')
                </p>
            </div>
            <div class="plans flex justify-around xl:flex-no-wrap flex-wrap">
                <div class="plan__item--small item__left flex flex-col">
                    <div class="plan__circle pt-2 absolute">
                    </div>
                    <div class="item__content">
                        <div class="text__top mb-2 w-full">
                            <h4 class="text-50 text-light-blue font-black tracking-text text-center font-cocogoose uppercase leading-none">
                                @lang('STARTER')
                            </h4>
                            <p class="text-20 font-din text-secondary tracking-text font-light text-center">
                                @lang('Essential features')
                            </p>
                        </div>
                        <div class="price mb-3 lg:mb-8">
                            <span class="text-80 text-primary font-cocogoose font-hairline text-center mx-auto block">
                                0€
                            </span>
                        </div>
                        <div class="text__bottom w-full">
                            <h4 class="text-20 text-light-blue font-black tracking-text text-center font-cocogoose uppercase mb-4">
                                @lang('user / month')
                            </h4>
                        </div>
                    </div>
                    <div class="button__bottom  w-full">
                        <a href=""
                           class="mx-auto font-extrabold text-20 bg-red text-white uppercase font-cocogoose  h-70 px-8  rounded-20 items-center ">@lang('Get Started')</a>
                        <div class="functions mt-6 lg:mt-16">
                            <p class="text-18 font-cocogoose font-black text-grey-bold mb-6 ">@lang('TOP FUNCTIONS ↓')</p>
                            <ul class="starter">
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Up to 5 users')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Limited data volume')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Limited schedules')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Unlimited queries')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Unlimited forms')</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="plan__item--large relative flex flex-col mb-4 lg:mb-0">
                    <div class="plan__circle absolute">
                    </div>
                    <div class="item__content">
                        <div class="text__top  w-full mb-2">
                            <h4 class="text-50 text-green font-black tracking-text text-center font-cocogoose uppercase leading-none">
                                @lang('PROFESSIONAL')
                            </h4>
                            <p class="text-20 font-din text-secondary tracking-text font-light text-center">
                                @lang('Comprehensive features')
                            </p>
                        </div>
                        <div class="price mb-8">
                            <span class="text-80 text-primary font-cocogoose font-hairline text-center mx-auto block">
                                <span class="price__number">20</span>€
                            </span>
                        </div>
                        <div class="text__bottom w-full">
                            <h4 class="text-20 text-green font-black tracking-text text-center font-cocogoose uppercase mb-2">
                                @lang('user / month')
                            </h4>
                            <p class="mb-5 text-20 font-din text-secondary tracking-text font-light text-center flex items-center justify-center">
                                @lang('for')
                                <input type="number"
                                       class="plan__count font-cocogoose text-30 text-grey-light font-bold pl-6 mx-4"
                                       value="1" placeholder="1">
                                @lang('user(s)')
                            </p>
                            <div class="slidecontainer">
                                <input type="range" min="1" max="10" value="1" class="slider mx-auto block"
                                       id="myRange">
                            </div>
                        </div>
                    </div>
                    <div class="button__bottom w-full">
                        <a href=""
                           class="font-extrabold text-20 bg-red text-white uppercase font-cocogoose  h-70 px-8  rounded-20 items-center mx-auto">@lang('Start free trial')</a>
                        <div class="functions mt-6 lg:mt-16 sm:ml-40 lg:ml-32">
                            <p class="text-18 font-cocogoose font-black text-grey-bold mb-6">@lang('TOP FUNCTIONS ↓')</p>
                            <ul class="pro">
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Issues')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Analytics')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Custom Reports')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Advanced user management')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('If-then logics')</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="plan__item--small item__right relative flex flex-col">
                    <div class="plan__circle absolute">
                    </div>
                    <div class="item__content">
                        <div class="text__top mb-2 sm:mb-5 w-full">
                            <h4 class="text-50 text-gold font-black tracking-text text-center font-cocogoose uppercase leading-none">
                                @lang('ENTERPRISE')
                            </h4>
                            <p class="text-20 font-din text-secondary tracking-text font-light text-center">
                                @lang('Maximum business value')
                            </p>
                        </div>
                        <div class="price mb-2 sm:mt-8 sm:mb-10 ">
                            <img src="{{asset('img/icons/pricing-icon.svg')}}" alt="" class="mx-auto">
                        </div>
                        <div class="text__bottom w-full">
                            <h4 class="text-20 text-gold font-black tracking-text text-center font-cocogoose uppercase sm:mb-4">
                                @lang('Custom Pricing')
                            </h4>
                            <p class="text-20 font-din text-secondary tracking-text font-light text-center">
                                @lang('for an entire company')
                            </p>
                        </div>

                    </div>
                    <div class="button__bottom w-full">
                        <a href=""
                           class="font-extrabold text-20 bg-red text-white uppercase font-cocogoose  h-70 px-8 py-6 rounded-20 items-center mx-auto">@lang('Contact Sales')</a>
                        <div class="functions mt-6 lg:mt-16">
                            <p class="text-18 font-cocogoose font-black text-grey-bold mb-6">@lang('TOP FUNCTIONS ↓')</p>
                            <ul class="enterprise">
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Custom onboarding')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Single Sign On')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('Advanced support')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('APIs')</li>
                                <li class="font-din text-20 tracking-text text-secondary pl-10 mb-3">@lang('SLA')</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    @include('components.price.table')
    @include('components.use-cases.section_companies',['bgColor' => 'grey-light'])
    @include('components.price.faq')
    <section id="easy" class="pt-12 lg:pt-32 bg-green-extralight">
        <div class="container mx-auto">
            <h3 class="text-white text-50 font-extrabold uppercase font-cocogoose md:mx-auto text-center mb-5 lg:mb-20 tracking-heading"
            >@lang('Start your free trial now!')</h3>
            <div class="easy__content flex justify-between">

                <div class="easy__image w-0 lg:w-3/12 flex justify-center">
                    <img src="{{asset('img/group-2367.png')}}" alt=""
                         srcset="
                    {{asset('img/group-2367.png')}},
                    {{asset('img/group-2367@2x.png')}} 2x"
                    >

                </div>

                <div class="easy__submit w-full  lg:w-5/12">

                    <form action="">
                        <div class="home__banner--email flex flex-col justify-center  md:flex-row  mb-8">

                            <input class="pl-8 w-full md:w-1/2 xxl:w-360  " type="email"
                                   placeholder="{{__('Enter e-mail address')}}">
                            <button class=" mt-5 md:mt-0 md:ml-3 bg-green-dark tracking-large font-extrabold text-white uppercase font-cocogoose px-8 text-17 lg:text-20 h-70  rounded-20 items-center justify-center flex">@lang('Try for free')</button>
                        </div>
                    </form>
                    <div class="banner__signin">
                        <small class="text-20 font-din text-center font-medium block text-white"
                        >@lang('We also offer <a href="" class="font-bold underline"> paid plans </a> with additional features, storage and support.')
                        </small>
                    </div>
                </div>

                <div class="easy__image w-0 lg:w-3/12 flex justify-center">

                            <img src="{{asset('img/group-5157.png')}}" alt=""
                                 srcset="
                    {{asset('img/group-5157.png')}},
                    {{asset('img/group-5157@2x.png')}} 2x"
                            >

                </div>

            </div>
        </div>
    </section>

    <script>
        let slider = document.getElementById("myRange");
        let output = document.querySelector(".plan__count");
        let priceInput = document.querySelector(".price__number");
        let price = 20;
        output.value = slider.value;


        slider.oninput = function () {
            output.value = this.value;
            priceInput.innerHTML = price * this.value;
        };
        output.oninput = function () {
            slider.value = this.value;
            priceInput.innerHTML = price * this.value;
        }
    </script>
@endsection

