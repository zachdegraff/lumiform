@extends('layout/base')

@section("head.title", __(""))

@section("content")
    @include('components.solution.industries_banner_section',[
        'imageBg' => 'retail-banner.png',
        'class' => 'w-9/12 py-16',
        'heading' => 'Protect your retail brand',
        'text' => 'Ensure a positive on-site experience for your customers. Collect consistent data, standardise operations, identify areas that have failed and get problems resolved quickly!',
        ])
    <section class="py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 mb-32 uppercase tracking-heading">
                @lang('Retailers use Lumiform to …')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/brand-icon_blue.svg',
                'heading' => 'Create brand consistency',
                'color' => 'light-blue',
                'text' => 'Assess the in-store experience and report on brand consistency. Coordinate all aspects of brand experience from remote.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/home-icon_red.svg',
                'heading' => 'Reduce stock loss',
                'color' => 'red',
                'text' => 'Continuously track what’s causing stock shrinkage and identify the problem stores with Lumiform.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/improve-icon_purple.svg',
                'heading' => 'Improve PoS campaigns',
                'color' => 'purple',
                'text' => 'Use Lumiform’s checklists to roll out your next promotion or merchandise initiative faster, and get better results..',
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
                @lang('<span class="text-purple">Boost quality and safety standards </span> in your retail stores')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-20">
                @lang('Carry out regular inspections in the field to ensure consistent quality across all stores and improve brand awareness.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['title' => 'Create forms','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Conduct via App','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Automate temperature and humidity checks','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Solve Issues','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Results, Reports and Analyses','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ],
            'image' => 'group-2969.png',
            'srcset' => ['group-2969.png','group-2969@2x.png']
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
                @lang('<span class="text-green">Check all your quality standards </span> with one app')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'incoming-icon_blue.svg', 'text' => 'Incoming goods Inspection'],
                ['icon' => 'list-icon_purple.svg', 'text' => 'Opening checklist'],
                ['icon' => 'list-icon_blue.svg', 'text' => '6S Audit'],
                ['icon' => 'secure-icon_green.svg', 'text' => 'Security check'],
                ['icon' => 'home-icon_purple.svg', 'text' => 'Warehouse audit'],
                ['icon' => 'face-icon_green.svg', 'text' => 'Customer Satisfaction'],
                ['icon' => 'store-icon_blue.svg', 'text' => 'Store operation checklists'],
                ['icon' => 'safe-icon_gold.svg', 'text' => 'Work safety'],
                ['icon' => 'calc-icon_orange.svg', 'text' => 'Retail store audit'],
                ['icon' => 'drawer-icon_blue.svg', 'text' => 'Cleaning documentation'],
                ['icon' => 'employee-icon_purple.svg', 'text' => 'Employee training'],
                ['icon' => 'store-icon_green.svg', 'text' => 'Presentation checklist'],
                ['icon' => 'list-icon_blue.svg', 'text' => 'Employee survey'],
                ['icon' => 'inventory-icon_purple.svg', 'text' => 'Inventory checklist'],
                ['icon' => 'tshirt-icon_orange.svg', 'text' => 'Merchandising Checklist'],
                ['icon' => 'face-icon_red.svg', 'text' => 'Complaint forms'],
                ]
                ])
            </div>
            <a href="#"
               class="flex items-center uppercase justify-center text-red text-center block text-17 lg:text-20 tracking-large mt-10">
                @lang('View all retail use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => '<span class="text-light-blue">Quickstart with ready-to-use forms </span> for your retail store',
        'text' =>  'Lumiform offers an extensive template library, so you can roll out your quality and safety concept within minutes.',
        'items' => [
                ['image' => 'rect-35.svg','text' => '5S audit'],
                ['image' => 'rect-35.svg','text' => 'facility review'],
                ['image' => 'rect-35.svg','text' => 'high risk machine safety checklist'],
                ['image' => 'rect-35.svg','text' => 'safety assessment of worklift driver'],
                ['image' => 'rect-35.svg','text' => 'general risk assessment'],
                ['image' => 'rect-35.svg','text' => 'gemba walk checklist'],
            ],
        'image' => 'group-1622.png',
        'template' => ['text' => 'View all TEMPLATES','url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => '<span class="text-gold"> Read success stories </span> about retailers who use Lumiform',
    'items' => [
    ['image' => 'rect-840.png','srcset' => ['rect-840.png','rect-840@2x.png'],'template' => ['url' => '#','text' => 'View INSPECTIOn CASE STUDY'] ],
    ['image' => 'rect-840.png','srcset' => ['rect-840.png','rect-840@2x.png'],'template' => ['url' => '#','text' => 'View AUDIT CASE STUDY'] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'heart-blue.png',
    'class' => 'bg-blue-light',
    'text' => '„With Lumiform, we can streamline all the processes in the stores, and keep an exact overview of whether we are meeting the standards, at all times!“',
    'position' => '- Quoted Person, Client Company',
    ])
    @include('components.product.bottom_form',[
    'heading' =>'Equip your retail store and get started – free of charge!',
    'sectionBg' =>'blue',
    'buttonBg' =>'blue-dark',
    'image' =>'img/group-2028.svg',
    ])
@endsection

