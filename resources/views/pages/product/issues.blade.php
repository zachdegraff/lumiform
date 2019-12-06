@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="issues__banner" class="py-10 lg:pt-32 lg:pb-24 bg-blue-light relative">
        <div class="container mx-auto flex">
            <div class="banner__left  w-full lg:w-2/3">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('Uncover more issues and solve them faster.')
                </h1>
                <div class="banner__submit">
                    <form action="" class="mb-10 flex flex-col md:flex-row items-center md:justify-center lg:flex-none lg:justify-start">
                        <input type="email" class="w-full sm:w-360 pl-8 h-50 xxl:h-70 rounded-20"
                               placeholder="@lang('Enter e-mail address')">
                        <button class="font-extrabold w-215 mt-5 md:ml-10 md:mt-0  xxl:ml-12 bg-red text-white uppercase font-cocogoose text-17 lg:text-xl  h-50 xxxl:h-70 px-8 rounded-20">@lang('TRY FOR FREE')</button>
                    </form>
                    <div class="banner__signin text-center lg:text-left">
                        <small class="banner__small-text">@lang('Already using Lumiform?') <a
                                    href=""> @lang('Sign in')</a>
                        </small>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section id="management" class="py-12 lg:py-24">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 lg:mb-4 uppercase tracking-heading">
                @lang('No back and forth, just <span class="text-gold">effective issue management</span>')
            </h2>
            <p class="sm:px-16 text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-24">
                @lang('We invented the first issue management feature, to make issue workflows more effective and traceable.')
            </p>
          <div class="management__tools flex">
              <div class="tool__item w-1/3">
                  <h3 class="text-center text-20 font-bold font-cocogoose uppercase mb-10 text-red">@lang('Raise Issue')</h3>
                  <img src="{{asset('img/rise-image.svg')}}" alt="" class="mx-auto">
              </div>
              <div class="tool__item w-1/3">
                  <h3 class="text-center text-20 font-bold font-cocogoose uppercase mb-10 text-green">@lang('Solve issue together')</h3>
                  <img src="{{asset('img/group-1374.svg')}}" alt="" class="mx-auto">
              </div>
              <div class="tool__item w-1/3">
                  <h3 class="text-center text-20 font-bold font-cocogoose uppercase mb-10 text-light-blue">@lang('Get an overview')</h3>
                  <img src="{{asset('img/group-880.svg')}}" alt="" class="mx-auto">
              </div>
          </div>
            <button class="button__base px-8 py-3 lg:py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
@endsection
