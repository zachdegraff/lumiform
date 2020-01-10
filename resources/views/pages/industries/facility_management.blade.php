@extends('layout/base')

@section("head.title", __("Facility Management Software & App - FREE - Lumiform"))
@section('meta-tags')
    <meta name="keywords" content="@lang('Facility management software')">
    <meta name="keywords" content="@lang('facility management app')">
    <meta name="description"
          content="@lang('Start with the easy and powerful facility management software and facility management app, keep each location safe, and raise their standards. FOR FREE!')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
     'imageBg' => 'facility-banner.png',
     'class' => 'lg:w-9/12',
     'heading' => __('Save time and money on every facility inspection'),
     'text' => __('Lumiform reliably reminds you of all the different tasks in facility <span class="line__break"></span>
      management, and saves you time during each inspection. Raise issues as
      <span class="line__break"></span>soon as they happen.'),
     ])
    <section class="py-16 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('Lumiform is the easiest way for construction companies to…')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/star-icon_gold.svg',
                'heading' => __('Remain fully compliant'),
                'color' => 'red',
                'text' => __('Remind everyone of the inspections they need to conduct, so that inspectors perform all their checks reliably.'),
                'width' => '475'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/check-icon_green.svg',
                'heading' => __('Solve issues quicker'),
                'color' => 'green',
                'text' => __('Make sure field workers take appropriate corrective action whenever issues occur, and quickly solve them with teammates.'),
                'width' => '485'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon_blue.svg',
                'heading' => __('Cut inspection time by 30%'),
                'color' => 'light-blue',
                'text' => __('Automated issue management and fast analysis save time while the inspection itself takes less time. '),
                'width' => '440'
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
                @lang('<span class="text-light-blue">Capture consistent data</span>  in a fraction of the time')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-10 lg:mb-20">
                @lang('Raise standards across all facilities. Ensure the accuracy and reliability of regular safety and quality inspections.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-3078.png','group-3078@2x.png'],'title' => __('Create forms'),'desc' => __('Create custom forms within minutes. Organise facility inspections, to make sure the right person does all the checklists at the right time.')],
            ['srcset' => ['group-4773.png','group-4773@2x.png'],'title' => __('Conduct via App'),'desc' => __('Conduct inspections and audits, whether with a tablet or smartphone, Android or iOS – online or offline.')],
            ['srcset' => ['group-3430.png','group-3430@2x.png'],'title' => __('Solve Issues'),'desc' => __('Make sure all issues are quickly reported and seamlessly documented. Keep track of the troubleshooting, and solve issues together as a team.')],
            ['srcset' => ['group-4750.png','group-4750@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover areas that need attention in your facilities.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])


        </div>
    </section>
    <section class="py-16 lg:py-24 with__border--bottom">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-50 font-cocogoose tracking-heading font-bold mb-10 lg:mb-32">
                @lang('Explore which use cases
<span class="text-purple">facility managers  <span class="line__break"></span> </span>implemented with Lumiform ')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'cleaning-icon.svg', 'text' => __('Cleaning documentation')],
                ['icon' => 'calendar-icon_purple.svg', 'text' => __('Inspection schedules')],
                ['icon' => 'safety-icon_orange.svg', 'text' => __('Work safety audits And inspections')],
                ['icon' => 'winter-icon_blue.svg', 'text' => __('Winter services')],
                ['icon' => 'tools-icon_gold.svg', 'text' => __('Maintenance reports')],
                ['icon' => 'spare-icon_orange.svg', 'text' => __('Spare parts documentation')],
                ['icon' => 'fire-protect-icon_red.svg', 'text' => __('Fire protection inspection')],
                ['icon' => 'tool-icon_orange.svg', 'text' => __('Repair reports')],
                ['icon' => 'list-icon_red.svg', 'text' => __('Defect documentation')],
                ['icon' => 'walk-icon_gold.svg', 'text' => __('Safety walks')],
                ['icon' => 'facility.svg', 'text' => __('Facility inspection')],
                ['icon' => 'list-icon_green.svg', 'text' => __('Bills of delivery')],
                ['icon' => 'meter-icon_blue.svg', 'text' => __('Meter reading')],
                ['icon' => 'log-icon_purple.svg', 'text' => __('Driver logs')],
                ['icon' => 'inventory-icon_blue.svg', 'text' => __('Inventory checks')],
                ['icon' => 'traffic-icon_gold.svg', 'text' => __('Traffic route inspection')],
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
        'heading' => __('<span class="text-green">Use expert-proofed templates </span> to meet all standards'),
        'text' =>  '',
        'items' => [
                ['image' => 'facility-site-inspections.png','srcset' => ['facility-site-inspections.png','facility-site-inspections@2x.png'],'text' => __('Site inspection form ')],
                ['image' => 'facility-vehicle-inspection.png','srcset' => ['facility-vehicle-inspection.png','facility-vehicle-inspection@2x.png'],'text' => __('Facility cleaning checklist')],
                ['image' => 'facility-maintenance.png','srcset' => ['facility-maintenance.png','facility-maintenance@2x.png'],'text' => __('Facility maintenance checklist')],
                ['image' => 'facility-energy.png','srcset' => ['facility-energy.png','facility-energy@2x.png'],'text' => __('Energy audit')],
                ['image' => 'facility-office-building-maintenance.png','srcset' => ['facility-office-building-maintenance.png','facility-office-building-maintenance@2x.png'],'text' => __('Office building maintenance checklist')],
                ['image' => 'facility-safety-inspection.png','srcset' => ['facility-safety-inspection.png','facility-safety-inspection@2x.png'],'text' => __('Facility safety inspection')],
            ],
        'image' => 'group-1563.png',
        'template' => ['text' => __('View all TEMPLATES'),'url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => __('Trusted by leading providers of
<span class="text-purple"> <span class="line__break"></span>
     facility management services </span>'),
    'items' => [
    ['image' => 'site-inspections.png','srcset' => ['site-inspections.png','site-inspections@2x.png'],'template' => ['url' => '#','text' => __('View facility INSPECTIOn CASE STUDY')] ],
    ['image' => 'management-audit.png','srcset' => ['management-audit.png','management-audit@2x.png'],'template' => ['url' => '#','text' => __('View facility AUDIT CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'group-1131.svg',
    'class' => 'bg-purple-extralight',
    'text' => __('“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“'),
    'position' => __('- Uwe, Head of Operations'),
    ])
    @include('components.product.bottom_form',[
    'heading' => __('Start with Lumiform for facility management
     <span class="line__break"></span> services, free of charge.'),
    'sectionBg' =>'purple-light',
    'buttonBg' =>'purple',
    'left' => true ,
    'image' =>'group-2074.png',
    'srcset' =>['group-2074.png','group-2074@2x.png'],
    ])
@endsection
