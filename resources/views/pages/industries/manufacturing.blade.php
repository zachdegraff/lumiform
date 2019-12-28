@extends('layout/base')

@section("head.title", __("industry/manufacturing.title"))
@section('meta-tags')
    @foreach(__('industry/manufacturing.keywords') as $keyword)
        <meta name="keywords" content="{{$keyword}}">
    @endforeach
    <meta name="description" content="@lang('industry/manufacturing.description')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
    'imageBg' => 'manufacturing-banner.png',
    'class' => 'w-8/12',
     'heading' => __('industry/manufacturing.bannerTitle'),
    'text' => __('industry/manufacturing.bannerText'),
    ])

    <section class="py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 mb-32 uppercase tracking-heading">
                @lang('Lumiform is the best way for manufacturers to …')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/star-icon_gold.svg',
                'heading' => '<span class="text-gold">Improve quality</span>',
                'color' => 'gold',
                'text' => 'Conduct standardised inspections in time and solve issues quickly. which means less expensive machine downtimes and better output.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/risk-icon_orange.svg',
                'heading' => '<span class="text-gold">Reduce risk in the workplace</span>',
                'color' => 'light-blue',
                'text' => 'Get real-time insights into manufacturing plants, which results in decreased incidents and safety compliance.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon_green.svg',
                'heading' => 'Cut inspection time by 30%',
                'color' => 'green',
                'text' => 'Not only does each individual inspection take less time, but the automated issue management and fast analysis save time as well.',
                ])
            </div>
            <a href="#"
               class="font-extrabold w-290 mt-5 flex justify-center items-center mx-auto bg-red text-white uppercase font-cocogoose text-17 text-20 tracking-large  h-50 xxl:h-70 px-8 rounded-20">
                @lang('Get Lumiform FREE')
            </a>
        </div>
    </section>
    <section class="py-32">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-gold">Increase quality and safety</span> in manufacturing plants')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-20">
                @lang('Easily perform regular safety and quality checks and report issues immediately while getting standardized data from the field.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-2832.png','group-2832@2x.png'],'title' => 'Create forms','desc' => 'Create forms for inspections and audits within minutes. Organise checks to ensure that it is done reliably in the field.'],
            ['srcset' => ['group-2834.png','group-2834@2x.png'],'title' => 'Conduct via App','desc' => 'Conduct inspections and audits, whether with a tablet or smartphone, Android or iOS – online or offline.'],
            ['srcset' => ['group-3430.png','group-3430@2x.png'],'title' => 'Solve Issues','desc' => 'Make sure all issues can be easily reported as soon as they occur and troubleshooting is ensured by the whole team.'],
            ['srcset' => ['group-4750.png','group-4750@2x.png'],'title' => 'Results, Reports and Analyses','desc' => 'Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover areas that need attention in your manufacturing plant.'],
            ],
            'features' => ['url' => '#','text' => 'Explore more PRODUCT features']
            ])


        </div>
    </section>

    <section class="py-24">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-40 font-cocogoose tracking-heading font-bold mb-32">
                @lang('<span class="text-blue">Digitise all the paperwork </span>in manufacturing plants')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'list-icon_blue.svg', 'text' => '5S Audits'],
                ['icon' => 'safe-icon_gold.svg', 'text' => 'Work safety audits'],
                ['icon' => 'glass-icon_orange.svg', 'text' => 'Commission inspections'],
                ['icon' => 'walk-icon_green.svg', 'text' => 'Gemma walk'],
                ['icon' => 'building-icon_purple.svg', 'text' => 'Service reports'],
                ['icon' => 'tool-icon_orange.svg', 'text' => 'Repair checklists'],
                ['icon' => 'caution-icon_gold.svg', 'text' => 'Risk assessment'],
                ['icon' => 'fire-icon_red.svg', 'text' => 'Fire door inspection'],
                ['icon' => 'tools-icon_orange.svg', 'text' => 'Maintenance reports'],
                ['icon' => 'walk-icon_gold.svg', 'text' => 'Safety walks'],
                ['icon' => 'forklift-icon_blue.svg', 'text' => 'Forklift Truck Operator Safety Evaluation'],
                ['icon' => 'home-icon_purple.svg', 'text' => 'Warehouse inspection'],
                ['icon' => 'list-icon_red.svg', 'text' => 'Defect forms'],
                ['icon' => 'glass-caution-icon_orange.svg', 'text' => 'Fault analysis'],
                ['icon' => 'building-icon_purple.svg', 'text' => 'Facility review'],
                ['icon' => 'glass-safe-icon_blue.svg', 'text' => 'Safety observation tours'],
                ]
                ])
            </div>
            <a href="#"
               class="flex items-center uppercase justify-center text-red text-center block text-17 lg:text-20 tracking-large mt-10">
                @lang('View all Manufacturing use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => 'Browse <span class="text-green"> best practices manufacturing </span> forms',
        'text' =>  'Browse the Lumiform template library for tons of resources to walk you through best practices in the manufacturing industry. ',
        'items' => [
                ['image' => 'manufacturing-audit.png','srcset' => ['manufacturing-audit.png','manufacturing-audit@2x.png'],'text' => '5S audit'],
                ['image' => 'facility-vehicle-inspection.png','srcset' => ['facility-vehicle-inspection.png','facility-vehicle-inspection@2x.png'],'text' => 'facility review'],
                ['image' => 'construction-weekly.png','srcset' => ['construction-weekly.png','construction-weekly@2x.png'],'text' => 'high risk machine safety checklist'],
                ['image' => 'manufacturing-safety-assessment.png','srcset' => ['manufacturing-safety-assessment.png','manufacturing-safety-assessment@2x.png'],'text' => 'safety assessment of worklift driver'],
                ['image' => 'manufacturing-general-risk-assessment.png','srcset' => ['manufacturing-general-risk-assessment.png','manufacturing-general-risk-assessment@2x.png'],'text' => 'general risk assessment'],
                ['image' => 'manufacturing-gemba-walk.png','srcset' => ['manufacturing-gemba-walk.png','manufacturing-gemba-walk@2x.png'],'text' => 'gemba walk checklist'],
            ],
        'image' => 'group-1514.svg',
        'template' => ['text' => 'View all TEMPLATES','url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => 'Explore how <span class="text-purple"> leaders in the food industry </span> use Lumiform',
    'items' => [
    ['image' => 'manufacturing-inspection.png','srcset' => ['manufacturing-inspection.png','manufacturing-inspection@2x.png'],'template' => ['url' => '#','text' => 'View INSPECTIOn CASE STUDY'] ],
    ['image' => 'manufacturing-5s-audit.png','srcset' => ['manufacturing-5s-audit.png','manufacturing-5s-audit@2x.png'],'template' => ['url' => '#','text' => 'View AUDIT CASE STUDY'] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'group-1131.svg',
    'class' => 'bg-purple-extralight',
    'text' => '“In the past, we used paper, pen and camera for our audit reports. Now we can use Lumiform and we get everything we need in one tool.“',
    'position' => '- VIP, TItle <br> Company Name',
    ])
    @include('components.product.bottom_form',[
    'heading' =>'Start improving quality and safety now – free of charge!',
    'sectionBg' =>'purple-light',
    'buttonBg' =>'purple',
    'image' =>'img/group-2013.svg',
    ])
@endsection
