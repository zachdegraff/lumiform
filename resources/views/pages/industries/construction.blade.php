@extends('layout/base')

@section("head.title", __(""))

@section("content")
    @include('components.solution.industries_banner_section',[
  'imageBg' => 'construction-banner.png',
  'class' => 'w-full py-16',
  'heading' => 'Improve safety on the construction site',
  'text' => 'Only Lumiform is designed to help construction businesses in making their sites safer, within minutes.',
  ])

    <section class="py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 mb-32 uppercase tracking-heading">
                @lang('Lumiform is the easiest way for construction companies to…')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/injury-icon.svg',
                'heading' => 'Prevent injuries and reduce risks',
                'color' => 'gold',
                'text' => 'Track whether checks are done in time and solve issues as soon as they occur.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/glass-icon_blue.svg',
                'heading' => 'Ensure full transparency',
                'color' => 'light-blue',
                'text' => 'Cut your inspection time by 30% through faster conduction and automated documentation.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon_green.svg',
                'heading' => 'Save time',
                'color' => 'green',
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
                @lang('Reduce the time required for audits while <span class="text-gold">improving safety</span>')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-20">
                @lang('Perform regular site inspections, discover more issues, and resolve them faster in a team with our intuitive app.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['title' => 'Create forms','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Conduct via App','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Automate temperature and humidity checks','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Solve Issues','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ['title' => 'Results, Reports and Analyses','desc' => 'Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.'],
            ],
            'image' => 'group-2831.png',
            'srcset' => ['group-2831.png','group-2831@2x.png']
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
                @lang('<span class="text-purple">Check all of your quality standards</span> with one app')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'checkin-icon_purple.svg', 'text' => 'Site documentation'],
                ['icon' => 'list-icon_orange.svg', 'text' => 'Maintenance logs'],
                ['icon' => 'expense-icon_green.svg', 'text' => 'Expense documentation'],
                ['icon' => 'acceptance-icon_blue.svg', 'text' => 'Acceptance forms'],
                ['icon' => 'handover-icon_green.svg', 'text' => 'Handover forms'],
                ['icon' => 'safety-icon_gold.svg', 'text' => 'Work safety audits'],
                ['icon' => 'construction-icon_orange.svg', 'text' => 'Construction logbook'],
                ['icon' => 'walk-icon_red.svg', 'text' => 'Safety walks'],
                ['icon' => 'car-icon_blue.svg', 'text' => 'Vehicles inspection'],
                ['icon' => 'list-icon_red.svg', 'text' => 'Feedback survey'],
                ['icon' => 'order-icon_purple.svg', 'text' => 'Order forms'],
                ['icon' => 'glass-icon_gold.svg', 'text' => 'Pre-start siteinspection'],
                ['icon' => 'tool-box-icon_orange.svg', 'text' => 'Tool box checklist'],
                ['icon' => 'list-icon_purple.svg', 'text' => 'order  forms'],
                ['icon' => 'commision-icon_blue.svg', 'text' => 'Commissioning form'],
                ['icon' => 'safety-icon_orange.svg', 'text' => 'Safety assessments'],
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
        'heading' => '<span class="text-green">Make your workplace safer</span> while maximising compliance',
        'text' =>  'Browse the Lumiform construction template library. Get started with expert-proofed checklists for construction businesses.',
        'items' => [
                ['image' => 'rect-35.svg','text' => 'Manager cleaning check'],
                ['image' => 'rect-35.svg','text' => 'Mystery shopper checklist'],
                ['image' => 'rect-35.svg','text' => 'Daily temperature log'],
                ['image' => 'rect-35.svg','text' => 'General food safety And hygiene checklist'],
                ['image' => 'rect-35.svg','text' => 'Self-monitoring checklist for food businesses'],
                ['image' => 'rect-35.svg','text' => 'Closing the counter checklist '],
            ],
        'image' => 'group-1542.png',
        'template' => ['text' => 'View all TEMPLATES','url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => '<span class="text-gold">Trusted by the world’s best brands</span> in the construction industry',
    'items' => [
    ['image' => 'rect-840.png','srcset' => ['rect-840.png','rect-840@2x.png'],'template' => ['url' => '#','text' => 'View INSPECTIOn CASE STUDY'] ],
    ['image' => 'rect-840.png','srcset' => ['rect-840.png','rect-840@2x.png'],'template' => ['url' => '#','text' => 'View AUDIT CASE STUDY'] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'quote-orange.png',
    'text' => '„In the past, we used paper, pen and camera for our audit reports. Now we can use Lumiform and we get everything we need in one tool.“',
    'position' => '- VIP, TItle <br> Company Name',
    ])
    @include('components.product.bottom_form',[
    'heading' =>'Start improving food quality now – free of charge!',
    'sectionBg' =>'orange-light',
    'buttonBg' =>'orange',
    'image' =>'img/man-sitting.svg',
    ])
@endsection
