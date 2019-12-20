@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section class="bg-grey-light pt-28 pb-28">
        <div class="container mx-auto">
            <h1 class="tracking-normal text-primary text-center  text-40 xxl:text-70 mb-8 font-cocogoose uppercase font-extrabold">
                @lang('Talk to our sales team')
            </h1>
            <p class="text-30 font-light font-din text-secondary text-center mb-16">
                @lang('Looking for more information or want to try Lumiform Enterprise? <span class="line__break"></span>
 Send us a request and a Lumiform representative will follow up with you as soon as possible. ')
            </p>
            <div class="flex justify-center items-center mb-12">
                <p class="text-20 font-black font-cocogoose text-grey-bold text-center uppercase">
                    @lang('Have a simple question? ')
                </p>
                <a href="#"
                   class="ml-12 flex items-center justify-center uppercase text-red text-center block text-17 lg:text-20 tracking-heading ">
                    @lang('Check out our FAQ')
                    <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                </a>
            </div>
            <form action="">
                <div class="contact w-10/12 mx-auto flex flex-wrap justify-between">
                    <div class="contact__input mb-10">
                        <label for="name"
                               class="font-din  text-20 text-secondary capitalize w-full ">@lang('name')</label>
                        <input type="text" id="name" name="name" class="pl-10 w-full text-20 font-din text-secondary mt-2">
                    </div>
                    <div class="contact__input mb-10">
                        <label for="company"
                               class="font-din  text-20 text-secondary capitalize w-full ">@lang('Company')</label>
                        <input type="text" id="company" name="company"
                               class="pl-10 w-full text-20 font-din text-secondary mt-2">
                    </div>
                    <div class="contact__input mb-10">
                        <label for="phone"
                               class="font-din  text-20 text-secondary capitalize w-full ">@lang('phone')</label>
                        <input type="text" id="phone" name="phone" class="pl-10 w-full text-20 font-din text-secondary mt-2">
                    </div>
                    <div class="contact__input mb-10">
                        <label for="email"
                               class="font-din  text-20 text-secondary capitalize w-full ">@lang('Work E-Mail')</label>
                        <input type="text" id="email" name="email" class="pl-10 w-full text-20 font-din text-secondary mt-2">
                    </div>
                    <div class="contact__textarea w-full">
                        <label for="discuss"
                               class="font-din text-20 text-secondary capitalize w-full ">@lang('What would you like to discuss?')</label>
                        <textarea id="discuss" name="discuss"
                                  class="p-10  text-20 font-din text-secondary w-full mt-2"></textarea>
                    </div>
                </div>
                <button
                   class="mt-26 mx-auto block font-extrabold text-20 bg-red text-white uppercase font-cocogoose  h-70 px-8 py-6 rounded-20 ">@lang('Send Request')</button>
            </form>
        </div>
    </section>
    @include('components.use-cases.section_companies')
@endsection
