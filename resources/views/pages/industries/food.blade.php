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
                'text' => 'Track whether checks are done in time and solve issues as soon as they occur.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon.svg',
                'heading' => 'Save on documentation time',
                'text' => 'Cut your inspection time by 30%, through faster conduction and automated documentation.',
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/check-icon.svg',
                'heading' => 'Comply 100% with regulations',
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
               class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large my-5 lg:mt-10">
                @lang('Explore more PRODUCT features')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>

        </div>
    </section>
@endsection
