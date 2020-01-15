@extends('layout/base')

@section("head.title", __("Lumiform - Manage your organisation - FREE"))
@section('meta-tags')

    <meta name="description" content="@lang('Orchestrate your team with user permissions, sites, users, and user groups to map your individual, organisational structures in the App. TRY FREE!')">
@endsection
@section("content")
    <section id="organization__banner" class="py-8 md:py-16 xl:py-20 bg-grey relative">
        <div class="container mx-auto flex">
            <div class="banner__left lg:w-7/12 w-full pt-12">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('Adapt to your complex organisation structure.')
                </h1>
                @include('components.product.banner_form',['buttonText' => 'try for free'])
            </div>
            <div class="banner__right--img hidden lg:block w-5/12 flex">
                <img  src="{{asset('img/bildschirm-foto.png')}}" srcset="
                                    {{asset('img/bildschirm-foto.png')}},
                                    {{asset('img/bildschirm-foto@2x.png')}} 2x" alt="">
            </div>
        </div>

    </section>
    <section id="organization__orchestrate" class="py-8 md:py-16 xl:pt-40 lg:py-20">
        <div class="container mx-auto">

            @include('components.product.image_text_horizontal',
                  [
                  'heading' => __('<span class="text-50">Create users</span>'),
                  'headingColor' => 'light-blue',
                  'text' => __('Easily manage users, user roles, groups and locations, in order to customise Lumiform to suit your business and team structure.'),
                  'image' => 'group-3328.png',
                  'srcset' => ['group-3328.png','group-3328@2x.png']
                  ]
                  )
            <button class="button__base px-8 py-3 lg:py-5 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="languages" class="py-8 md:py-16 xl:pb-24 xl:pt-32 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50  uppercase tracking-heading">
                @lang('Manage your <span class="text-green">language preferences</span>')
            </h2>
            <p class=" text-center font-light font-din text-20  text-secondary tracking-text mb-20">
                @lang('Display the Lumiform app in a number of languages:')
            </p>

            <div class="flex justify-between flex-wrap lg:flex-no-wrap">
                @include('components.product.flag',[
                    'text' => __('English'),
                    'color' => 'light-blue',
                    'image' => 'gb',
                ])
                @include('components.product.flag',[
                    'text' => __('español'),
                    'color' => 'red',
                    'image' => 'sp',
                ])
                @include('components.product.flag',[
                    'text' => __('Nederlands'),
                    'color' => 'gold',
                    'image' => 'nl',
                ])
                @include('components.product.flag',[
                    'text' => __('Deutsch'),
                    'color' => 'grey-bold',
                    'image' => 'ge',
                ])
                @include('components.product.flag',[
                    'text' => __('Français'),
                    'color' => 'purple',
                    'image' => 'fr',
                ])
            </div>
        </div>
    </section>
    <section class="py-8 md:py-16 xl:py-28 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 mb-5 uppercase tracking-heading">
                @lang('highly customised user roles')
            </h2>
            <p class=" text-center font-light font-din text-30  text-secondary tracking-text mb-8 md:mb-20 xl:mb-32">
                @lang('Create highly individualised user roles, and determine the granular permissions for each role.')
            </p>

            <div class="flex justify-around lg:justify-between lg:flex-no-wrap flex-wrap">
                @include('components.product.title_with_list',[
                    'text' => __('Forms & inspections'),
                    'color' => 'red',
                    'items' => ['Create new forms','Edit own inspections'],
                ])
                @include('components.product.title_with_list',[
                    'text' => __('Issue management'),
                    'color' => 'purple',
                    'items' => ['Create new issues','Manage issues'],
                ])
                @include('components.product.title_with_list',[
                    'text' => __('Analytics & reports'),
                    'color' => 'green',
                    'items' => ['View analytics','Get performance reports'],
                ])
                @include('components.product.title_with_list',[
                    'text' => __('Administration'),
                    'color' => 'gold',
                    'items' => ['Manage sites','Manage invoices'],
                ])
            </div>
            <p class="text-30 font-light font-din text-secondary text-center my-5 sm:mt-20 sm:mb-16">@lang('… and many more')</p>
            <button class="button__base px-8 py-3 lg:py-5  mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="organization__orchestrate" class="py-8 md:py-16 xl:pt-32 xl:pb-20">
        <div class="container mx-auto">
            @include('components.product.image_text_horizontal',
                 [
                 'heading' => __('Create user groups'),
                 'headingColor' => 'light-blue',
                 'text' => 'Create user groups, such as Cleaning Team or Store Managers, to make inspections and audits visible or to assign only the checklist to these groups. ',
                 'image' => 'group-3329.png',
                 'srcset' => ['group-3329.png','group-3329@2x.png']
                 ]
                 )
            @include('components.product.image_text_horizontal',
                   [
                   'heading' => __('Create sites '),
                   'headingColor' => 'purple',
                   'text' => __('Companies with several locations can add all their sites, together with their data, in order to assign users and checklists individually.'),
                   'image' => 'group-3333.png',
                   'reversed' => true,
                   'srcset' => ['group-3333.png','group-3333@2x.png']
                   ]
                   )

        </div>
    </section>
    @include('components.product.bottom_form',[
   'heading' => __('Adapt to your structure - start free of charge!'),
   'sectionBg' =>'purple-light',
   'buttonBg' =>'purple',
   'left' => true,
   'image' =>'group-1892.png',
   'srcset' => ['group-1892.png','group-1892@2x.png']
   ])
@endsection
