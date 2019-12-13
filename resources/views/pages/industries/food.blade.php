@extends('layout/base')

@section("head.title", __(""))

@section("content")
    @include('components.solution.industries_banner_section',[
    'imageBg' => 'food-banner.png',
    'heading' => 'Digital quality assurance for your food business.',
    'text' => 'Lumiform helps your business within the food industry to comply with regulations and improve quality through more transparent processes.',
    ])

    <section class="py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 mb-32 uppercase tracking-heading">
                @lang('With Lumiform, your <span class="text-gold">food and hospitality</span> company can…')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/umbrella-icon.svg',
                'heading' => 'Protect your brand',
                'color' => 'grey-bold',
                'text' => 'Track whether checks are done in time and solve issues as soon as they occur.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon.svg',
                'heading' => 'Save on documentation time',
                'color' => 'grey-bold',
                'text' => 'Cut your inspection time by 30%, through faster conduction and automated documentation.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/check-icon.svg',
                'heading' => 'Comply 100% with regulations',
                'color' => 'grey-bold',
                'text' => 'We help you to comply with all the laws and to ensure that you have all the documents available at the right time.',
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
                @lang('<span class="text-light-blue">Reduce documentation time</span> while increasing food quality')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-20">
                @lang('Make sure all inspections and audits are done reliably and issues resolved quickly. And get the visibility you need to steer the ship.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['title' => 'Create forms','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Conduct via App','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Automate temperature and humidity checks','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Solve Issues','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Results, Reports and Analyses','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ],
            'image' => 'group-3388.png',
            'srcset' => ['group-3388.png','group-3388@2x.png']
            ])
            <a href="#"
               class="flex items-center justify-center uppercase text-red text-center block text-17 lg:text-20 tracking-large lg:mt-24">
                @lang('Explore more PRODUCT features')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>

        </div>
    </section>
    <section id="temperature">
        <div class="container mx-auto flex items-center justify-between">
            <div class="w-5/12">
                <img src="{{asset('img/group-3311.png')}}" alt="" srcset="{{asset('img/group-3311.png')}},
                {{asset('img/group-3311@2x.png')}}">
            </div>
            <div class="w-5/12">
                <h3 class="text-red uppercase text-40 font-cocogoose tracking-heading font-bold mb-6">
                    @lang('Add automatic temperature monitoring')
                </h3>
                <p class="font-din font-light text-30 tracking-text text-secondary mb-10">
                    @lang('Explore the most affordable temperature tracking system on the market. It’s manufacturer-independent and very easy to install.')
                </p>
                <a href="#"
                   class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large">
                    @lang('Discover the sensor solution')
                    <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                </a>
            </div>
        </div>
    </section>
    <section class="py-24">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-40 font-cocogoose tracking-heading font-bold mb-32">
                @lang('<span class="text-purple">Check all of your quality standards</span> with one app')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'haccr-icon.svg', 'text' => 'HACCP documentation'],
                ['icon' => 'equipment-icon.svg', 'text' => 'Equipment log'],
                ['icon' => 'glass-icon.svg', 'text' => 'Glass breakage documentation'],
                ['icon' => 'loading-icon.svg', 'text' => 'Bearing inspections'],
                ['icon' => 'goods-icon.svg', 'text' => 'Incoming goods inspection'],
                ['icon' => 'inventory-icon.svg', 'text' => 'Inventory control'],
                ['icon' => 'visitor-icon.svg', 'text' => 'Visitor documentation'],
                ['icon' => 'frying-icon.svg', 'text' => 'Frying fat control'],
                ['icon' => 'cleaning-icon.svg', 'text' => 'Cleaning documentation'],
                ['icon' => 'complaint-icon.svg', 'text' => 'Complaint form'],
                ['icon' => 'temperature-icon.svg', 'text' => 'Temperature logs'],
                ['icon' => 'hazard-icon.svg', 'text' => 'Hazard assessment'],
                ['icon' => 'audits-icon.svg', 'text' => 'Store audits'],
                ['icon' => 'pest-icon.svg', 'text' => 'Pest control'],
                ['icon' => 'training-icon.svg', 'text' => 'Training documentation'],
                ['icon' => 'alergen-icon.svg', 'text' => 'Allergen documentation'],
                ]
                ])
            </div>
            <a href="#"
               class="flex items-center uppercase justify-center text-red text-center block text-17 lg:text-20 tracking-large mt-10">
                @lang('View all food use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => 'Quickstart <span class="text-green">with expert-proofed templates</span> for food businesses',
        'text' =>  'Lumiform offers ready-to-use templates, and you can customise them as needed.',
        'items' => [
                ['image' => 'rect-35.svg','text' => 'Manager cleaning check'],
                ['image' => 'rect-35.svg','text' => 'Mystery shopper checklist'],
                ['image' => 'rect-35.svg','text' => 'Daily temperature log'],
                ['image' => 'rect-35.svg','text' => 'General food safety And hygiene checklist'],
                ['image' => 'rect-35.svg','text' => 'Self-monitoring checklist for food businesses'],
                ['image' => 'rect-35.svg','text' => 'Closing the counter checklist '],
            ],
        'image' => 'group-1509.png',
        'template' => ['text' => 'View all TEMPLATES','url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => 'Explore how <span class="text-gold">leaders in the food industry</span> use Lumiform',
    'items' => [
    ['image' => 'rect-840.png','srcset' => ['rect-840.png','rect-840@2x.png'],'template' => ['url' => '#','text' => 'View INSPECTIOn CASE STUDY'] ],
    ['image' => 'rect-840.png','srcset' => ['rect-840.png','rect-840@2x.png'],'template' => ['url' => '#','text' => 'View AUDIT CASE STUDY'] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'group-1031.svg',
    'text' => '„In the past, we used paper, pen and camera for our audit reports. Now we can use Lumiform and we get everything we need in one tool.“',
    'position' => '- VIP, TItle <br> Company Name',
    ])
    @include('components.product.bottom_form',[
    'heading' =>'Start improving food quality now – free of charge!',
    'sectionBg' =>'red-opacity',
    'buttonBg' =>'red',
    'left' => true,
    'image' =>'group-2001.svg',
    ])
@endsection
