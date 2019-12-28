@extends('layout/base')

@section("head.title", __("use-cases/documentation.title"))
@section('meta-tags')
    @foreach(__('use-cases/documentation.keywords') as $keyword)
        <meta name="keywords" content="{{$keyword}}">
    @endforeach
    <meta name="description" content="@lang('use-cases/documentation.description')">
@endsection

@section("content")
    <section class="py-26"
             style="
                     background-image: url('{{asset('img/group-5144.png')}}');
                     background-color: #FAFBFB;
                     background-size: 100% 100%;
                     background-repeat: no-repeat;
                     background-position-y: bottom;
                     background-position-x: center;"
    >
        <div class="container mx-auto">
            <div class="w-10/12 mx-auto mb-24">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary mb-16 leading-tight">
                    @lang('use-cases/documentation.bannerTitle')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('use-cases/documentation.bannerText')
                </p>
            </div>
            <button class="mx-auto w-215  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-17 lg:text-20 h-70  rounded-20 items-center justify-center flex">
                @lang('use-cases/documentation.buttonText')
            </button>
        </div>
    </section>
    <section class="py-32 with__border--bottom">
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-light-blue">Cut documentation time </span> by 20%',
        'image' => ['group-4912.png','group-4912@2x.png'],
        'items' => [
        'Automate the documentation of issues and corrective actions, while conducting checks more quickly.',
        'Digital documentation keeps data consistent across the entire company, saving time and money.'
        ],
        'bottom' => ['text' => 'Pizza Hut cut the time required for HACCP documentation by 20%.','borderColor' => 'light-blue']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-red">Increased security and compliance</span>',
        'image' => ['group-4771.png','group-4771@2x.png'],
        'reversed' => true,
        'items' => [
        'We document checklist results and troubleshooting procedures reliably and automatically. ',
        'Secure data without any danger of physical damage in the cloud.'
        ],
        'bottom' => ['text' => 'At MyGoodness, hygiene controls take 50% less time for the HACCP control, per store than before.','borderColor' => 'red']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-green">More transparency </span>',
        'image' => ['group-4900.png','group-4900@2x.png'],
        'items' => [
        'Digital documentation allows a constant overview of results, and full control over all documentation tasks.',
        'Digital documentations can be evaluated quickly with real-time results.',
        ],
        'bottom' => ['text' => 'With Lumiform, Pizza Hut has increased its problem-solving rate three-fold. ','borderColor' => 'green']
        ])
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-xl h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
    </section>
    <section class="py-28 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-50 lg:mb-2 uppercase tracking-heading">
                @lang('Provide <span class="text-light-blue"> compliant documentation </span>automatically')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-26">
                @lang('Digitise documentation in all areas of your business, conduct checks via <span class="line__break"></span> the app and get fully automated, fully compliant reports.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4888.png','group-4888@2x.png'],'title' => 'Create documents','desc' => 'Create custom forms for digital documentation in minutes. A variety of standardised templates help you to find the standard that’s right for you.'],
            ['srcset' => ['group-4434.png','group-4434@2x.png'],'title' => 'Conduct via App','desc' => 'Execute standardised documentation quickly and easily via the app - whether with a tablet or smartphone, Android, or iOS, online or offline. '],
            ['srcset' => ['group-4852.png','group-4852@2x.png'],'title' => 'Solve Issues','desc' => 'Assign issues on the fly, to the right person, so that you can resolve incidents efficiently together, as a team. The troubleshooting is automatically documented.'],
            ['srcset' => ['group-4853.png','group-4853@2x.png'],'title' => 'Results, Reports and Analyses','desc' => 'All documents are digitally archived, and they can be retrieved at any time, from anywhere. Filter functions allow a quick search for the right document.'],
            ],
            'features' => ['url' => '#','text' => 'Explore more PRODUCT features']
            ])

        </div>
    </section>
    @include('components.solution.industries_explore_section',[
    'heading' => 'See how we help teams to <span class="line__break"></span>
        <span class="text-green">have the right document </span>always on hand ',
    'items' => [
    ['image' => 'documentation-restaurant-cleaning-large.png','srcset' => ['documentation-restaurant-cleaning-large.png','documentation-restaurant-cleaning-large@2x.png'],'template' => ['url' => '#','text' => 'View restaurant documentation CASE STUDY'] ],
    ['image' => 'documentation-temperature.png','srcset' => ['documentation-temperature.png','documentation-temperature@2x.png'],'template' => ['url' => '#','text' => 'View HACCP documentation CASE STUDY'] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'quote-orange.png',
    'class' => 'bg-orange-extralight',
    'text' => '“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“',
    'position' => '- Christina, Head of Quality, Environmental and Safety Management',
    ])
    @include('components.use-cases.section_companies')
    @include('components.product.bottom_form',[
    'heading' =>'Fully automated documentation with Lumiform – free of charge!',
   'sectionBg' =>'gold',
    'buttonBg' =>'orange',
    'left' => true,
    'image' =>'group-2213.svg',
    ])
@endsection
