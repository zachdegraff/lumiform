@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section class="pt-26 bg-grey-light" style="background: url('{{asset('img/group-2511.svg')}}') no-repeat #E7EBED33;
            background-position: 25% -33%;">
        <div class="container mx-auto">
            <div class="mb-16">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary mb-12 leading-tight">
                    @lang('Explore how Lumiform is helping teams')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('Read case studies about how Lumfirom is helping businesses to improve their quality and safety standards in the field.')
                </p>
            </div>
            <img src="{{asset('img/group-5138.svg')}}" alt="">
        </div>
    </section>
    @include('components.resources.case-studies_items',[
    'items'=> [
    ['srcset' => ['resources-light-vehicle.png','resources-light-vehicle@2x.png'],
        'title' => __('Food Truck Inspection'),
        'text'=> __('Download digital irrigation checklist for more efficient irrigation audits and help more clients conserve water in their own landscape properties. '),
        'url' => '#',
        'moreText' => __('Find out more')],
    ['srcset' => ['resources-vehicle-inspection.png','resources-vehicle-inspection@2x.png'],
        'title' => __('Vehicle Inventory'),
        'text'=> __('Digital Vehicle Inventory Templates: 1. Vehicle Inventory Template; 2. Pre-delivery Inspection Checklist; 3. PDI Report Checklist.'),
        'url' => '#',
        'moreText' => __('Find out more')],
    ['srcset' => ['resources-safety.png','resources-safety@2x.png'],
        'title' => __('Lifeguard Audit'),
        'text'=> __('Easy and accurate fixed assets auditing using free templates: 1. Fixed Assets Audit Template; 2. Fixed Assets Internal Controls Checklist.'),
        'url' => '#',
        'moreText' => __('Find out more')],
        ['srcset' => ['resources-light-vehicle.png','resources-light-vehicle@2x.png'],
        'title' => __('Food Truck Inspection'),
        'text'=> __('Download digital irrigation checklist for more efficient irrigation audits and help more clients conserve water in their own landscape properties. '),
        'url' => '#',
        'moreText' => __('Find out more')],
    ['srcset' => ['resources-vehicle-inspection.png','resources-vehicle-inspection@2x.png'],
        'title' => __('Vehicle Inventory'),
        'text'=> __('Digital Vehicle Inventory Templates: 1. Vehicle Inventory Template; 2. Pre-delivery Inspection Checklist; 3. PDI Report Checklist.'),
        'url' => '#',
        'moreText' => __('Find out more')],
    ['srcset' => ['resources-safety.png','resources-safety@2x.png'],
        'title' => __('Lifeguard Audit'),
        'text'=> __('Easy and accurate fixed assets auditing using free templates: 1. Fixed Assets Audit Template; 2. Fixed Assets Internal Controls Checklist.'),
        'url' => '#',
        'moreText' => __('Find out more')],
        ['srcset' => ['resources-light-vehicle.png','resources-light-vehicle@2x.png'],
        'title' => __('Food Truck Inspection'),
        'text'=> __('Download digital irrigation checklist for more efficient irrigation audits and help more clients conserve water in their own landscape properties. '),
        'url' => '#',
        'moreText' => __('Find out more')],
    ['srcset' => ['resources-vehicle-inspection.png','resources-vehicle-inspection@2x.png'],
        'title' => __('Vehicle Inventory'),
        'text'=> __('Digital Vehicle Inventory Templates: 1. Vehicle Inventory Template; 2. Pre-delivery Inspection Checklist; 3. PDI Report Checklist.'),
        'url' => '#',
        'moreText' => __('Find out more')],
    ['srcset' => ['resources-safety.png','resources-safety@2x.png'],
        'title' => __('Lifeguard Audit'),
        'text'=> __('Easy and accurate fixed assets auditing using free templates: 1. Fixed Assets Audit Template; 2. Fixed Assets Internal Controls Checklist.'),
        'url' => '#',
        'moreText' => __('Find out more')],

    ]

    ])
    @include('components.product.bottom_form',[
   'heading' => __('Want to use Lumiform your way?'),
   'sectionBg' =>'blue',
   'buttonBg' =>'blue-dark',
   'image' =>'img/group-2527.png',
   'srcset' =>['group-2527.png','group-2527@2x.png']
   ])
@endsection
