@extends('layout/base')

@section("head.title", __("Pharmaceuticals & Chemicals Inspection Software - FREE - Lumiform"))
@section('meta-tags')
    <meta name="keywords" content="@lang('Pharmaceuticals & Chemicals')">
    <meta name="keywords" content="@lang('Inspection software')">
    <meta name="description" content="@lang('Conduct inspections effortlessly with the inspection software for pharmaceuticals and chemicals and make workplaces safe. FOR FREE!')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
         'imageBg' => 'pharma-banner.png',
         'class' => 'lg:w-9/12',
         'heading' => __('Make your company  <span class="line__break"></span> a safer place to be'),
         'text' =>  __('Increase work safety with Lumiform, by creating more transparency <span class="line__break"></span>
          and efficiency, with digital audits and inspections.. Raise issues as'),
         ])
    <section class="py-16 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('Chemical and pharmaceutical companies use Lumiform to …')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/star-icon_purple.svg',
                'heading' => __('Remain fully compliant'),
                'color' => 'purple',
                'text' => __('Remind employees of their upcoming tasks, so that they are completed on time and reliably, while maintaining safety standards. Keep track of what’s happening on site. '),
                'width' => '450'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon_green.svg',
                'heading' => __('Solve issues faster'),
                'color' => 'green',
                'text' => __('Report issues immediately, as they occur, and delegate tasks. Lumiform informs managers about deadline and site, priority level and corrective actions. '),
                'width' => '490'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/safe-icon_orange.svg',
                'heading' => __('Increase work safety'),
                'color' => 'gold',
                'text' => __('Gain real-time visibility of all issues and inspections, to prevent incidents in advance and achieve higher safety and quality standards. '),
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
                @lang('Collect consistent  <span class="text-purple">work health and safety data </span>  in a snap')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-10 lg:mb-20">
                @lang('Make your pharmaceutical and chemical company a safer place. Create, schedule and conduct custom inspections and audits. You will always have a real-time overview of quality and safety in the field. ')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-3046.png','group-3046@2x.png'],'title' => __('Create forms'),'desc' => __('Create custom forms within minutes. Organise pharma and chemical inspections, to make sure the right person does all the checklists at the right time.')],
            ['srcset' => ['group-2834.png','group-2834@2x.png'],'title' => __('Conduct via App'),'desc' => __('Conduct inspections and audits, whether with a tablet or smartphone, Android or iOS – online or offline.')],
            ['srcset' => ['group-3430.png','group-3430@2x.png'],'title' => __('Solve Issues'),'desc' => __('Make sure all issues are quickly reported and seamlessly documented. Keep track of the troubleshooting, and solve issues together as a team.')],
            ['srcset' => ['group-4836.png','group-4836@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover areas that need attention easily.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])


        </div>
    </section>
    <section class="py-16 lg:py-24 with__border--bottom">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-50 font-cocogoose tracking-heading font-bold mb-10 lg:mb-32">
                @lang('The <span class="text-gold"> pharmaceutical and chemical industry
 <span class="line__break"></span>  </span> uses Lumiform for diverse use cases')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'checked-icon_green.svg', 'text' => __('Process validation')],
                ['icon' => 'fire-protect-icon_red.svg', 'text' => __('Fire protection')],
                ['icon' => 'safety-icon_orange.svg', 'text' => __('Work safety audits')],
                ['icon' => 'ventilation-icon_blue.svg', 'text' => __('Ventilation system testing')],
                ['icon' => 'star_purple.svg', 'text' => __('Equipment qualification')],
                ['icon' => 'heart-icon_red.svg', 'text' => __('Quality controls')],
                ['icon' => 'inventory-icon_blue.svg', 'text' => __('Inventory checks')],
                ['icon' => 'equipment-icon_orange.svg', 'text' => __('Equipment testing')],
                ['icon' => 'danger-icon_gold.svg', 'text' => __('Hazard assessments')],
                ['icon' => 'tools-icon_green.svg', 'text' => __('Installation qualification')],
                ['icon' => 'facility.svg', 'text' => __('Facility inspection')],
                ['icon' => 'safety-icon_gold.svg', 'text' => __('Safety Requirement Specification')],
                ['icon' => 'glass-caution-icon_orange.svg', 'text' => __('Risk assessment')],
                ['icon' => 'calc-icon_blue.svg', 'text' => __('Supplier audits')],
                ['icon' => 'explosion-icon_orange.svg', 'text' => __('Explosion safety audit')],
                ['icon' => 'instrument-icon_green.svg', 'text' => __('Safety Instrumented Function')],
                ]
                ])
            </div>
            <a href="#"
               class="flex items-center uppercase justify-center text-red text-center block text-20 tracking-large mt-10">
                @lang('View all pharmaceutical and chemicals use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => __('Improve work safety and employee health <span class="line__break"></span>
        with <span class="text-red">expert-proofed checklist templates </span> '),
        'text' =>  '',
        'items' => [
                ['image' => 'inspections-osha-self-inspection.png','srcset' => ['inspections-osha-self-inspection.png','inspections-osha-self-inspection@2x.png'],'text' => __('Cleaning test')],
                ['image' => 'pharma-workplace-hazard-assessment-form.png','srcset' => ['pharma-workplace-hazard-assessment-form.png','pharma-workplace-hazard-assessment-form@2x.png'],'text' => __('Monthly fire safety audit')],
                ['image' => 'pharma-workplace-hazard-assessment-form.png','srcset' => ['pharma-workplace-hazard-assessment-form.png','pharma-workplace-hazard-assessment-form@2x.png'],'text' => __('Checklist for chemical inventory')],
                ['image' => 'chemical-safety.png','srcset' => ['chemical-safety.png','chemical-safety@2x.png'],'text' => __('Checklist for protective gear')],
                ['image' => 'chemical-risk-assessment-form.png','srcset' => ['chemical-risk-assessment-form.png','chemical-risk-assessment-form@2x.png'],'text' => __('Checklist for device safety')],
                ['image' => 'construction-toolbox-check.png','srcset' => ['construction-toolbox-check.png','construction-toolbox-check@2x.png'],'text' => __('Supplier audit')],
            ],
        'image' => 'group-4832.png',
        'template' => ['text' => __('View all TEMPLATES'),'url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => __('Learn how leading <span class="text-gold"> pharmaceutical <span class="line__break"></span>
        and chemical companies  </span>use Lumiform'),
    'items' => [
    ['image' => 'pharma-risk-assessment-form.png','srcset' => ['pharma-risk-assessment-form.png','pharma-risk-assessment-form@2x.png'],'template' => ['url' => '#','text' => __('View pharmaceutical INSPECTIOn CASE STUDY')] ],
    ['image' => 'pharma-safety.png','srcset' => ['pharma-safety.png','pharma-safety@2x.png'],'template' => ['url' => '#','text' => __('View pharmaceutical AUDIT CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'quote-orange.png',
    'class' => 'bg-orange-extralight',
    'text' => __('“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“'),
    'position' => __('- Christina, Head of Quality, Environmental and Safety Management'),
    ])
    @include('components.product.bottom_form',[
    'heading' => __('Start improving health and safety  – free of charge.'),
    'sectionBg' =>'orange-light',
    'buttonBg' =>'orange',
    'image' =>'group-2059.png',
    'srcset' =>['group-2059.png','group-2059@2x.png'],
    ])
@endsection
