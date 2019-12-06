@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="conduct__banner" class="py-10 lg:pt-32 lg:pb-24 bg-red-light relative">
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
@endsection
