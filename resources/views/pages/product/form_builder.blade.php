@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="form__banner" class="py-10 lg:pt-32 lg:pb-24 bg-blue-light relative">
        <div class="container mx-auto flex">
            <div class="banner__left  w-full">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('Create custom forms in minutes.')
                </h1>
                @include('components.product.banner_form')
            </div>

        </div>

    </section>
    <section id="digitise" class="py-12 lg:py-24">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-light-blue">Digitise</span> your custom forms')
            </h2>
            <p class="sm:px-16 text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-24">
                @lang('Create a check queries form by typing a statement or question and then defining the type of response.')
            </p>
            <div class="digitise__items">
                @include('components.product.image_text_horizontal',
                [
                'heading' => 'Define the <span class="text-light-blue">query</span>',
                'headingColor' => 'primary',
                'text' => 'Type in a question or statement to be displayed to the inspector in the field.',
                'image' => 'group-2699.svg',
                ]
                )
                <div class="digitise__item flex flex-wrap lg:flex-no-wrap justify-between">
                    <div class="digitise__item--text  sm:w-full lg:w-4/12 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="lg:text-30 font-bold font-cocogoose uppercase mb-5 text-grey-light text-center sm:text-left">
                            @lang('Define the <span class="text-purple">response</span>')
                        </h3>
                        <p class="text-secondary font-hairline lg:text-30 font-din text-center sm:text-left">
                            @lang('Define how the inspector should answer the question or statement in the field.')
                        </p>
                    </div>
                    <div class="digitise__item--image  w-7/12 flex flex-wrap justify-between">
                        @include('components.product.icons_raw',[
                            'text' => 'Multiple Choice',
                            'image' => 'group-1261.svg',
                            'class' => 'w-1/5 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'Text',
                            'image' => 'group-1262.svg',
                             'class' => 'w-1/5 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'Number',
                            'image' => 'group-1265.svg',
                             'class' => 'w-1/5 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'Checkbox',
                            'image' => 'group-1266.svg',
                             'class' => 'w-1/5 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'Date & Time',
                            'image' => 'group-1268.svg',
                             'class' => 'w-1/5 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'photo',
                            'image' => 'group-1260.svg',
                             'class' => 'w-1/5 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'Annotation',
                            'image' => 'group-1263.svg',
                             'class' => 'w-1/5 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'Signature',
                            'image' => 'group-1264.svg',
                             'class' => 'w-1/5 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'Dropdown',
                            'image' => 'group-1267.svg',
                             'class' => 'w-1/5 mb-20',
                            ])
                        @include('components.product.icons_raw',[
                            'text' => 'Instruction',
                            'image' => 'group-1269.svg',
                             'class' => 'w-1/5 mb-20',
                            ])

                    </div>
                </div>
            </div>
            <button class="button__base px-8 py-3 lg:py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="workflow" class="py-12 lg:pt-24 lg:py-32">

        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 mb-5 lg:text-40 lg:mb-24 uppercase tracking-heading">
                @lang('Create logics and <span class="text-green">define workflows</span>')
            </h2>
            <div class="workflow__items">
                @include('components.product.image_text_horizontal',
                [
                'heading' => 'Check-logics',
                'headingColor' => 'gold',
                'text' => 'Create if-then logics, and only make inspection elements visible when the inspector gives a particular answer.',
                'image' => 'group-2743.svg',
                'reversed' => true
                ]
                )
                @include('components.product.image_text_horizontal',
               [
               'heading' => 'Automatic issue logics',
               'headingColor' => 'green',
               'text' => 'Predefine issues that the system triggers automatically when receiving a specific response. For example, notify the technician automatically if the coffee machine is damaged.',
               'image' => 'rect-515.svg',
               'urlTo' => [
               'text' => 'LEARN MORE ABOUT issues',
               'url' => 'product.issues'
               ],
               'reversed' => true,
               ]
               )
                @include('components.product.image_text_horizontal',
                   [
                   'heading' => 'Notification-logics',
                   'headingColor' => 'light-blue',
                   'text' => 'Notify users via push-notification or email, when the inspector gives a particular answer.',
                   'image' => 'group-2700.svg',
                   'reversed' => true
                   ]
                   )

            </div>
            <button class="button__base px-8 py-3 lg:py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="forms" class="py-12 lg:pt-24 lg:py-32">

        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('<span class="text-gold">structure your forms</span> with sections and pages')
            </h2>
            <div class="workflow__items">
                <div class="sm:flex mb-12 lg:mb-40 ">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-light-blue">@lang('Create sections and pages')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din mb-5">
                            @lang('Use sections to bundle elements relating to one topic (for example, a ‘Product inspection’ section can be comprised of several checks), and pages to separate checks on different screens.')</p>
                    </div>
                    <div class="digitise__item--image  w-1/2 lg:w-3/5 mx-auto">
                        <img src="{{asset('img/group-2701.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>
                <div class="sm:flex mb-12 lg:mb-40">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-gold">@lang('Repeatable sections')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din mb-5">
                            @lang('Use repeatable sections to perform a series of checks, as often as you like, and duplicate the questions on the fly.')</p>
                    </div>
                    <div class="digitise__item--image w-1/2 lg:w-3/5 mx-auto">
                        <img src="{{asset('img/group-2744.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>


            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="organise" class="py-12 lg:pt-24 lg:py-32">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 lg:mb-20 mb-5 uppercase tracking-heading">
                @lang('<span class="text-purple">Organise</span> your inspections')
            </h2>
            <div class="workflow__items">
                <div class="sm:flex mb-12 lg:mb-40 ">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-10 text-gold">@lang('Schedule inspections')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din mb-5">
                            @lang('Define the timeframe in which inspectors should complete the assignment, and the cycle in which the check must be repeated.')
                        </p>
                        <div class="define__block mt-5 sm:mt-24">
                            <h6 class="text-15 lg:text-20 font-bold font-cocogoose uppercase mb-5 text-grey-bold">
                                @lang('DEFINE THE FOLLOWING PARAMETERS:')
                            </h6>
                            <ul class="parameters">
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1287.svg')}}" alt=""
                                         class="mr-6"> @lang('Schedule start & end time')</li>
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1288.svg')}}" alt=""
                                         class="mr-6"> @lang('Schedule repeats <br>(e.g. daily, weekly, monthly, custom)')
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="digitise__item--image w-1/2 lg:w-3/5 mx-auto">
                        <img src="{{asset('img/group-2711.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>
                <div class="sm:flex mb-12 lg:mb-40">
                    <div class="digitise__item--text w-full lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-purple">@lang('Assign inspections')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din">
                            @lang('Assign inspections to users or groups (e.g. cleaning team) and select the site where it takes place.')
                        </p>
                        <div class="define__block mt-5 sm:mt-24">
                            <h6 class="text-15 lg:text-20 font-bold font-cocogoose uppercase mb-10 text-grey-bold">
                                @lang('DEFINE THE FOLLOWING PARAMETERS:')
                            </h6>
                            <ul class="parameters">
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1290.svg')}}" alt="" class="mr-6">
                                    @lang('Groups')
                                </li>
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1289.svg')}}" alt="" class="mr-6">
                                    @lang('Users')
                                </li>
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1290.svg')}}" alt="" class="mr-6">
                                    @lang('Site')
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="digitise__item--image w-1/2 lg:w-3/5 mx-auto">
                        <img src="{{asset('img/group-2712.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>


            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>

    </section>
    <section id="restrict" class="py-12 lg:py-32">
        <div class="container mx-auto">
            <div class="sm:flex  sm:flex-row-reverse">
                <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pl-12 lg:pl-20 flex flex-col justify-center">
                    <h3 class="text-center sm:text-left text-30 lg:text-40 font-bold font-cocogoose uppercase mb-5 text-red">@lang('Restrict the availability of forms')</h3>
                    <p class="text-center sm:text-left text-secondary font-hairline text-20 lg:text-30 font-din mb-5 sm:mb-0">
                        @lang('Your checklist is available for all users in your organisation, per default, at any time. To limit the availability of unscheduled lists, you can make them available to individual users only.')</p>
                </div>
                <div class="digitise__item--image w-1/2 lg:w-3/5 mx-auto">
                    <img src="{{asset('img/group-2745.svg')}}" alt="" class="mx-auto">
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="py-12 lg:pt-24 lg:pb-32 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-4 uppercase tracking-heading">
                @lang('We offer many more features to improve flexibility')
            </h2>
            <p class=" text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-16">
                @lang('Features that help you to create and organise your inspections easily – no matter how advanced or sophisticated they are.')
            </p>

            <div class="feature__items flex flex-wrap sm:flex-no-wrap">
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-2713.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('dRAG & DROP')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-2714.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('REQUIRED FIELDS')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-2715.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('UNIVERSAL RESPONSE TYPES')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-2716.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('SCORES')</span>
                </div>
            </div>
        </div>

    </section>
    @include('components.product.bottom_form',[
    'heading' =>'Use our easy-to-use form builder, and create your first form within minutes.',
    'sectionBg' =>'blue',
    'buttonBg' =>'blue-dark',
    'image' =>'img/group-1960.svg',
    ])


@endsection
