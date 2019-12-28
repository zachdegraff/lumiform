@extends('layout/base')

@section("head.title", __("industry/logistics.title"))
@section('meta-tags')
    @foreach(__('industry/logistics.keywords') as $keyword)
        <meta name="keywords" content="{{$keyword}}">
    @endforeach
    <meta name="description" content="@lang('industry/logistics.description')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
  'imageBg' => 'logistics-banner.png',
  'class' => 'w-9/12',
  'heading' => __('industry/logistics.bannerTitle'),
  'text' => __('industry/logistics.bannerText'),
  ])
    <section class="py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 mb-32 uppercase tracking-heading">
                @lang('Lumiform is the easiest way for construction companies to…')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/track-icon_red.svg',
                'heading' => 'Avoid costly damage to vehicles',
                'color' => 'red',
                'text' => 'Improve vehicle quality through regular vehicle inspections. Make sure inspectors conduct checks in time and fix issues immediately.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon_blue.svg',
                'heading' => 'Cut inspection time by 30%',
                'color' => 'light-blue',
                'text' => 'Not only does each individual inspection take less time, but the automated issue management and fast analysis also save time.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/safe-icon_orange.svg',
                'heading' => 'Enhance safety',
                'color' => 'green',
                'text' => 'Fix issues immediately, in case of deviations from the standards, and meet all safety standards in terms of your transport and logistics initiatives.',
                ])
            </div>
            <a href="#"
               class="font-extrabold w-290 mt-5 flex justify-center items-center mx-auto bg-red text-white uppercase font-cocogoose text-17 text-20 tracking-large  h-50 xxl:h-70 px-8 rounded-20">
                @lang('Get Lumiform FREE')
            </a>
        </div>
    </section>
    <section class="py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-gold">Ensure safe procedures </span> in the logistics industry')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-20">
                @lang('Empower your team in the field to conduct frequent inspections in an easy and simple way.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-2995.png','group-2995@2x.png'],'title' => 'Create forms','desc' => 'Create custom forms within minutes. Organise inspections to make sure the right person does all the checklists reliably.'],
            ['srcset' => ['group-4773.png','group-4773@2x.png'],'title' => 'Conduct via App','desc' => 'Conduct audits and inspections whether with a tablet or smartphone, Android or iOS – online or offline.'],
            ['srcset' => ['group-3430.png','group-3430@2x.png'],'title' => 'Solve Issues','desc' => 'Make sure all inspectors can easily report issues. Keep track of the progress, and solve issues together as a team.'],
            ['srcset' => ['group-4750.png','group-4750@2x.png'],'title' => 'Results, Reports and Analyses','desc' => 'Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover areas of your logistics and transportation process that need your attention.'],
            ],
            'features' => ['url' => '#','text' => 'Explore more PRODUCT features']
            ])


        </div>
    </section>
    <section class="py-24 with__border--bottom">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-40 font-cocogoose tracking-heading font-bold mb-32">
                @lang('<span class="text-gold">Implement all your quality and <span class="line__break"></span> safety inspections </span>within Lumiform ')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'track-icon_blue.svg', 'text' => 'Vehicle inspection'],
                ['icon' => 'pallet-icon_orange.svg', 'text' => 'Pallet inspection'],
                ['icon' => 'car-icon_purple.svg', 'text' => 'Driver audit'],
                ['icon' => 'rack-icon_blue.svg', 'text' => 'Rack inspection'],
                ['icon' => 'departure-icon_gold.svg', 'text' => 'Departure control'],
                ['icon' => 'face-sad-icon_red.svg', 'text' => 'Complaint forms'],
                ['icon' => 'home-icon_blue.svg', 'text' => 'Warehouse inspections'],
                ['icon' => 'chat-icon_green.svg', 'text' => 'Customers and driver feedback'],
                ['icon' => 'danger-icon_gold.svg', 'text' => 'Dangerous goods control'],
                ['icon' => 'left-icon_orange.svg', 'text' => 'Returns documentation'],
                ['icon' => 'proof-icon_blue.svg', 'text' => 'Proofs of delivery'],
                ['icon' => 'bills-icon_purple.svg', 'text' => 'Bills of delivery'],
                ['icon' => 'incoming-icon_purple.svg', 'text' => 'Incoming goods inspection'],
                ['icon' => 'spare-icon_gold.svg', 'text' => 'Spare parts supply'],
                ['icon' => 'inventory-icon_orange.svg', 'text' => 'Inventory control'],
                ['icon' => 'log-icon_purple.svg', 'text' => 'Driver’s log'],
                ]
                ])
            </div>
            <a href="#"
               class="flex items-center uppercase justify-center text-red text-center block text-17 lg:text-20 tracking-large mt-10">
                @lang('View all logistics use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => '<span class="text-green">Ready-to-use checklists </span> for logistics and transportation',
        'text' =>  'Get inspired by numerous ready-to-use templates for your security checks, and audits. Customise them to suit your needs.',
        'items' => [
                ['image' => 'inspections-osha-self-inspection.png','srcset' => ['inspections-osha-self-inspection.png','inspections-osha-self-inspection@2x.png'],'text' => 'Driver field audit'],
                ['image' => 'logistic&transportation-rail-safet-check.png','srcset' => ['logistic&transportation-rail-safet-check.png','logistic&transportation-rail-safet-check@2x.png'],'text' => 'Rail Safety check'],
                ['image' => 'logistic&transportation-driver-assessment.png','srcset' => ['logistic&transportation-driver-assessment.png','logistic&transportation-driver-assessment@2x.png'],'text' => 'Driver assessment'],
                ['image' => 'logistic&transportation-monthly-tank-inspection.png','srcset' => ['logistic&transportation-monthly-tank-inspection.png','logistic&transportation-monthly-tank-inspection@2x.png'],'text' => 'Monthly Tank Inspection'],
                ['image' => 'logistic&transportation-heavy-vehicle-inspection.png','srcset' => ['logistic&transportation-heavy-vehicle-inspection.png','logistic&transportation-heavy-vehicle-inspection@2x.png'],'text' => 'Heavy vehicle inspection'],
                ['image' => 'logistic&transportation-vehicle-defect-report.png','srcset' => ['logistic&transportation-vehicle-defect-report.png','logistic&transportation-vehicle-defect-report@2x.png'],'text' => 'Vehicle defect report'],
            ],
        'image' => 'group-4813.png',
        'template' => ['text' => 'View all TEMPLATES','url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => 'Read success stories about <span class="text-gold"> <span class="line__break"></span>
Logistics Professionals </span> who use Lumiform',
    'items' => [
    ['image' => 'logistic-inspection.png','srcset' => ['logistic-inspection.png','logistic-inspection@2x.png'],'template' => ['url' => '#','text' => 'View logistics INSPECTIOn CASE STUDY'] ],
    ['image' => 'logistic-audit.png','srcset' => ['logistic-audit.png','logistic-audit@2x.png'],'template' => ['url' => '#','text' => 'View logistics AUDIT CASE STUDY'] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'heart-blue.png',
    'class' => 'bg-blue-light',
    'text' => '“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“',
    'position' => '- Karina,Team Lead Quality and Energy Management',
    ])
    @include('components.product.bottom_form',[
    'heading' =>'Improve security in transportation and logistics – <span class="line__break"></span> Start free of charge!',
    'sectionBg' =>'green-light',
    'buttonBg' =>'green-dark',
    'image' =>'img/group-5137.png',
    'srcset' => ['group-5137.png','group-5137@2x.png'],
    'left' => true
    ])
@endsection
