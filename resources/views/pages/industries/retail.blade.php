@extends('layout/base')

@section("head.title", __("Retail Audit and Inspection Software & App - FREE - Lumiform"))
@section('meta-tags')
    <meta name="keywords" content="@lang('Retail audit software')">
    <meta name="keywords" content="@lang('Retail audit app')">
    <meta name="keywords" content="@lang('Retail inspection app')">
    <meta name="description" content="@lang('Start with the retail audit software and inspection app to improve operational efficiencies through faster data capturing. FOR FREE!')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
        'imageBg' => 'retail-banner.png',
        'class' => 'xl:w-9/12 py-8',
        'heading' =>  __('Protect your retail brand'),
        'text' => __('Ensure a positive on-site experience for your customers. Collect consistent data, standardise operations, identify areas that have failed and get problems resolved quickly!'),
        ])
    <section class="py-8 md:py-16 xl:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 mb-12 xl:mb-32 uppercase tracking-heading">
                @lang('Retailers use Lumiform to …')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/brand-icon_blue.svg',
                'heading' => __('Create brand consistency'),
                'color' => 'light-blue',
                'text' => __('Assess the in-store experience and report on brand consistency. Coordinate all aspects of brand experience from remote.'),
                'width' => '440'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/home-icon_red.svg',
                'heading' => __('Reduce stock loss'),
                'color' => 'red',
                'text' => __('Continuously track what’s causing stock shrinkage and identify the problem stores with Lumiform.'),
                'width' => '450'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/improve-icon_purple.svg',
                'heading' => __('Improve PoS campaigns'),
                'color' => 'purple',
                'text' => __('Use Lumiform’s checklists to roll out your next promotion or merchandise initiative faster, and get better results.'),
                'width' => '410'
                ])
            </div>
            <a href="#"
               class="font-extrabold w-290 mt-5 flex justify-center items-center mx-auto bg-red text-white uppercase font-cocogoose text-20 tracking-large  h-50 xxl:h-70 px-8 rounded-20">
                @lang('Get Lumiform FREE')
            </a>
        </div>
    </section>
    <section class="py-8 md:py-16 xl:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-4 uppercase tracking-heading">
                @lang('Boost<span class="text-purple"> quality and safety standards </span> in your retail stores')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-10 lg:mb-20">
                @lang('Carry out regular inspections in the field to ensure consistent quality across all stores and improve brand awareness.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-2969.png','group-2969@2x.png'],'title' => __('Create forms'),'desc' => __('Create custom forms within minutes. Organise store audits and inspections to make sure they are done reliably.')],
            ['srcset' => ['group-4764.png','group-4764@2x.png'],'title' => __('Conduct via App'),'desc' => __('Conduct audits and inspections whether with a tablet or smartphone, Android or iOS – online or offline.')],
            ['srcset' => ['group-5134.png','group-5134@2x.png'],'title' => __('Solve Issues'),'desc' => __('Make all field workers can easily raise issues as soon as they occur. Keep track of the progress and solve them together, as a team.')],
            ['srcset' => ['group-4750.png','group-4750@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover stores that need your attention through in-depth analyses.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])

        </div>
    </section>
    <section class="py-8 md:py-16 xl:py-24">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-50 font-cocogoose tracking-heading font-bold mb-10 xl:mb-32">
                @lang('<span class="text-green">Check  your quality standards </span> with one app')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'incoming-icon_blue.svg', 'text' => __('Incoming goods Inspection')],
                ['icon' => 'list-icon_purple.svg', 'text' => __('Opening checklist')],
                ['icon' => 'list-icon_blue.svg', 'text' => __('6S Audit')],
                ['icon' => 'secure-icon_green.svg', 'text' => __('Security check')],
                ['icon' => 'home-icon_purple.svg', 'text' => __('Warehouse audit')],
                ['icon' => 'face-icon_green.svg', 'text' => __('Customer Satisfaction')],
                ['icon' => 'store-icon_blue.svg', 'text' => __('Store operation checklists')],
                ['icon' => 'safe-icon_gold.svg', 'text' => __('Work safety')],
                ['icon' => 'calc-icon_orange.svg', 'text' => __('Retail store audit')],
                ['icon' => 'drawer-icon_blue.svg', 'text' => __('Cleaning documentation')],
                ['icon' => 'employee-icon_purple.svg', 'text' => __('Employee training')],
                ['icon' => 'store-icon_green.svg', 'text' => __('Presentation checklist')],
                ['icon' => 'list-icon_blue.svg', 'text' => __('Employee survey')],
                ['icon' => 'inventory-icon_purple.svg', 'text' => __('Inventory checklist')],
                ['icon' => 'tshirt-icon_orange.svg', 'text' => __('Merchandising Checklist')],
                ['icon' => 'face-icon_red.svg', 'text' => __('Complaint forms')],
                ]
                ])
            </div>
            <a href="#"
               class="flex items-center uppercase justify-center text-red text-center block font-bold text-20 tracking-large mt-10">
                @lang('View all retail use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => __('<span class="text-light-blue">Quickstart with ready-to-use forms </span> for your retail store'),
        'text' =>  __('Lumiform offers an extensive template library, so you can roll out your quality and safety concept within minutes.'),
        'items' => [
                ['image' => 'retail-cleaning-checklist.png','srcset' => ['retail-cleaning-checklist.png','retail-cleaning-checklist@2x.png'],'text' => __('5S audit')],
                ['image' => 'retail-incoming-good.png','srcset' => ['retail-incoming-good.png','retail-incoming-good@2x.png'],'text' => __('facility review')],
                ['image' => 'construction-weekly.png','srcset' => ['construction-weekly.png','construction-weekly@2x.png'],'text' => __('high risk machine safety checklist')],
                ['image' => 'construction-daily.png','srcset' => ['construction-daily.png','construction-daily@2x.png'],'text' => __('safety assessment of worklift driver')],
                ['image' => 'retail-store.png','srcset' => ['retail-store.png','retail-store@2x.png'],'text' => __('general risk assessment')],
                ['image' => 'retail-customer.png','srcset' => ['retail-customer.png','retail-customer@2x.png'],'text' => __('gemba walk checklist')],
            ],
        'image' => 'group-1622.png',
        'template' => ['text' => __('View all TEMPLATES'),'url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => __('<span class="text-gold"> Read success stories </span> about<span class="line__break"></span> retailers who use Lumiform'),
    'items' => [
    ['image' => 'retail-inspection.png','srcset' => ['retail-inspection.png','retail-inspection@2x.png'],'template' => ['url' => '#','text' => __('View INSPECTIOn CASE STUDY')] ],
    ['image' => 'retail-audit.png','srcset' => ['retail-audit.png','retail-audit@2x.png'],'template' => ['url' => '#','text' => __('View AUDIT CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'heart-blue.png',
    'class' => 'bg-blue-opacity',
    'text' => __('„With Lumiform, we can streamline all the processes in the stores, and keep an exact overview of whether we are meeting the standards, at all times!“'),
    'position' => __('- Quoted Person, Client Company'),
    ])
    @include('components.product.bottom_form',[
    'heading' => __('Equip your retail store and get started – free of charge!'),
    'sectionBg' =>'blue',
    'buttonBg' =>'blue-dark',
    'image' =>'img/group-2028.svg',
    ])
@endsection

