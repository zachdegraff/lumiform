@extends('layout/base')

@section("head.title", __("Manufacturing Inspection Software - FREE - Lumiform"))
@section('meta-tags')
    <meta name="keywords" content="@lang('Manufacturing quality software')">
    <meta name="keywords" content="@lang('Manufacturing inspection software')">
    <meta name="description" content="@lang('Start with the Lumiform manufacturing quality software and manufacturing inspection App to increase the quality of your products. FOR FREE!')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
    'imageBg' => 'manufacturing-banner.png',
    'class' => 'w-8/12',
     'heading' => __('Improve quality and safety in manufacturing plants'),
    'text' => __('Check regularly whether quality and safety standards are met during the manufacturing process and act quickly as soon as errors occur.'),
    ])

    <section class="py-16 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('Lumiform is the best way for manufacturers to …')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/star-icon_gold.svg',
                'heading' => __('<span class="text-gold">Improve quality</span>'),
                'color' => 'gold',
                'text' => __('Conduct standardised inspections in time and solve issues quickly. which means less expensive machine downtimes and better output.'),
                'width' => '450'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/risk-icon_orange.svg',
                'heading' => __('<span class="text-gold">Reduce risk in the workplace</span>'),
                'color' => 'light-blue',
                'text' => __('Get real-time insights into manufacturing plants, which results in decreased incidents and safety compliance.'),
                'width' => '460'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon_green.svg',
                'heading' => __('Cut inspection time by 30%'),
                'color' => 'green',
                'text' => __('Not only does each individual inspection take less time, but the automated issue management and fast analysis save time as well.'),
                'width' => '440'
                ])
            </div>
            <a href="#"
               class="font-extrabold w-290 mt-5 flex justify-center items-center mx-auto bg-red text-white uppercase font-cocogoose text-17 text-20 tracking-large  h-50 xxl:h-70 px-8 rounded-20">
                @lang('Get Lumiform FREE')
            </a>
        </div>
    </section>
    <section class="py-16 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-gold">Increase quality and safety</span> in manufacturing plants')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-10 lg:mb-20">
                @lang('Easily perform regular safety and quality checks and report issues immediately while getting standardized data from the field.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-2832.png','group-2832@2x.png'],'title' => __('Create forms'),'desc' => __('Create forms for inspections and audits within minutes. Organise checks to ensure that it is done reliably in the field.')],
            ['srcset' => ['group-4748.png','group-4748@2x.png'],'title' => __('Conduct via App'),'desc' => __('Conduct inspections and audits, whether with a tablet or smartphone, Android or iOS – online or offline.')],
            ['srcset' => ['group-5135.png','group-5135@2x.png'],'title' => __('Solve Issues'),'desc' => __('Make sure all issues can be easily reported as soon as they occur and troubleshooting is ensured by the whole team.')],
            ['srcset' => ['group-4750.png','group-4750@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover areas that need attention in your manufacturing plant.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])


        </div>
    </section>

    <section class=" py-16 lg:py-24">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-50 font-cocogoose tracking-heading font-bold mb-10 lg:mb-32">
                @lang('<span class="text-light-blue">Digitise all the paperwork </span>in manufacturing plants')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'list-icon_blue.svg', 'text' => __('5S Audits')],
                ['icon' => 'safe-icon_gold.svg', 'text' => __('Work safety audits')],
                ['icon' => 'glass-icon_orange.svg', 'text' => __('Commission inspections')],
                ['icon' => 'walk-icon_green.svg', 'text' => __('Gemma walk')],
                ['icon' => 'building-icon_purple.svg', 'text' => __('Service reports')],
                ['icon' => 'tool-icon_orange.svg', 'text' => __('Repair checklists')],
                ['icon' => 'caution-icon_gold.svg', 'text' => __('Risk assessment')],
                ['icon' => 'fire-icon_red.svg', 'text' => __('Fire door inspection')],
                ['icon' => 'tools-icon_orange.svg', 'text' => __('Maintenance reports')],
                ['icon' => 'walk-icon_gold.svg', 'text' => __('Safety walks')],
                ['icon' => 'forklift-icon_blue.svg', 'text' => __('Forklift Truck Operator Safety Evaluation')],
                ['icon' => 'home-icon_purple.svg', 'text' => __('Warehouse inspection')],
                ['icon' => 'list-icon_red.svg', 'text' => __('Defect forms')],
                ['icon' => 'glass-caution-icon_orange.svg', 'text' => __('Fault analysis')],
                ['icon' => 'building-icon_purple.svg', 'text' => __('Facility review')],
                ['icon' => 'glass-safe-icon_blue.svg', 'text' => __('Safety observation tours')],
                ]
                ])
            </div>
            <a href="#"
               class="flex items-center uppercase justify-center text-red text-center block text-20 tracking-large mt-10">
                @lang('View all Manufacturing use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => __('Browse <span class="text-green"> best practices manufacturing </span> forms'),
        'text' =>  __('Browse the Lumiform template library for tons of resources to walk you through best practices in the manufacturing industry. '),
        'items' => [
                ['image' => 'manufacturing-audit.png','srcset' => ['manufacturing-audit.png','manufacturing-audit@2x.png'],'text' => __('5S audit')],
                ['image' => 'facility-vehicle-inspection.png','srcset' => ['facility-vehicle-inspection.png','facility-vehicle-inspection@2x.png'],'text' => __('facility review')],
                ['image' => 'construction-weekly.png','srcset' => ['construction-weekly.png','construction-weekly@2x.png'],'text' => __('high risk machine safety checklist')],
                ['image' => 'manufacturing-safety-assessment.png','srcset' => ['manufacturing-safety-assessment.png','manufacturing-safety-assessment@2x.png'],'text' => __('safety assessment of worklift driver')],
                ['image' => 'manufacturing-general-risk-assessment.png','srcset' => ['manufacturing-general-risk-assessment.png','manufacturing-general-risk-assessment@2x.png'],'text' => __('general risk assessment')],
                ['image' => 'manufacturing-gemba-walk.png','srcset' => ['manufacturing-gemba-walk.png','manufacturing-gemba-walk@2x.png'],'text' => __('gemba walk checklist')],
            ],
        'image' => 'group-1514.svg',
        'template' => ['text' => __('View all TEMPLATES'),'url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => __('Explore how leaders in the <span class="line__break"></span>
 <span class="text-purple">Manufacturing industry </span>use Lumiform'),
    'items' => [
    ['image' => 'manufacturing-inspection.png','srcset' => ['manufacturing-inspection.png','manufacturing-inspection@2x.png'],'template' => ['url' => '#','text' => __('View INSPECTIOn CASE STUDY')] ],
    ['image' => 'manufacturing-5s-audit.png','srcset' => ['manufacturing-5s-audit.png','manufacturing-5s-audit@2x.png'],'template' => ['url' => '#','text' => __('View AUDIT CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'group-1131.svg',
    'class' => 'bg-purple-extralight',
    'text' => __('“In the past, we used paper, pen and camera for our audit reports. Now we can use Lumiform and we get everything we need in one tool.“'),
    'position' => __('- Mark,  <br> HSE-Manager'),
    ])
    @include('components.product.bottom_form',[
    'heading' => __('Start improving quality and safety now – free of charge!'),
    'sectionBg' =>'purple-light',
    'buttonBg' =>'purple',
    'image' =>'img/group-2013.svg',
    ])
@endsection
