@extends('layout/base')

@section("head.title", __(""))

@section("content")
    @include('components.solution.industries_banner_section',[
    'imageBg' => 'manufacturing-banner.png',
    'class' => 'w-8/12',
    'heading' => 'Improve quality and safety in manufacturing plants',
    'text' => 'Check regularly whether quality and safety standards are met during the manufacturing process and act quickly as soon as errors occur.',
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
            ['title' => 'Create forms','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Conduct via App','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Automate temperature and humidity checks','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Solve Issues','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Results, Reports and Analyses','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ],
            'image' => 'group-2832.png',
            'srcset' => ['group-2832.png','group-2832@2x.png']
            ])
            <a href="#"
               class="flex items-center justify-center uppercase text-red text-center block text-17 lg:text-20 tracking-large lg:mt-24">
                @lang('Explore more PRODUCT features')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>

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
                ['image' => 'rect-35.svg','text' => '5S audit'],
                ['image' => 'rect-35.svg','text' => 'facility review'],
                ['image' => 'rect-35.svg','text' => 'high risk machine safety checklist'],
                ['image' => 'rect-35.svg','text' => 'safety assessment of worklift driver'],
                ['image' => 'rect-35.svg','text' => 'general risk assessment'],
                ['image' => 'rect-35.svg','text' => 'gemba walk checklist'],
            ],
        'image' => 'group-1514.png',
        'template' => ['text' => 'View all TEMPLATES','url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => 'Explore how <span class="text-purple"> leaders in the food industry </span> use Lumiform',
    'items' => [
    ['image' => 'rect-840.png','srcset' => ['rect-840.png','rect-840@2x.png'],'template' => ['url' => '#','text' => 'View INSPECTIOn CASE STUDY'] ],
    ['image' => 'rect-840.png','srcset' => ['rect-840.png','rect-840@2x.png'],'template' => ['url' => '#','text' => 'View AUDIT CASE STUDY'] ],
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
