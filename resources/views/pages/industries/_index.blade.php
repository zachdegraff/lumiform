@extends('layout/base')

@section("head.title", __("All Industries at a Glance - Lumiform"))
@section('meta-tags')

    <meta name="keywords" content="@lang('Industries')">
    <meta name="keywords" content="@lang('overview')">

    <meta name="description"
          content="@lang('See how companies of all industries, with all shapes, and sizes, use the App for their quality and safety management. TRY FREE!')">
@endsection
@section("content")
    <section class="py-12 lg:py-40">
        <div class="container mx-auto">
            <h1 class="tracking-normal text-primary text-center  text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                @lang('Lumiform, specifically for your industry')
            </h1>
            <div class="flex justify-center lg:flex-no-wrap flex-wrap">
                @include('components.product.icons_raw',[
                            'text' => __('food'),
                            'image' => 'icons/burger.svg',
                            'class' => 'mx-5 xl:mx-10 w-1/4 lg:w-1/2 mb-12',
                            'url' => 'industries.food',
                            ])
                @include('components.product.icons_raw',[
                            'text' => __('Construction'),
                            'image' => 'icons/construction.svg',
                            'class' => 'mx-5 xl:mx-10 w-1/4 lg:w-1/2 mb-12',
                             'url' => 'industries.construction',
                            ])
                @include('components.product.icons_raw',[
                            'text' => __('Manufacturing'),
                            'image' => 'icons/manufactur.svg',
                            'class' => 'mx-5 xl:mx-10 w-1/4 lg:w-1/2 mb-12',
                            'url' => 'industries.manufacturing',
                            ])
                @include('components.product.icons_raw',[
                            'text' => __('Retail'),
                            'image' => 'icons/retail.svg',
                            'class' => 'mx-5 xl:mx-10 w-1/4 lg:w-1/2 mb-12',
                            'url' => 'industries.retail',
                            ])
                @include('components.product.icons_raw',[
                            'text' => __('Logistics'),
                            'image' => 'icons/car.svg',
                            'class' => 'mx-5 xl:mx-10 w-1/4 lg:w-1/2 mb-12',
                            'url' => 'industries.logistics',
                            ])
                @include('components.product.icons_raw',[
                            'text' => __('Facility'),
                            'image' => 'icons/facility.svg',
                            'class' => 'mx-5 xl:mx-10 w-1/4 lg:w-1/2 mb-12',
                            'url' => 'industries.facilityManagement',
                            ])
                @include('components.product.icons_raw',[
                            'text' => __('Pharma & chemistry'),
                            'image' => 'icons/pharma.svg',
                            'class' => 'mx-5 xl:mx-10 w-1/4 lg:w-1/2 mb-12',
                            'url' => 'industries.pharmaChemie',
                            ])
            </div>
        </div>
    </section>
    {{-- Start Food Section --}}
    @include('components.solution.banner_with_text',[
    'image' => 'bg-food.png',
    'text' => __('Food'),
    'icon' => 'burger.svg',
    ])
    @include('components.solution.description_section',[
    'mainText' => __('Lumiform is your all-in-one quality and safety solution for the food industry. Easily create forms for hygiene documentation, cleaning controls, supplier audits, incoming goods inspections, audits and inventory lists, then manage them via mobile app.'),
    'explore' => ['url' => 'industries.food','text' => __('Explore Lumiform for food')],
    'items' => [
            ['image' => 'food-manager-cleaning-check.png','srcset' =>['food-manager-cleaning-check.png','food-manager-cleaning-check@2x.png'],'text' => __('Manager <span class="line__break"> </span> cleaning <span class="line__break"> </span> check')],
            ['image' => 'food-mystery-shopper.png','srcset' =>['food-mystery-shopper.png','food-mystery-shopper@2x.png'],'text' => __('Mystery <span class="line__break"> </span> shopper <span class="line__break"> </span> checklist')],
            ['image' => 'food-daily-temperature-log.png','srcset' =>['food-daily-temperature-log.png','food-daily-temperature-log@2x.png'],'text' => __('Daily <span class="line__break"> </span> temperature log')],
            ['image' => 'food-hygiene.png','srcset' =>['food-hygiene.png','food-hygiene@2x.png'],'text' => __('General food, <span class="line__break"> </span> safety and <span class="line__break"> </span> hygiene checklist')],
            ['image' => 'food-self-monitoring.png','srcset' =>['food-self-monitoring.png','food-self-monitoring@2x.png'],'text' => __('Self monitoring <span class="line__break"> </span> checklist')],
            ['image' => 'food-closing-the-counter.png','srcset' =>['food-closing-the-counter.png','food-closing-the-counter@2x.png'],'text' => __('Closing the <span class="line__break"> </span> counter <span class="line__break"> </span> checklist')],
        ],
    'companion' => [
        'text' => __('“Lumiform has enabled us to bring light into our regular quality controls and results. Nowadays, we continuously improve our quality processes and the quality of our products.“'),
        'info' => __('- Sven, Head of Quality Management'),
                    ],
    'template' => ['text' => __('More food templates'),'url' => '#']
    ])
    {{-- End Food Section --}}

    {{-- Start Construction Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-construction.png',
   'text' => __('CONSTRUCTION'),
   'icon' => 'construction.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => __('Improve safety on construction sites with Lumiform’s digital audits and inspection software. Create forms for damage reports,
vehicle inspections, safety inspections, risk assessments, daily site reports and much more, with a single system. '),
    'explore' => ['url' => 'industries.construction','text' => __('Explore Lumiform for construction')],
    'items' => [
            ['image' => 'construction-incident-reports.png','srcset' =>['construction-incident-reports.png','construction-incident-reports@2x.png'],'text' => __('Incident <span class="line__break"> </span> reports')],
            ['image' => 'facility-vehicle-inspection.png','srcset' =>['facility-vehicle-inspection.png','facility-vehicle-inspection@2x.png'],'text' => __('Vehicle <span class="line__break"> </span> inspection')],
            ['image' => 'construction-weekly.png','srcset' =>['construction-weekly.png','construction-weekly@2x.png'],'text' => __('Weekly site <span class="line__break"> </span> safety inspection')],
            ['image' => 'construction-daily.png','srcset' =>['construction-daily.png','construction-daily@2x.png'],'text' => __('Daily safety <span class="line__break"> </span> inspection <span class="line__break"> </span> (pre-start)')],
            ['image' => 'construction-safety-walk.png','srcset' =>['construction-safety-walk.png','construction-safety-walk@2x.png'],'text' => __('Safety walk <span class="line__break"> </span> checklist')],
            ['image' => 'construction-toolbox-check.png','srcset' =>['construction-toolbox-check.png','construction-toolbox-check@2x.png'],'text' => __('Weekly <span class="line__break"> </span> toolbox <span class="line__break"> </span> check')],
        ],
    'companion' => [
        'text' => __('“Lumiform has helped us to eliminate accidents on the construction site, while at the same time, we have managed to increase the quality of work through frequent safety and quality controls.“'),
        'info' => __('- David, Health and Safety Manager'),
        'logo' => ''
                    ],
    'template' => ['text' => __('More construction templates'),'url' => '#']
    ])
    {{-- End Construction Section --}}

    {{-- Start Manufacturing Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-manufactur.png',
   'text' => __('Manufacturing'),
   'icon' => 'manufactur.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => __('Complete all your audits and inspections through one system. With Lumiform, you can create custom forms for security audits, store audits, quality controls, incoming goods checks or customer surveys, within minutes. '),
    'explore' => ['url' => 'industries.manufacturing','text' => __('Explore Lumiform for manufacturing')],
    'items' => [
            ['image' => 'manufacturing-audit.png','srcset' =>['manufacturing-audit.png','manufacturing-audit@2x.png'],'text' => __('5S audit')],
            ['image' => 'facility-site-inspections.png','srcset' =>['facility-site-inspections.png','facility-site-inspections@2x.png'],'text' => __('Facility review')],
            ['image' => 'manufacturing-high-risk.png','srcset' =>['manufacturing-high-risk.png','manufacturing-high-risk@2x.png'],'text' => __('High risk <span class="line__break"> </span> machine safety <span class="line__break"> </span> checklist')],
            ['image' => 'manufacturing-safety-assessment.png','srcset' =>['manufacturing-safety-assessment.png','manufacturing-safety-assessment@2x.png'],'text' => __('Safety assessment <span class="line__break"> </span> of forklift driver')],
            ['image' => 'manufacturing-general-risk-assessment.png','srcset' =>['manufacturing-general-risk-assessment.png','manufacturing-general-risk-assessment@2x.png'],'text' => __('General risk <span class="line__break"> </span> assessment')],
            ['image' => 'manufacturing-gemba-walk.png','srcset' =>['manufacturing-gemba-walk.png','manufacturing-gemba-walk@2x.png'],'text' => __('Gemma walk <span class="line__break"> </span>checklist')],
        ],
    'companion' => [
        'text' => __('“It used to take us about 3 hours to audit our production facility and at least 2 hours of post-processing. Today we complete the audit including post-processing in 2.5 hours.”'),
        'info' => __('- Mark, HSE-Manager'),
        'logo' => 'beumer.png'
                    ],
    'template' => ['text' => __('More manufacturing templates'),'url' => '#']
    ])
    {{-- End Manufacturing Section --}}

    {{-- Start Retail Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-retail.png',
   'text' => __('Retail'),
   'icon' => 'retail.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => __('Complete all your audits and inspections through one system. With Lumiform, you can create individual forms for security audits, store audits, quality controls, incoming goods checks or customer surveys, within minutes. '),
    'explore' => ['url' => 'industries.retail','text' => __('Explore Lumiform for retail')],
    'items' => [
            ['image' => 'retail-cleaning-checklist.png','srcset' =>['retail-cleaning-checklist.png','retail-cleaning-checklist@2x.png'],'text' => __('Retail cleaning <span class="line__break"> </span> checklist')],
            ['image' => 'retail-incoming-good.png','srcset' =>['retail-incoming-good.png','retail-incoming-good@2x.png'],'text' => __('Incoming goods <span class="line__break"> </span> inspection')],
            ['image' => 'retail-facility-management.png','srcset' =>['retail-facility-management.png','retail-facility-management@2x.png'],'text' => __('Retail property <span class="line__break"> </span> management form')],
            ['image' => 'retail-area.png','srcset' =>['retail-area.png','retail-area@2x.png'],'text' => __('Area manager <span class="line__break"> </span> checklist')],
            ['image' => 'retail-store.png','srcset' =>['retail-store.png','retail-store@2x.png'],'text' => __('Retail store <span class="line__break"> </span> checklist')],
            ['image' => 'retail-customer.png','srcset' =>['retail-customer.png','retail-customer@2x.png'],'text' => __('Retail customer <span class="line__break"> </span> satisfaction survey ')],
        ],
    'companion' => [
        'text' => __('“We used to have paper checklists to remind employees of tasks, but nobody filled them out. With the app, the inspection goes so fast that it doesn’t bother employees and we get a real-time overview of the quality of all our stores.“'),
        'info' => __('- Carsten, Project Manager'),
        'logo' => ''
                    ],
    'template' => ['text' => __('More retail templates'),'url' => '#']
    ])
    {{-- End Retail Section --}}

    {{-- Start LOGISTICS Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-logistics.png',
   'text' => __('LOGISTICS & TRANSPORTATION'),
   'icon' => 'car.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => __('Lumiform provides a single solution for all your inspections and audits. Create customised forms for safety inspections, vehicle defect reports, tank inspections or driver assessments, and manage the whole process.'),
    'explore' => ['url' => 'industries.logistics','text' => __('Explore Lumiform for logistics')],
    'items' => [
            ['image' => 'driver-field-audit.png','srcset' =>['driver-field-audit.png','driver-field-audit@2x.png'],'text' => __('Driver field audit')],
            ['image' => 'rail-safet-check.png','srcset' =>['rail-safet-check.png','rail-safet-check@2x.png'],'text' => __('Rail safety check')],
            ['image' => 'driver-assessment.png','srcset' =>['driver-assessment.png','driver-assessment@2x.png'],'text' => __('Driver assessment')],
            ['image' => 'monthly-tank-inspection.png','srcset' =>['monthly-tank-inspection.png','monthly-tank-inspection@2x.png'],'text' => __('Monthly tank <span class="line__break"> </span> inspection')],
            ['image' => 'heavy-vehicle-inspection.png','srcset' =>['heavy-vehicle-inspection.png','heavy-vehicle-inspection@2x.png'],'text' => __('Heavy vehicle <span class="line__break"> </span> inspection')],
            ['image' => 'vehicle-defect-report.png','srcset' =>['vehicle-defect-report.png','vehicle-defect-report@2x.png'],'text' => __('Vehicle defect <span class="line__break"> </span> report ')],
        ],
    'companion' => [
        'text' => __('“With Lumiform we were able to keep our fleet almost accident-free last year. Regular inspections have saved us a lot of money as we have had fewer vehicle failures.”'),
        'info' => __('- Karina, Team Lead Quality and Energy Management'),
        'logo' => ''
                    ],
    'template' => ['text' => __('More logistics templates'),'url' => '#']
    ])
    {{-- End LOGISTICS Section --}}

    {{-- Start Facality Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-facility.png',
   'text' => __('FACILITY MANAGEMENT'),
   'icon' => 'facility.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => __('With Lumiform, you can do all your audits and inspections via one flexible system. Create forms for health audits, fire protection, general maintenance and building services inspections, according to your needs. '),
    'explore' => ['url' => 'industries.facilityManagement','text' => __('Explore Lumiform for facility management')],
    'items' => [
            ['image' => 'facility-site-inspections.png','srcset' =>['facility-site-inspections.png','facility-site-inspections@2x.png'],'text' => __('Site inspection <span class="line__break"> </span> form')],
            ['image' => 'facility-cleaning.png','srcset' =>['facility-cleaning.png','facility-cleaning@2x.png'],'text' => __('Facility cleaning <span class="line__break"> </span>checklist')],
            ['image' => 'facility-maintenance.png','srcset' =>['facility-maintenance.png','facility-maintenance@2x.png'],'text' => __('Facility maintenance <span class="line__break"> </span>checklist')],
            ['image' => 'facility-energy.png','srcset' =>['facility-energy.png','facility-energy@2x.png'],'text' => __('Energy audit')],
            ['image' => 'facility-office-building-maintenance.png','srcset' =>['facility-office-building-maintenance.png','facility-office-building-maintenance@2x.png'],'text' => __('Office building <span class="line__break"> </span> maintenance')],
            ['image' => 'facility-safety-inspection.png','srcset' =>['facility-safety-inspection.png','facility-safety-inspection@2x.png'],'text' => __('Facility safety <span class="line__break"> </span> inspection ')],
        ],
    'companion' => [
        'text' => __('“We find issues in every one of our facility inspections. In the past, we had to put so much effort into assigning and tracking the troubleshooting. Today, everything runs fully automatically while we carry out the inspection via the Lumiform App.”'),
        'info' => __('- Uwe, Head of Operations'),
        'logo' => ''
                    ],
    'template' => ['text' => __('More facility management templates'),'url' => '#']
    ])
    {{-- End Facality Section --}}

    {{-- Start Facality Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-pharma.png',
   'text' => __('PHARMA & CHEMICALS'),
   'icon' => 'pharma.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => __('Lumiform is your all-in-one solution for all audits and inspections. Create fire safety, risk assessment, hazard assessment and supplier audit forms, within minutes. '),
    'explore' => ['url' => 'industries.pharmaChemie','text' => __('Explore Lumiform for pharma & chemicals')],
    'items' => [
            ['image' => 'chemical-handling.png','srcset' =>['chemical-handling.png','chemical-handling@2x.png'],'text' => __('Chemical handling,<span class="line__break"> </span> storage and <span class="line__break"> </span> disposal checklist')],
            ['image' => 'chemical-audit.png','srcset' =>['chemical-audit.png','chemical-audit@2x.png'],'text' => __('Chemical audit')],
            ['image' => 'pharma-safety.png','srcset' =>['pharma-safety.png','pharma-safety@2x.png'],'text' => __('Chemical risk <span class="line__break"> </span> assessment form')],
            ['image' => 'pharma-risk-assessment-form.png','srcset' =>['pharma-risk-assessment-form.png','pharma-risk-assessment-form@2x.png'],'text' => __('Chemical safety')],
            ['image' => 'pharma-workplace-hazard-assessment-form.png','srcset' =>['pharma-workplace-hazard-assessment-form.png','pharma-workplace-hazard-assessment-form@2x.png'],'text' => __('Workplace hazard <span class="line__break"> </span> assessment form')],
            ['image' => 'pharma-hazardous-chemical-exposure-checklist.png','srcset' =>['pharma-hazardous-chemical-exposure-checklist.png','pharma-hazardous-chemical-exposure-checklist@2x.png'],'text' => __('OSHA hazardous <span class="line__break"> </span> chemical exposure <span class="line__break"> </span> checklist ')],
        ],
    'companion' => [
        'text' => __('“With Lumiform we have 100% control over all processes in the field in quality and safety management. We know at all times which person completed the inspection at which time and at which location.”'),
        'info' => __('- Christina, Head of Quality, Environmental and Safety Management'),
        'logo' => ''
                    ],
    'template' => ['text' => __('More pharma & chemicals templates'),'url' => '#']
    ])
    {{-- End Facality Section --}}
@endsection
