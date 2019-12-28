@extends('layout/base')

@section("head.title", __("use-cases/checklists.title"))
@section('meta-tags')
    @foreach(__('use-cases/checklists.keywords') as $keyword)
        <meta name="keywords" content="{{$keyword}}">
    @endforeach
    <meta name="description" content="@lang('use-cases/assessments.description')">
@endsection
@section("content")
    <section class="py-28"
             style="
                     background-image: url('{{asset('img/group-4200.png')}}');
                     background-color: #FAFBFB;
                     background-size: 86%;
                     background-repeat: no-repeat;
                     background-position-y: bottom;
                     background-position-x: center;"
    >
        <div class="container mx-auto">
            <div class="w-10/12 mx-auto mb-32">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary mb-16 leading-none">
                    @lang('use-cases/checklists.bannerTitle')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('use-cases/checklists.bannerText')
                </p>
            </div>
            <button class="mx-auto w-215  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-17 lg:text-20 h-70  rounded-20 items-center justify-center flex">
                @lang('use-cases/checklists.buttonText')
            </button>
        </div>
    </section>
    <section class="py-32 with__border--bottom">
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-light-blue">Reduce checklist execution time</span> ',
        'image' => ['group-4364.png','group-4364@2x.png'],
        'items' => [
        'Save time by clicking through standardised checklists. Corrective actions are displayed automatically.',
        'Checklist reports and documentation are created and archived automatically.'
        ],
        'bottom' => ['text' => 'At Pizza Hut, the time taken for filling out checklists has been reduced by 30%, with Lumiform.','borderColor' => 'light-blue']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-red">Get full transparency</span>',
        'image' => ['group-5022.png','group-5022@2x.png'],
        'reversed' => true,
        'items' => [
        'Schedule and assign checklists and make sure inspectors perform their checks on time.',
        'Remind auditors of the timely and reliable delivery of digital checklists.'
        ],
        'bottom' => ['text' => '98% of digital checklists are conducted in time.','borderColor' => 'red']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-green">Increased quality and safety</span>',
        'image' => ['group-5021.png','group-5021@2x.png'],
        'items' => [
        'In-depth analysis makes it easier for you to compare checklist data and adjust processes.',
        'Identify issues quicker, assign tasks immediately and track the troubleshooting.',
        ],
        'bottom' => ['text' => 'The average Lumiform client solves issues four times quicker than before.','borderColor' => 'green']
        ])
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-xl h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
    </section>
    <section class="py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-50 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-purple">more transparency </span> with digital inspections')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-20">
                @lang('Create standardised checklists, within minutes, or start with ready-to-use checklist templates and customise them <span class="line__break"> </span> to meet your needs. Conduct checklists effectively, via the app, and solve issues quicker than ever before. ')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4890.png','group-4890@2x.png'],'title' => 'Create digital checklists','desc' => 'Create customised, digital checklists, tailored to meet your needs, within minutes. Organise workflows to make sure it gets done by the right person at the right time.'],
            ['srcset' => ['group-5149.png','group-5149@2x.png'],'title' => 'Conduct via app','desc' => 'Conduct digital checklists, whether with a tablet or smartphone, Android, or iOS – online or offline.'],
            ['srcset' => ['group-4844.png','group-4844@2x.png'],'title' => 'Solve issues','desc' => 'Don’t waste time on tedious issue reportings. Let issue automation do it for you. Simplify workflows, reduce errors, and save time for solving even more important problems.'],
            ['srcset' => ['group-4846.png','group-4846@2x.png'],'title' => 'Results, reports','desc' => 'Don’t waste time on post-processing and digitisation of checklist reports – everything is fully automated. Uncover areas of your business that need your attention, and continuously improve quality and safety, through in-depth analyses.'],
            ],
            'features' => ['url' => '#','text' => 'Explore more PRODUCT features']
            ])

        </div>
    </section>
    @include('components.solution.industries_explore_section',[
    'heading' => 'See how Lumiform helps teams with <span class="line__break"></span> <span class="text-light-blue">digital checklists and workflows</span>  ',
    'items' => [
    ['image' => 'checklists-warehouse-safety.png','srcset' => ['checklists-warehouse-safety.png','checklists-warehouse-safety@2x.png'],'template' => ['url' => '#','text' => 'View logistics checklist CASE STUDY'] ],
    ['image' => 'checklists-food-premises.png','srcset' => ['checklists-food-premises.png','checklists-food-premises@2x.png'],'template' => ['url' => '#','text' => 'View food checklist CASE STUDY'] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'heart-blue.png',
    'class' => 'bg-blue-light',
    'text' => '“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“',
    'position' => '- Karina, Team Lead Quality and Energy Management',
    ])
    @include('components.use-cases.section_companies')
    @include('components.product.bottom_form',[
    'heading' =>'Conduct digital checklists via app - free of charge!',
    'sectionBg' =>'green-light',
    'buttonBg' =>'green-dark',
    'image' =>'group-1943.svg',
    'left' => true
    ])
@endsection
