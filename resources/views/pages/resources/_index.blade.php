@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section class="pt-26 bg-grey-light" >
        <div class="container mx-auto">
            <div class="mb-16">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary mb-12 leading-tight">
                    @lang('Explore how Lumiform is helping teams')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('Read case studies about how Lumfirom is helping businesses to improve their quality and safety standards in the field.')
                </p>
            </div>
            <img src="{{asset('img/group-5138.svg')}}" alt="">
        </div>
    </section>
@endsection
