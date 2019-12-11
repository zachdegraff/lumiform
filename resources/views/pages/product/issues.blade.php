@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="issues__banner" class="py-10 lg:pt-32 lg:pb-24 bg-blue-light relative">
        <div class="container mx-auto flex">
            <div class="banner__left  w-full lg:w-2/3">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('Uncover more issues and solve them faster.')
                </h1>
                @include('components.product.banner_form')
            </div>

        </div>

    </section>
    <section id="management" class="py-12 lg:py-24 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 lg:mb-4 uppercase tracking-heading">
                @lang('No back and forth, just <span class="text-gold">effective issue management</span>')
            </h2>
            <p class="sm:px-16 text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-24">
                @lang('We invented the first issue management feature, to make issue workflows more effective and traceable.')
            </p>
            <div class="management__tools flex flex-wrap justify-center lg:flex-no-wrap lg:justify-between">
                @include('components.product.image_with_title',[
                'heading' => 'Raise Issue',
                'color' => 'red',
                'image' => 'rise-image.svg',
                ])
                @include('components.product.image_with_title',[
                'heading' => 'Solve issue together',
                'color' => 'green',
                'image' => 'group-1374.svg',
                ])
                @include('components.product.image_with_title',[
                'heading' => 'Get an overview',
                'color' => 'light-blue',
                'image' => 'group-880.svg',
                ])


            </div>
            <button class="button__base px-8 py-3 lg:py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="restrict" class="py-12 lg:py-32">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 mb-12 lg:mb-24 uppercase tracking-heading">
                @lang('Raise issues in three different ways:')
            </h2>
            @include('components.product.text_numbered',[
            'heading' => 'Raise issues <span class="text-light-blue">automatically</span>',
            'text' => 'Your checklist is available for all users in your organisation, per default, at any time. To limit the availability of unscheduled lists, you can make them available to individual users only.',
            'color' => 'grey-light',
            'number' => 1,
            'subItem' => true,
            'image' => 'group-1432.svg',
            ])
            @include('components.product.text_numbered',[
            'heading' => 'Raise <span class="text-red"> ad-hoc issues</span>',
            'text' => 'Inspectors have the option of reporting an issue at any time, via the mobile app. Either raise an issue by defining everything from scratch or select from a predefined set of issues. . To limit the availability of unscheduled lists, you can make them available to individual users only.',
            'color' => 'grey-light',
            'number' => 2,
            'image' => 'group-1697.svg',
            ])
            @include('components.product.text_numbered',[
            'heading' => 'Raise <span class="text-gold">in-form Issues</span>',
            'text' => 'During an inspection, inspectors have the option of reporting a problem relating to a particular check. The solution workflow is then attached to the inspection report.. Either raise an issue by defining everything from scratch or select from a predefined set of issues. . To limit the availability of unscheduled lists, you can make them available to individual users only.',
            'color' => 'grey-light',
            'number' => 3,
            'image' => 'group-2738.svg',
            ])


        </div>
    </section>
    <section id="features" class="py-12 lg:pt-24 lg:pb-32 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('FOR EVERY ISSUE RAISED, YOU CAN DEFINE THE FOLLOWING PARAMETERS')
            </h2>

            <div class="feature__items flex flex-wrap sm:flex-no-wrap">
                @include('components.product.icons_raw',[
                'text' => 'title',
                'image' => 'group-1262_2.svg',
                'class' => 'w-1/2',
                ])
                @include('components.product.icons_raw',[
                'text' => 'Description',
                'image' => 'group-1401.svg',
                'class' => 'w-1/2',
                ])
                @include('components.product.icons_raw',[
                'text' => 'Assignee',
                'image' => 'group-1402.svg',
                'class' => 'w-1/2',
                ])
                @include('components.product.icons_raw',[
                'text' => 'Priority',
                'image' => 'group-1262_1.svg',
                'class' => 'w-1/2',
                ])
                @include('components.product.icons_raw',[
                'text' => 'Deadline',
                'image' => 'group-2697.svg',
                'class' => 'w-1/2',
                ])
            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>

    </section>
    <section id="as_a_team" class="py-12 lg:py-32 with__border--bottom">
        <dic class="container mx-auto">

            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('  <span class="text-green"> Solve issues quickly </span> as a team')
            </h2>
        </dic>
        <div class="container mx-auto text-center lg:text-left flex flex-wrap lg:flex-no-wrap justify-between">
            @include('components.product.image_text_vertical',[
                        'heading' => 'View details and update the process',
                        'text' => 'Review the details and information from the person who raised the issue. Set the process from ‘open’ to ‘in process’ ‚or ‘solved’, in order to inform all stakeholders.',
                        'color' => 'green',
                        'image' => 'group-1417.svg',
                        ])

            @include('components.product.image_text_vertical',[
                                   'heading' => 'Add photos and comments related to the solution',
                                   'text' => 'When troubleshooting, you can add images and comments to document the entire solution process.',
                                   'color' => 'gold',
                                   'image' => 'group-2739.svg',
                                   ])

            @include('components.product.image_text_vertical',[
                                               'heading' => 'Messaging with teammates',
                                               'text' => 'Write messages and share them with teammates who are also assigned to the issue, in order to speed up resolution. .',
                                               'color' => 'purple',
                                               'image' => 'group-2740.svg',
                                               ])

            @include('components.product.image_text_vertical',[
                                                           'heading' => 'Log protocol',
                                                           'text' => 'The system logs all process steps automatically, and this ensures seamless documentation.',
                                                           'color' => 'green',
                                                           'image' => 'group-2741.svg',
                                                           ])
        </div>
        <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
    </section>
    <section id="troubleshot" class="lg:py-24 py-12">
        <div class="container mx-auto">
            @include('components.product.image_text_horizontal',
                [
                'heading' => 'Manage to <span class="text-red">troubleshoot</span>',
                'headingColor' => 'primary',
                'text' => 'Process unassigned and unscheduled issues to the right person, in order to solve them quickly. Monitor all assigned issues remotely. .',
                'image' => 'rect-515.svg',
                'reversed' => true
                ]
                )

        </div>
    </section>
    @include('components.product.bottom_form',[
   'heading' =>'Improve your quality and safety efforts with meaningful analyses.',
   'sectionBg' =>'green-light',
   'buttonBg' =>'green-dark',
   'image' =>'img/group-1836.svg',
   ])

@endsection
