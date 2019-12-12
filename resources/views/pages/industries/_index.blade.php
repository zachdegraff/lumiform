@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section class="py-12 lg:py-40">
        <div class="container mx-auto">
            <h1 class="tracking-normal text-center  text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
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
            ['image' => 'rect-35.svg','text' => 'Manager cleaning check'],
            ['image' => 'rect-35.svg','text' => 'Mystery shopper checklist'],
            ['image' => 'rect-35.svg','text' => 'Daily temperature log'],
            ['image' => 'rect-35.svg','text' => 'General food, safety and hygiene checklist'],
            ['image' => 'rect-35.svg','text' => 'Self monitoring checklist'],
            ['image' => 'rect-35.svg','text' => 'Closing the counter checklist'],
        ],
    'companion' => [
        'text' => '“Lumiform has enabled us to get full transparency regarding our quality processes in the stores, and thus helps us to improve our quality procedures continuously.“',
        'info' => '- Jens-Oliver Meurer, Head of Operations Burgerista, Germany',
        'logo' => 'burgerista.png'
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
            ['image' => 'rect-35.svg','text' => 'Incident reports'],
            ['image' => 'rect-35.svg','text' => 'Vehicle inspection'],
            ['image' => 'rect-35.svg','text' => 'Weekly site safety inspection'],
            ['image' => 'rect-35.svg','text' => 'Daily safety inspection (pre-start)'],
            ['image' => 'rect-35.svg','text' => 'Safety walk checklist'],
            ['image' => 'rect-35.svg','text' => 'Weekly toolbox check'],
        ],
    'companion' => [
        'text' => '“Lumiform has helped us to eliminate accidents on the construction site, while at the same time, we have managed to increase the quality of work through frequent safety and quality controls.“',
        'info' => '- VIP, Title Company Name',
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
            ['image' => 'rect-35.svg','text' => '5S audit'],
            ['image' => 'rect-35.svg','text' => 'Facility review'],
            ['image' => 'rect-35.svg','text' => 'High risk machine safety checklist'],
            ['image' => 'rect-35.svg','text' => 'Safety assessment of forklift driver'],
            ['image' => 'rect-35.svg','text' => 'General risk assessment'],
            ['image' => 'rect-35.svg','text' => 'Gemma walk checklist'],
        ],
    'companion' => [
        'text' => '“Lumiform has helped us to reduce audit times by half. We have transferred the solution to other processes that were previously performed manually, such as field reports, etc.”',
        'info' => '- VIP, Title Beumer Group',
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
            ['image' => 'rect-35.svg','text' => 'Retail cleaning checklist'],
            ['image' => 'rect-35.svg','text' => 'Incoming goods inspection'],
            ['image' => 'rect-35.svg','text' => 'Retail property management form'],
            ['image' => 'rect-35.svg','text' => 'Area manager checklist'],
            ['image' => 'rect-35.svg','text' => 'Retail store checklist'],
            ['image' => 'rect-35.svg','text' => 'Retail customer satisfaction survey '],
        ],
    'companion' => [
        'text' => '“Lumiform has enabled us to get full transparency regarding our quality processes in the stores, and thus helps us to improve our quality procedures continuously.“',
        'info' => '- VIP, Title Werkhaus',
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
            ['image' => 'rect-35.svg','text' => 'Driver field audit'],
            ['image' => 'rect-35.svg','text' => 'Rail safety check'],
            ['image' => 'rect-35.svg','text' => 'Driver assessment'],
            ['image' => 'rect-35.svg','text' => 'Monthly tank inspection'],
            ['image' => 'rect-35.svg','text' => 'Heavy vehicle inspection'],
            ['image' => 'rect-35.svg','text' => 'Vehicle defect report '],
        ],
    'companion' => [
        'text' => '“Lumiform has helped us to reduce audit times by half. We have transferred the solution to other processes that were previously performed manually, such as field reports, etc.”',
        'info' => '- VIP, Title Company Name',
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
            ['image' => 'rect-35.svg','text' => 'Site inspection form'],
            ['image' => 'rect-35.svg','text' => 'Facility cleaning checklist'],
            ['image' => 'rect-35.svg','text' => 'Facility maintenance checklist'],
            ['image' => 'rect-35.svg','text' => 'Energy audit'],
            ['image' => 'rect-35.svg','text' => 'Office building maintenance'],
            ['image' => 'rect-35.svg','text' => 'Facility safety inspection '],
        ],
    'companion' => [
        'text' => '“Lumiform has helped us to reduce audit times by half. We have transferred the solution to other processes that were previously performed manually, such as field reports, etc.”',
        'info' => '- VIP, Title Company Name',
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
            ['image' => 'rect-35.svg','text' => 'Chemical handling, storage and disposal checklist'],
            ['image' => 'rect-35.svg','text' => 'Chemical audit'],
            ['image' => 'rect-35.svg','text' => 'Chemical risk assessment form'],
            ['image' => 'rect-35.svg','text' => 'Chemical safety'],
            ['image' => 'rect-35.svg','text' => 'Workplace hazard assessment form'],
            ['image' => 'rect-35.svg','text' => 'OSHA hazardous chemical exposure checklist '],
        ],
    'companion' => [
        'text' => '“Lumiform has helped us to reduce audit times by half. We have transferred the solution to other processes that were previously performed manually, such as field reports, etc.”',
        'info' => '- XY vn Firma YZ',
        'logo' => ''
                    ],
    'template' => ['text' => 'More pharma & chemicals templates','url' => '#']
    ])
    {{-- End Facality Section --}}
@endsection
