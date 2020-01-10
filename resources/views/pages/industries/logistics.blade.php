@extends('layout/base')

@section("head.title", __("Transport & Logistics Inspection Software - FREE - Lumiform"))
@section('meta-tags')
    <meta name="keywords" content="@lang('Transport Inspection software')">
    <meta name="keywords" content="@lang('Transport & logistics')">
    <meta name="description" content="@lang('Quickstart with easy and flexible transport and logistics inspection software to keep your workplace and vehicles safe. FOR FREE!')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
  'imageBg' => 'logistics-banner.png',
  'class' => 'lg:w-9/12',
  'heading' => __('Safer logistic and transportation procedures'),
  'text' => __('Create a safer workplace with individual safety and quality forms.<span class="line__break"></span>
Ensure reliable vehicles and better drivers with the Lumiform mobile inspection app.'),
  ])
    <section class="py-16 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('Lumiform is the easiest way for construction companies to…')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/track-icon_red.svg',
                'heading' => __('Avoid costly damage to vehicles'),
                'color' => 'red',
                'text' => __('Improve vehicle quality through regular vehicle inspections. Make sure inspectors conduct checks in time and fix issues immediately.'),
                'width' => '450'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon_blue.svg',
                'heading' => __('Cut inspection time by 30%'),
                'color' => 'light-blue',
                'text' => __('Not only does each individual inspection take less time, but the automated issue management and fast analysis also save time.'),
                'width' => '420'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/safe-icon_orange.svg',
                'heading' => __('Enhance safety'),
                'color' => 'green',
                'text' => __('Fix issues immediately, in case of deviations from the standards, and meet all safety standards in terms of your transport and logistics initiatives.'),
                'width' => '470'
                ])
            </div>
            <a href="#"
               class="font-extrabold w-290 mt-5 flex justify-center items-center mx-auto bg-red text-white uppercase font-cocogoose text-20 tracking-large  h-50 xxl:h-70 px-8 rounded-20">
                @lang('Get Lumiform FREE')
            </a>
        </div>
    </section>
    <section class="py-16 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-light-blue">Ensure safe procedures </span> in the logistics industry')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-10 lg:mb-20">
                @lang('Empower your team in the field to conduct frequent inspections in an easy and simple way.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-2995.png','group-2995@2x.png'],'title' => __('Create forms'),'desc' => __('Create custom forms within minutes. Organise inspections to make sure the right person does all the checklists reliably.')],
            ['srcset' => ['group-4773.png','group-4773@2x.png'],'title' => __('Conduct via App'),'desc' => __('Conduct audits and inspections whether with a tablet or smartphone, Android or iOS – online or offline.')],
            ['srcset' => ['group-5134.png','group-5134@2x.png'],'title' => __('Solve Issues'),'desc' => __('Make sure all inspectors can easily report issues. Keep track of the progress, and solve issues together as a team.')],
            ['srcset' => ['group-4775.png','group-4775@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover areas of your logistics and transportation process that need your attention.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])


        </div>
    </section>
    <section class="py-16 lg:py-24 with__border--bottom">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-50 font-cocogoose tracking-heading font-bold mb-10 lg:mb-32">
                @lang('<span class="text-gold">Implement all your quality and <span class="line__break"></span> safety inspections </span>within Lumiform ')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'track-icon_blue.svg', 'text' => __('Vehicle inspection')],
                ['icon' => 'pallet-icon_orange.svg', 'text' => __('Pallet inspection')],
                ['icon' => 'car-icon_purple.svg', 'text' => __('Driver audit')],
                ['icon' => 'rack-icon_blue.svg', 'text' => __('Rack inspection')],
                ['icon' => 'departure-icon_gold.svg', 'text' => __('Departure control')],
                ['icon' => 'face-sad-icon_red.svg', 'text' => __('Complaint forms')],
                ['icon' => 'home-icon_blue.svg', 'text' => __('Warehouse inspections')],
                ['icon' => 'chat-icon_green.svg', 'text' => __('Customers and driver feedback')],
                ['icon' => 'danger-icon_gold.svg', 'text' => __('Dangerous goods control')],
                ['icon' => 'left-icon_orange.svg', 'text' => __('Returns documentation')],
                ['icon' => 'proof-icon_blue.svg', 'text' => __('Proofs of delivery')],
                ['icon' => 'bills-icon_purple.svg', 'text' => __('Bills of delivery')],
                ['icon' => 'incoming-icon_purple.svg', 'text' => __('Incoming goods inspection')],
                ['icon' => 'spare-icon_gold.svg', 'text' => __('Spare parts supply')],
                ['icon' => 'inventory-icon_orange.svg', 'text' => __('Inventory control')],
                ['icon' => 'log-icon_purple.svg', 'text' => __('Driver’s log')],
                ]
                ])
            </div>
            <a href="#"
               class="flex items-center uppercase justify-center text-red text-center block text-20 tracking-large mt-10">
                @lang('View all logistics use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => __('<span class="text-green">Ready-to-use checklists </span> for logistics and transportation'),
        'text' =>  __('Get inspired by numerous ready-to-use templates for your security checks, and audits. Customise them to suit your needs.'),
        'items' => [
                ['image' => 'inspections-osha-self-inspection.png','srcset' => ['inspections-osha-self-inspection.png','inspections-osha-self-inspection@2x.png'],'text' => __('Driver field audit')],
                ['image' => 'logistic&transportation-rail-safet-check.png','srcset' => ['logistic&transportation-rail-safet-check.png','logistic&transportation-rail-safet-check@2x.png'],'text' => __('Rail Safety check')],
                ['image' => 'logistic&transportation-driver-assessment.png','srcset' => ['logistic&transportation-driver-assessment.png','logistic&transportation-driver-assessment@2x.png'],'text' => __('Driver assessment')],
                ['image' => 'logistic&transportation-monthly-tank-inspection.png','srcset' => ['logistic&transportation-monthly-tank-inspection.png','logistic&transportation-monthly-tank-inspection@2x.png'],'text' => __('Monthly Tank Inspection')],
                ['image' => 'logistic&transportation-heavy-vehicle-inspection.png','srcset' => ['logistic&transportation-heavy-vehicle-inspection.png','logistic&transportation-heavy-vehicle-inspection@2x.png'],'text' => __('Heavy vehicle inspection')],
                ['image' => 'logistic&transportation-vehicle-defect-report.png','srcset' => ['logistic&transportation-vehicle-defect-report.png','logistic&transportation-vehicle-defect-report@2x.png'],'text' => __('Vehicle defect report')],
            ],
        'image' => 'group-4813.png',
        'template' => ['text' => __('View all TEMPLATES'),'url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => __('Read success stories about <span class="text-light-gold"> <span class="line__break"></span>
Logistics Professionals </span> who use Lumiform'),
    'items' => [
    ['image' => 'logistic-inspection.png','srcset' => ['logistic-inspection.png','logistic-inspection@2x.png'],'template' => ['url' => '#','text' => __('View logistics INSPECTIOn CASE STUDY')] ],
    ['image' => 'logistic-audit.png','srcset' => ['logistic-audit.png','logistic-audit@2x.png'],'template' => ['url' => '#','text' => __('View logistics AUDIT CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'heart-blue.png',
    'class' => 'bg-blue-light',
    'text' => __('“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“'),
    'position' => __('- Karina,Team Lead Quality and Energy Management'),
    ])
    @include('components.product.bottom_form',[
    'heading' => __('Improve security in transportation and logistics – <span class="line__break"></span> Start free of charge!'),
    'sectionBg' =>'green-opacity',
    'buttonBg' =>'green',
    'image' =>'img/group-5137.png',
    'srcset' => ['group-5137.png','group-5137@2x.png'],
    'left' => true
    ])
@endsection
