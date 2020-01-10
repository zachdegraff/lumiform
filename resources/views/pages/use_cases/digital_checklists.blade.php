@extends('layout/base')

@section("head.title", __("Flexible Checklist Software & App - FREE  - Lumiform"))
@section('meta-tags')
        <meta name="keywords" content="@lang('Checklist app')">
        <meta name="keywords" content="@lang('checklist software')">
        <meta name="keywords" content="@lang('checklist tool')">
    <meta name="description" content="@lang('Use the easy-to-use checklist app to make sure all tasks are done reliably, and issues solved quickly. Start with the checklist software FOR FREE.')">
@endsection
@section("content")
    <section class="lg:py-28 py-16 cases--checklist">
        <div class="container mx-auto">
            <div class="w-full lg:w-10/12 mx-auto lg:mb-32 mb-12">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary lg:mb-16 mb-10 leading-none">
                    @lang('Save time and money <span class="line__break"></span> with digital checklists')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('Improve quality and security in your business, with digital lists tailored to meet your needs. ')
                </p>
            </div>
            <button class="mx-auto w-215  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-17 lg:text-20 h-70  rounded-20 items-center justify-center flex">
                @lang('try for FREE')
            </button>
        </div>
    </section>
    <section class="py-16 lg:py-32 with__border--bottom">
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-light-blue">Reduce checklist execution time</span> '),
        'image' => ['group-4364.png','group-4364@2x.png'],
        'items' => [
        __('Save time by clicking through standardised checklists. Corrective actions are displayed automatically.'),
        __('Checklist reports and documentation are created and archived automatically.')
        ],
        'bottom' => ['text' => 'At Pizza Hut, the time taken for filling out checklists has been reduced by 30%, with Lumiform.','borderColor' => 'light-blue']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-red">Get full transparency</span>'),
        'image' => ['group-5022.png','group-5022@2x.png'],
        'reversed' => true,
        'items' => [
        __('Schedule and assign checklists and make sure inspectors perform their checks on time.'),
        __('Remind auditors of the timely and reliable delivery of digital checklists.')
        ],
        'bottom' => ['text' => __('98% of digital checklists are conducted in time.'),'borderColor' => 'red']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-green">Increased quality and safety</span>'),
        'image' => ['group-5021.png','group-5021@2x.png'],
        'items' => [
        __('In-depth analysis makes it easier for you to compare checklist data and adjust processes.'),
        __('Identify issues quicker, assign tasks immediately and track the troubleshooting.'),
        ],
        'bottom' => ['text' => __('The average Lumiform client solves issues four times quicker than before.'),'borderColor' => 'green']
        ])
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-20 h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
    </section>
    <section class="py-16 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-purple">more transparency </span> with digital inspections')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-10 lg:mb-20">
                @lang('Create standardised checklists, within minutes, or start with ready-to-use checklist templates and customise them <span class="line__break"> </span> to meet your needs. Conduct checklists effectively, via the app, and solve issues quicker than ever before. ')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4890.png','group-4890@2x.png'],'title' => __('Create digital checklists'),'desc' => __('Create customised, digital checklists, tailored to meet your needs, within minutes. Organise workflows to make sure it gets done by the right person at the right time.')],
            ['srcset' => ['group-5149.png','group-5149@2x.png'],'title' => __('Conduct via app'),'desc' => __('Conduct digital checklists, whether with a tablet or smartphone, Android, or iOS – online or offline.')],
            ['srcset' => ['group-4844.png','group-4844@2x.png'],'title' => __('Solve issues'),'desc' => __('Don’t waste time on tedious issue reportings. Let issue automation do it for you. Simplify workflows, reduce errors, and save time for solving even more important problems.')],
            ['srcset' => ['group-4846.png','group-4846@2x.png'],'title' => __('Results, reports'),'desc' => __('Don’t waste time on post-processing and digitisation of checklist reports – everything is fully automated. Uncover areas of your business that need your attention, and continuously improve quality and safety, through in-depth analyses.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])

        </div>
    </section>
    @include('components.solution.industries_explore_section',[
    'heading' => __('See how Lumiform helps teams with <span class="line__break"></span> <span class="text-light-blue">digital checklists and workflows</span> '),
    'items' => [
    ['image' => 'checklists-warehouse-safety.png','srcset' => ['checklists-warehouse-safety.png','checklists-warehouse-safety@2x.png'],'template' => ['url' => '#','text' => __('View logistics checklist CASE STUDY')] ],
    ['image' => 'checklists-food-premises.png','srcset' => ['checklists-food-premises.png','checklists-food-premises@2x.png'],'template' => ['url' => '#','text' => __('View food checklist CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'heart-blue.png',
    'class' => 'bg-blue-light',
    'text' => __('“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“'),
    'position' => __('- Karina, Team Lead Quality and Energy Management'),
    ])
    @include('components.use-cases.section_companies')
    @include('components.product.bottom_form',[
    'heading' => __('Conduct digital checklists via app - free of charge!'),
    'sectionBg' =>'green-light',
    'buttonBg' =>'green-dark',
    'image' =>'group-1943.svg',
    'left' => true
    ])
@endsection
