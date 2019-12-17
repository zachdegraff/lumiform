@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section class="pt-32 pb-40"
             style="
                     background-image: url('{{asset('img/group-4015.png')}}');
                     background-color: #FAFBFB;
                     background-size: 100% 100%;
                     background-repeat: no-repeat;"
    >
        <div class="container mx-auto">
            <div class="w-10/12 mx-auto mb-20">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary mb-16">
                    @lang('Digital inspections: <span class="line__break"></span> easy to handle, for everyone')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('The Lumform app is so easy to handle that anyone can perform standardized, effective inspections in the field - really anyone!')
                </p>
            </div>
            <button class="mx-auto w-215  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-17 lg:text-20 h-70  rounded-20 items-center justify-center flex">
                @lang('try for FREE')
            </button>
        </div>
    </section>
    <section class="py-24 with__border--bottom">
        @include('components.use-cases.image_text_horizontal',[
        'heading' => 'Make sure all tasks are <span class="text-light-blue">done reliably, and in time</span> ',
        'image' => ['group-4965.png','group-4965@2x.png'],
        'items' => [
        'Organise all inspections by scheduling, assigning and tracking all inspections',
        'Raise all issues immediately, assign corrective actions and track the progress of troubleshooting'
        ],
        'bottom' => ['text' => 'Pizza Hut increased the rate of reported issues by 50% in the first year..','borderColor' => 'light-blue']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-red">Improve quality and safety</span>',
        'image' => ['group-5001.png','group-5001@2x.png'],
        'reversed' => true,
        'items' => [
        'Uncover more quality and safety issues, through standardised inspections and raising of issues',
        'Get an overview of raised issues and manage corrective actions remotely, with ease'
        ],
        'bottom' => ['text' => 'With Lumiform, Kitchentown has increased its problem-solving rate three-fold.','borderColor' => 'red']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-green">Save time and money</span>',
        'image' => ['group-3433.png','group-3433@2x.png'],
        'items' => [
        'More inspections uncover more issues, which can be solved more quickly with Lumiform',
        'Analyse inspections and identify areas with poor quality and safety performance in a snap',
        ],
        'bottom' => ['text' => 'With Lumiform, Benfleet managed to solve issues 60% faster.','borderColor' => 'green']
        ])
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-xl h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
    </section>
    <section class="py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-purple">Create transparency </span> with digital inspections')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-20">
                @lang('Customize inspections and workflows to fit your company’s quality and <span class="line__break"> </span> safety standards — so everyone tackles the right tasks at the right time.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4629.png','group-4629@2x.png'],'title' => 'Create inspection checklists','desc' => 'Create inspections within minutes, according to your individual needs, and ensure transparency through comprehensive form standards.'],
            ['srcset' => ['group-4839.png','group-4839@2x.png'],'title' => 'Organise inspections','desc' => 'Pre-define all inspection workflows. Assign and schedule inspections, in order to make sure the right person does them reliably.'],
            ['srcset' => ['group-4840.png','group-4840@2x.png'],'title' => 'Conduct via app','desc' => 'Conduct inspections anytime, anywhere, via the inspection app – online and offline. Add photos and comments easily, during the inspection.'],
            ['srcset' => ['group-4469.png','group-4469@2x.png'],'title' => 'Solve Issues','desc' => 'Raise issues on-the-fly, as soon as they occur during an inspection. Assign actions immediately, in order to solve any issues as quickly as possible. Track troubleshooting in real-time.'],
            ['srcset' => ['group-4841.png','group-4841@2x.png'],'title' => 'Results, Reports and Analyses','desc' => 'The system creates inspection reports automatically, so you don’t waste time on post-processing and digitisation. Uncover areas of your business that need your attention.'],
            ]
            ])
            <a href="#"
               class="flex items-center justify-center uppercase text-red text-center block text-17 lg:text-20 tracking-large lg:mt-24">
                @lang('Explore more PRODUCT features')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>

        </div>
    </section>
    @include('components.solution.industries_explore_section',[
    'heading' => '<span class="text-green">Improve your inspection workflows </span> like industry leaders',
    'items' => [
    ['image' => 'inspections-general-workplace.png','srcset' => ['inspections-general-workplace.png','inspections-general-workplace@2x.png'],'template' => ['url' => '#','text' => 'View facility management inspection CASE STUDY'] ],
    ['image' => 'inspections-food-safety-large.png','srcset' => ['inspections-food-safety-large.png','inspections-food-safety-large@2x.png'],'template' => ['url' => '#','text' => 'View food inspection CASE STUDY'] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'group-1131.svg',
    'class' => 'bg-purple-extralight',
    'text' => '“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“',
    'position' => '- Mark, HSE-Manager',
    ])
    @include('components.use-cases.section_companies')
    @include('components.product.bottom_form',[
    'heading' =>'Start digitising your inspections now – free of charge!',
    'sectionBg' =>'purple-light',
    'srcset' => ['group-2190.png','group-2190@2x.png'],
    'buttonBg' =>'purple',
    'image' =>'img/group-2028.svg',
    ])
@endsection
