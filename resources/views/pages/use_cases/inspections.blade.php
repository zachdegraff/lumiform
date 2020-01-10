@extends('layout/base')

@section("head.title", __("Easy and Powerful Inspection App - FREE - Lumiform"))

@section('meta-tags')
        <meta name="keywords" content="@lang('Inspection app')">
    <meta name="description" content="@lang('Conduct standardised inspections via the easy-to-use App, solve issues quickly, and analyse all data in a snap with the inspection software. FOR FREE!')">
@endsection
@section("content")
    <section class="xxl:pt-28 xxl:pb-40 py-16 cases--inspection"    >
        <div class="container mx-auto">
            <div class="w-full lg:w-10/12 mx-auto lg:mb-16 mb-12">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary lg:mb-16 mb-10 leading-none">
                    @lang('Digital inspections: <span class="line__break"></span> easy to handle, for everyone')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('The Lumform app is so easy to handle that anyone can perform <span class="line__break"></span> standardized, effective inspections in the field - really anyone!')
                </p>
            </div>
            <button class="mx-auto w-215  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-20 h-70  rounded-20 items-center justify-center flex">
                @lang('try for FREE')
            </button>
        </div>
    </section>
    <section class="py-16 lg:py-32 with__border--bottom">
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('Make sure all tasks are <span class="text-light-blue">done reliably, and in time</span> '),
        'image' => ['group-4965.png','group-4965@2x.png'],
        'items' => [
        __('Organise all inspections by scheduling, assigning and tracking all inspections'),
        __('Raise all issues immediately, assign corrective actions and track the progress of troubleshooting')
        ],
        'bottom' => ['text' => __('Pizza Hut increased the rate of reported issues by 50% in the first year.'),'borderColor' => 'light-blue']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-red">Improve quality and safety</span>'),
        'image' => ['group-5001.png','group-5001@2x.png'],
        'reversed' => true,
        'items' => [
        __('Uncover more quality and safety issues, through standardised inspections and raising of issues'),
        __('Get an overview of raised issues and manage corrective actions remotely, with ease')
        ],
        'bottom' => ['text' => __('With Lumiform, Kitchentown has increased its problem-solving rate three-fold.'),'borderColor' => 'red']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-green">Save time and money</span>'),
        'image' => ['group-3433.png','group-3433@2x.png'],
        'items' => [
        __('More inspections uncover more issues, which can be solved more quickly with Lumiform'),
        __('Analyse inspections and identify areas with poor quality and safety performance in a snap'),
        ],
        'bottom' => ['text' => __('With Lumiform, Benfleet managed to solve issues 60% faster.'),'borderColor' => 'green']
        ])
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-20 h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
    </section>
    <section class="py-16 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-purple">Create transparency </span> with digital inspections')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-10 lg:mb-20">
                @lang('Customize inspections and workflows to fit your company’s quality and <span class="line__break"> </span> safety standards — so everyone tackles the right tasks at the right time.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4629.png','group-4629@2x.png'],'title' => __('Create inspection checklists'),'desc' => __('Create inspections within minutes, according to your individual needs, and ensure transparency through comprehensive form standards.')],
            ['srcset' => ['group-4839.png','group-4839@2x.png'],'title' => __('Organise inspections'),'desc' => __('Pre-define all inspection workflows. Assign and schedule inspections, in order to make sure the right person does them reliably.')],
            ['srcset' => ['group-4840.png','group-4840@2x.png'],'title' => __('Conduct via app'),'desc' => __('Conduct inspections anytime, anywhere, via the inspection app – online and offline. Add photos and comments easily, during the inspection.')],
            ['srcset' => ['group-4469.png','group-4469@2x.png'],'title' => __('Solve Issues'),'desc' => __('Raise issues on-the-fly, as soon as they occur during an inspection. Assign actions immediately, in order to solve any issues as quickly as possible. Track troubleshooting in real-time.')],
            ['srcset' => ['group-4841.png','group-4841@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('The system creates inspection reports automatically, so you don’t waste time on post-processing and digitisation. Uncover areas of your business that need your attention.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])


        </div>
    </section>
    @include('components.solution.industries_explore_section',[
    'heading' => __('<span class="text-green">Improve your inspection workflows </span> like industry leaders'),
    'items' => [
    ['image' => 'inspections-general-workplace.png','srcset' => ['inspections-general-workplace.png','inspections-general-workplace@2x.png'],'template' => ['url' => '#','text' => __('View facility management inspection CASE STUDY')] ],
    ['image' => 'inspections-food-safety-large.png','srcset' => ['inspections-food-safety-large.png','inspections-food-safety-large@2x.png'],'template' => ['url' => '#','text' => __('View food inspection CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'group-1131.svg',
    'class' => 'bg-purple-extralight',
    'text' => __('“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“'),
    'position' => __('- Mark, HSE-Manager'),
    ])
    @include('components.use-cases.section_companies')
    @include('components.product.bottom_form',[
    'heading' => __('Start digitising your inspections now – free of charge!'),
    'sectionBg' =>'purple-light',
    'srcset' => ['group-2190.png','group-2190@2x.png'],
    'buttonBg' =>'purple',
    'image' =>'img/group-2028.svg',
    ])
@endsection
