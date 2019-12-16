@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section class="py-12 lg:py-40">
        <div class="container mx-auto">
            <h1 class="tracking-normal text-primary text-center  text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                @lang('Lumiform, specifically for your industry')
            </h1>
            <div class="flex justify-center">
                @include('components.product.icons_raw',[
                            'text' => 'Food',
                            'image' => 'icons/burger.svg',
                            'class' => 'mx-10 w-1/2 mb-20',
                            ])
                @include('components.product.icons_raw',[
                            'text' => 'Construction',
                            'image' => 'icons/construction.svg',
                            'class' => 'mx-10 w-1/2 mb-20',
                            ])
                @include('components.product.icons_raw',[
                            'text' => 'Manufacturing',
                            'image' => 'icons/manufactur.svg',
                            'class' => 'mx-10 w-1/2 mb-20',
                            ])
                @include('components.product.icons_raw',[
                            'text' => 'Retail',
                            'image' => 'icons/retail.svg',
                            'class' => 'mx-10 w-1/2 mb-20',
                            ])
                @include('components.product.icons_raw',[
                            'text' => 'Logistics',
                            'image' => 'icons/car.svg',
                            'class' => 'mx-10 w-1/2 mb-20',
                            ])
                @include('components.product.icons_raw',[
                            'text' => 'Facility',
                            'image' => 'icons/facility.svg',
                            'class' => 'mx-10 w-1/2 mb-20',
                            ])
                @include('components.product.icons_raw',[
                            'text' => 'Pharma & chemistry',
                            'image' => 'icons/pharma.svg',
                            'class' => 'mx-10 w-1/2 mb-20',
                            ])
            </div>
        </div>
    </section>
    {{-- Start Food Section --}}
    @include('components.solution.banner_with_text',[
    'image' => 'bg-food.png',
    'text' => 'Food',
    'icon' => 'burger.svg',
    ])
    @include('components.solution.description_section',[
    'mainText' => 'Lumiform is your all-in-one quality and safety solution for the food industry. Easily create forms for hygiene documentation, cleaning controls, supplier audits, incoming goods inspections, audits and inventory lists, then manage them via mobile app.',
    'explore' => ['url' => '#','text' => 'Explore Lumiform for food'],
    'items' => [
            ['image' => 'food-manager-cleaning-check.png','srcset' =>['food-manager-cleaning-check.png','food-manager-cleaning-check@2x.png'],'text' => 'Manager cleaning check'],
            ['image' => 'food-mystery-shopper.png','srcset' =>['food-mystery-shopper.png','food-mystery-shopper@2x.png'],'text' => 'Mystery shopper checklist'],
            ['image' => 'food-daily-temperature-log.png','srcset' =>['food-daily-temperature-log.png','food-daily-temperature-log@2x.png'],'text' => 'Daily temperature log'],
            ['image' => 'food-hygiene.png','srcset' =>['food-hygiene.png','food-hygiene@2x.png'],'text' => 'General food, safety and hygiene checklist'],
            ['image' => 'food-self-monitoring.png','srcset' =>['food-self-monitoring.png','food-self-monitoring@2x.png'],'text' => 'Self monitoring checklist'],
            ['image' => 'food-closing-the-counter.png','srcset' =>['food-closing-the-counter.png','food-closing-the-counter@2x.png'],'text' => 'Closing the counter checklist'],
        ],
    'companion' => [
        'text' => '“Lumiform has enabled us to bring light into our regular quality controls and results. Nowadays, we continuously improve our quality processes and the quality of our products.“',
        'info' => '- Sven, Head of Quality Management',
                    ],
    'template' => ['text' => 'More food templates','url' => '#']
    ])
    {{-- End Food Section --}}

    {{-- Start Construction Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-construction.png',
   'text' => 'CONSTRUCTION',
   'icon' => 'construction.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => 'Improve safety on construction sites with Lumiform’s digital audits and inspection software. Create forms for damage reports, vehicle inspections, safety inspections, risk assessments, daily site reports and much more, with a single system. . Easily create forms for hygiene documentation, cleaning controls, supplier audits, incoming goods inspections, audits and inventory lists, then manage them via mobile app.',
    'explore' => ['url' => '#','text' => 'Explore Lumiform for construction'],
    'items' => [
            ['image' => 'construction-incident-reports.png','srcset' =>['construction-incident-reports.png','construction-incident-reports@2x.png'],'text' => 'Incident reports'],
            ['image' => 'facility-vehicle-inspection.png','srcset' =>['facility-vehicle-inspection.png','facility-vehicle-inspection@2x.png'],'text' => 'Vehicle inspection'],
            ['image' => 'construction-weekly.png','srcset' =>['construction-weekly.png','construction-weekly@2x.png'],'text' => 'Weekly site safety inspection'],
            ['image' => 'construction-daily.png','srcset' =>['construction-daily.png','construction-daily@2x.png'],'text' => 'Daily safety inspection (pre-start)'],
            ['image' => 'construction-safety-walk.png','srcset' =>['construction-safety-walk.png','construction-safety-walk@2x.png'],'text' => 'Safety walk checklist'],
            ['image' => 'construction-toolbox-check.png','srcset' =>['construction-toolbox-check.png','construction-toolbox-check@2x.png'],'text' => 'Weekly toolbox check'],
        ],
    'companion' => [
        'text' => '“Lumiform has helped us to eliminate accidents on the construction site, while at the same time, we have managed to increase the quality of work through frequent safety and quality controls.“',
        'info' => '- David, Health and Safety Manager',
        'logo' => ''
                    ],
    'template' => ['text' => 'More construction templates','url' => '#']
    ])
    {{-- End Construction Section --}}

    {{-- Start Manufacturing Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-manufactur.png',
   'text' => 'Manufacturing',
   'icon' => 'manufactur.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => 'Complete all your audits and inspections through one system. With Lumiform, you can create custom forms for security audits, store audits, quality controls, incoming goods checks or customer surveys, within minutes. ',
    'explore' => ['url' => '#','text' => 'Explore Lumiform for manufacturing'],
    'items' => [
            ['image' => 'manufacturing-audit.png','srcset' =>['manufacturing-audit.png','manufacturing-audit@2x.png'],'text' => '5S audit'],
            ['image' => 'facility-site-inspections.png','srcset' =>['facility-site-inspections.png','facility-site-inspections@2x.png'],'text' => 'Facility review'],
            ['image' => 'manufacturing-high-risk.png','srcset' =>['manufacturing-high-risk.png','manufacturing-high-risk@2x.png'],'text' => 'High risk machine safety checklist'],
            ['image' => 'manufacturing-safety-assessment.png','srcset' =>['manufacturing-safety-assessment.png','manufacturing-safety-assessment@2x.png'],'text' => 'Safety assessment of forklift driver'],
            ['image' => 'manufacturing-general-risk-assessment.png','srcset' =>['manufacturing-general-risk-assessment.png','manufacturing-general-risk-assessment@2x.png'],'text' => 'General risk assessment'],
            ['image' => 'manufacturing-gemba-walk.png','srcset' =>['manufacturing-gemba-walk.png','manufacturing-gemba-walk@2x.png'],'text' => 'Gemma walk checklist'],
        ],
    'companion' => [
        'text' => '“It used to take us about 3 hours to audit our production facility and at least 2 hours of post-processing. Today we complete the audit including post-processing in 2.5 hours.”',
        'info' => '- Mark, HSE-Manager',
        'logo' => 'beumer.png'
                    ],
    'template' => ['text' => 'More manufacturing templates','url' => '#']
    ])
    {{-- End Manufacturing Section --}}

    {{-- Start Retail Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-retail.png',
   'text' => 'Retail',
   'icon' => 'retail.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => 'Complete all your audits and inspections through one system. With Lumiform, you can create individual forms for security audits, store audits, quality controls, incoming goods checks or customer surveys, within minutes. ',
    'explore' => ['url' => '#','text' => 'Explore Lumiform for retail'],
    'items' => [
            ['image' => 'retail-cleaning-checklist.png','srcset' =>['retail-cleaning-checklist.png','retail-cleaning-checklist@2x.png'],'text' => 'Retail cleaning checklist'],
            ['image' => 'retail-incoming-good.png','srcset' =>['retail-incoming-good.png','retail-incoming-good@2x.png'],'text' => 'Incoming goods inspection'],
            ['image' => 'retail-facility-management.png','srcset' =>['retail-facility-management.png','retail-facility-management@2x.png'],'text' => 'Retail property management form'],
            ['image' => 'retail-area.png','srcset' =>['retail-area.png','retail-area@2x.png'],'text' => 'Area manager checklist'],
            ['image' => 'retail-store.png','srcset' =>['retail-store.png','retail-store@2x.png'],'text' => 'Retail store checklist'],
            ['image' => 'retail-customer.png','srcset' =>['retail-customer.png','retail-customer@2x.png'],'text' => 'Retail customer satisfaction survey '],
        ],
    'companion' => [
        'text' => '“We used to have paper checklists to remind employees of tasks, but nobody filled them out. With the app, the inspection goes so fast that it doesn’t bother employees and we get a real-time overview of the quality of all our stores.“',
        'info' => '- Carsten, Project Manager',
        'logo' => ''
                    ],
    'template' => ['text' => 'More retail templates','url' => '#']
    ])
    {{-- End Retail Section --}}

    {{-- Start LOGISTICS Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-logistics.png',
   'text' => 'LOGISTICS & TRANSPORTATION',
   'icon' => 'car.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => 'Lumiform provides a single solution for all your inspections and audits. Create customised forms for safety inspections, vehicle defect reports, tank inspections or driver assessments, and manage the whole process.',
    'explore' => ['url' => '#','text' => 'Explore Lumiform for logistics'],
    'items' => [
            ['image' => 'driver-field-audit.png','srcset' =>['driver-field-audit.png','driver-field-audit@2x.png'],'text' => 'Driver field audit'],
            ['image' => 'rail-safet-check.png','srcset' =>['rail-safet-check.png','rail-safet-check@2x.png'],'text' => 'Rail safety check'],
            ['image' => 'driver-assessment.png','srcset' =>['driver-assessment.png','driver-assessment@2x.png'],'text' => 'Driver assessment'],
            ['image' => 'monthly-tank-inspection.png','srcset' =>['monthly-tank-inspection.png','monthly-tank-inspection@2x.png'],'text' => 'Monthly tank inspection'],
            ['image' => 'heavy-vehicle-inspection.png','srcset' =>['heavy-vehicle-inspection.png','heavy-vehicle-inspection@2x.png'],'text' => 'Heavy vehicle inspection'],
            ['image' => 'vehicle-defect-report.png','srcset' =>['vehicle-defect-report.png','vehicle-defect-report@2x.png'],'text' => 'Vehicle defect report '],
        ],
    'companion' => [
        'text' => '“With Lumiform we were able to keep our fleet almost accident-free last year. Regular inspections have saved us a lot of money as we have had fewer vehicle failures.”',
        'info' => '- Karina, Team Lead Quality and Energy Management',
        'logo' => ''
                    ],
    'template' => ['text' => 'More logistics templates','url' => '#']
    ])
    {{-- End LOGISTICS Section --}}

    {{-- Start Facality Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-facility.png',
   'text' => 'FACILITY MANAGEMENT',
   'icon' => 'facility.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => 'With Lumiform, you can do all your audits and inspections via one flexible system. Create forms for health audits, fire protection, general maintenance and building services inspections, according to your needs. ',
    'explore' => ['url' => '#','text' => 'Explore Lumiform for facility management'],
    'items' => [
            ['image' => 'facility-site-inspections.png','srcset' =>['facility-site-inspections.png','facility-site-inspections@2x.png'],'text' => 'Site inspection form'],
            ['image' => 'facility-cleaning.png','srcset' =>['facility-cleaning.png','facility-cleaning@2x.png'],'text' => 'Facility cleaning checklist'],
            ['image' => 'facility-maintenance.png','srcset' =>['facility-maintenance.png','facility-maintenance@2x.png'],'text' => 'Facility maintenance checklist'],
            ['image' => 'facility-energy.png','srcset' =>['facility-energy.png','facility-energy@2x.png'],'text' => 'Energy audit'],
            ['image' => 'facility-office-building-maintenance.png','srcset' =>['facility-office-building-maintenance.png','facility-office-building-maintenance@2x.png'],'text' => 'Office building maintenance'],
            ['image' => 'facility-safety-inspection.png','srcset' =>['facility-safety-inspection.png','facility-safety-inspection@2x.png'],'text' => 'Facility safety inspection '],
        ],
    'companion' => [
        'text' => '“We find issues in every one of our facility inspections. In the past, we had to put so much effort into assigning and tracking the troubleshooting. Today, everything runs fully automatically while we carry out the inspection via the Lumiform App.”',
        'info' => '- Uwe, Head of Operations',
        'logo' => ''
                    ],
    'template' => ['text' => 'More facility management templates','url' => '#']
    ])
    {{-- End Facality Section --}}

    {{-- Start Facality Section --}}
    @include('components.solution.banner_with_text',[
   'image' => 'bg-pharma.png',
   'text' => 'PHARMA & CHEMICALS',
   'icon' => 'pharma.svg',
   ])
    @include('components.solution.description_section',[
    'mainText' => 'Lumiform is your all-in-one solution for all audits and inspections. Create fire safety, risk assessment, hazard assessment and supplier audit forms, within minutes. ',
    'explore' => ['url' => '#','text' => 'Explore Lumiform for pharma & chemicals'],
    'items' => [
            ['image' => 'chemical-handling.png','srcset' =>['chemical-handling.png','chemical-handling@2x.png'],'text' => 'Chemical handling, storage and disposal checklist'],
            ['image' => 'chemical-audit.png','srcset' =>['chemical-audit.png','chemical-audit@2x.png'],'text' => 'Chemical audit'],
            ['image' => 'pharma-safety.png','srcset' =>['pharma-safety.png','pharma-safety@2x.png'],'text' => 'Chemical risk assessment form'],
            ['image' => 'pharma-risk-assessment-form.png','srcset' =>['pharma-risk-assessment-form.png','pharma-risk-assessment-form@2x.png'],'text' => 'Chemical safety'],
            ['image' => 'pharma-workplace-hazard-assessment-form.png','srcset' =>['pharma-workplace-hazard-assessment-form.png','pharma-workplace-hazard-assessment-form@2x.png'],'text' => 'Workplace hazard assessment form'],
            ['image' => 'pharma-hazardous-chemical-exposure-checklist.png','srcset' =>['pharma-hazardous-chemical-exposure-checklist.png','pharma-hazardous-chemical-exposure-checklist@2x.png'],'text' => 'OSHA hazardous chemical exposure checklist '],
        ],
    'companion' => [
        'text' => '“With Lumiform we have 100% control over all processes in the field in quality and safety management. We know at all times which person completed the inspection at which time and at which location.”',
        'info' => '- Christina, Head of Quality, Environmental and Safety Management',
        'logo' => ''
                    ],
    'template' => ['text' => 'More pharma & chemicals templates','url' => '#']
    ])
    {{-- End Facality Section --}}
@endsection
