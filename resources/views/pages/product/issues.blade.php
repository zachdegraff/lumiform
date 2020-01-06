@extends('layout/base')

@section("head.title", __("product/issues.title"))
@section('meta-tags')

    <meta name="description" content="@lang('product/issues.description')">
@endsection
@section("content")
    <section id="issues__banner" class="py-10 lg:pt-32 lg:pb-24 bg-blue-light relative">
        <div class="container mx-auto flex">
            <div class="banner__left  w-full lg:w-2/3">
                <h1 class="tracking-normal text-center lg:text-left text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('product/issues.bannerTitle')
                </h1>
                @include('components.product.banner_form',['buttonText' => 'product/issues.buttonText'])
            </div>
            <img src="{{asset('img/group-phones.png')}}" alt="" class="group__phones">
        </div>

    </section>
    <section id="management" class="py-12 lg:py-24 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-4 uppercase tracking-heading">
                @lang('No back and forth, just <span class="text-gold">effective issue management</span>')
            </h2>
            <p class="sm:px-16 text-center font-light font-din text-30 text-secondary tracking-text mb-8 lg:mb-24">
                @lang('We invented the first issue management feature, to make issue workflows more effective and traceable.')
            </p>
            <div class="management__tools flex flex-wrap justify-center lg:flex-no-wrap lg:justify-between">
                @include('components.product.image_with_title',[
                'heading' => 'Raise Issue',
                'color' => 'red',
                'image' => 'rise-image.svg',
                'class' => 'first',
                ])
                @include('components.product.image_with_title',[
                'heading' => 'Solve issue together',
                'color' => 'green',
                'image' => 'group-1374.svg',
                 'class' => 'second',
                ])
                @include('components.product.image_with_title',[
                'heading' => 'Track from Remote',
                'color' => 'light-blue',
                'image' => 'group-880.svg',
                ])


            </div>
            <button class="button__base px-8 py-3 lg:py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="restrict" class="py-12 lg:py-32">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 mb-12 lg:mb-24 uppercase tracking-heading">
                @lang('Raise issues in <span class="text-red">three different ways:</span>')
            </h2>
            @include('components.product.text_numbered',[
            'heading' => 'Raise issues <span class="text-light-blue">automatically</span>',
            'text' => 'In the form builder, predefine which events trigger an issue automatically and indicate to whom the resolution should be assigned, and who is responsible for resolving it.',
            'color' => 'grey-light',
            'number' => 1,
            'subItem' => true,
            'image' => 'group-1432.png',
            'srcset' => ['group-1432.png','group-1432@2x.png'],
            ])
            @include('components.product.text_numbered',[
            'heading' => 'Raise <span class="text-red"> ad-hoc issues</span>',
            'text' => 'Inspectors have the option of reporting an issue at any time, via the mobile app. Either raise an issue by defining everything from scratch or select from a predefined set of issues. ',
            'color' => 'grey-light',
            'number' => 2,
            'image' => 'group-5340.png',
            'srcset' => ['group-5340.png','group-5340@2x.png'],
            ])
            @include('components.product.text_numbered',[
            'heading' => 'Raise <span class="text-gold">in-form Issues</span>',
            'text' => 'During an inspection, inspectors have the option of reporting a problem relating to a particular check. The solution workflow is then attached to the inspection report.',
            'color' => 'grey-light',
            'number' => 3,
            'image' => 'group-5089.png',
            'srcset' => ['group-5089.png','group-5089@2x.png'],
            ])


        </div>
    </section>
    <section id="features" class="py-12 lg:pt-24 lg:pb-32 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-38 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('FOR EVERY ISSUE RAISED, YOU CAN <span class="text-purple">DEFINE THE FOLLOWING PARAMETERS</span>')
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

            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-50 mb-5 lg:mb-26 uppercase tracking-heading">
                @lang('  <span class="text-purple"> Solve issues quickly </span> as a team')
            </h2>
        </dic>
        <div class="container mx-auto text-center lg:text-left flex flex-wrap lg:flex-no-wrap justify-between">
            @include('components.product.image_text_vertical',[
                        'heading' => 'View details and update process',
                        'text' => 'Review the details and information from the person who raised the issue. Set the process from ‘open’ to ‘in process’ ‚or ‘solved’, in order to inform all stakeholders.',
                        'color' => 'green',
                        'image' => 'group-5041.png',
                        'srcset' => ['group-5041.png','group-5041@2x.png'],
                        ])

            @include('components.product.image_text_vertical',[
                                   'heading' => 'Add photos and comments ',
                                   'text' => 'When troubleshooting, you can add images and comments to document the entire solution process.',
                                   'color' => 'gold',
                                    'image' => 'group-5042.png',
                                    'srcset' => ['group-5042.png','group-5042@2x.png'],
                                   ])

            @include('components.product.image_text_vertical',[
                                               'heading' => 'Messaging with teammates',
                                               'text' => 'Write messages and share them with teammates who are also assigned to the issue, in order to speed up resolution.',
                                               'color' => 'purple',
                                               'image' => 'group-5043.png',
                                                'srcset' => ['group-5043.png','group-5043@2x.png'],
                                               ])

            @include('components.product.image_text_vertical',[
                                                           'heading' => 'Log protocol',
                                                           'text' => 'The system logs all process steps automatically, and this ensures seamless documentation.',
                                                           'color' => 'red mb-24',
                                                           'image' => 'group-5044.png',
                                                            'srcset' => ['group-5044.png','group-5044@2x.png'],
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
                'image' => 'group-3522.png',
                'srcset' => ['group-3522.png','group-3522@2x.png'],
                'reversed' => true
                ]
                )

        </div>
    </section>
    @include('components.product.bottom_form',[
   'heading' =>'Improve your quality and safety <span class="line__break"> </span> efforts with meaningful analyses',
   'sectionBg' =>'green-opacity',
   'buttonBg' =>'green',
   'image' =>'img/group-1836.svg',
   ])

@endsection
