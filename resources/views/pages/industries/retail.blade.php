@extends('layout/base')

@section("head.title", __("industry/retail.title"))
@section('meta-tags')
    @foreach(__('industry/retail.keywords') as $keyword)
        <meta name="keywords" content="{{$keyword}}">
    @endforeach
    <meta name="description" content="@lang('industry/retail.description')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
        'imageBg' => 'retail-banner.png',
        'class' => 'w-9/12 py-16',
        'heading' =>  __('industry/retail.bannerTitle'),
        'text' => __('industry/retail.bannerText'),
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
            ['srcset' => ['group-2969.png','group-2969@2x.png'],'title' => 'Create forms','desc' => 'Create custom forms within minutes. Organise store audits and inspections to make sure they are done reliably.'],
            ['srcset' => ['group-4764.png','group-4764@2x.png'],'title' => 'Conduct via App','desc' => 'Conduct audits and inspections whether with a tablet or smartphone, Android or iOS – online or offline.'],
            ['srcset' => ['group-3430.png','group-3430@2x.png'],'title' => 'Solve Issues','desc' => 'Make all field workers can easily raise issues as soon as they occur. Keep track of the progress and solve them together, as a team.'],
            ['srcset' => ['group-4750.png','group-4750@2x.png'],'title' => 'Results, Reports and Analyses','desc' => 'Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover stores that need your attention through in-depth analyses.'],
            ],
            'features' => ['url' => '#','text' => 'Explore more PRODUCT features']
            ])

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
                ['image' => 'retail-cleaning-checklist.png','srcset' => ['retail-cleaning-checklist.png','retail-cleaning-checklist@2x.png'],'text' => '5S audit'],
                ['image' => 'retail-incoming-good.png','srcset' => ['retail-incoming-good.png','retail-incoming-good@2x.png'],'text' => 'facility review'],
                ['image' => 'construction-weekly.png','srcset' => ['construction-weekly.png','construction-weekly@2x.png'],'text' => 'high risk machine safety checklist'],
                ['image' => 'construction-daily.png','srcset' => ['construction-daily.png','construction-daily@2x.png'],'text' => 'safety assessment of worklift driver'],
                ['image' => 'retail-store.png','srcset' => ['retail-store.png','retail-store@2x.png'],'text' => 'general risk assessment'],
                ['image' => 'retail-customer.png','srcset' => ['retail-customer.png','retail-customer@2x.png'],'text' => 'gemba walk checklist'],
            ],
        'image' => 'group-1622.png',
        'template' => ['text' => 'View all TEMPLATES','url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => '<span class="text-gold"> Read success stories </span> about retailers who use Lumiform',
    'items' => [
    ['image' => 'retail-inspection.png','srcset' => ['retail-inspection.png','retail-inspection@2x.png'],'template' => ['url' => '#','text' => 'View INSPECTIOn CASE STUDY'] ],
    ['image' => 'retail-audit.png','srcset' => ['retail-audit.png','retail-audit@2x.png'],'template' => ['url' => '#','text' => 'View AUDIT CASE STUDY'] ],
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

