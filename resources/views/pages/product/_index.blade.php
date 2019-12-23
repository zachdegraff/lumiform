@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="product__banner" class="py-10 lg:pt-32 lg:pb-24 bg-grey relative">
        <div class="container mx-auto flex">
            <div class="banner__left lg:w-1/2 w-full">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">@lang('Extremely powerful.')</h1>
                @include('components.product.banner_form',['buttonText' => 'try for free'])
            </div>
            <div class="banner__right hidden lg:block absolute top-0 right-0">
                <img src="{{asset('img/landing-page-devices.svg')}}" alt="">
            </div>
        </div>

    </section>
    <section id="how__works" class="py-32 ">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-3 uppercase tracking-heading">@lang('How Lumiform works')</h2>
            <p class="font-light text-center font-din md:text-20 lg:text-30 text-secondary tracking-text mb-24">@lang('Make sure you’re mastering the whole process – from flexible form building to fast problem solving to in depth analysis.')</p>
        </div>
        <div class="container mx-auto">
            <div id="tab" class="px-5 lg:px-0">
                <div class="mx-auto tab__header flex-wrap sm:flex-no-wrap h-auto sm:h-40 md:h-70 flex md:text-15 lg:text-20 rounded-l-20 rounded-r-20 mb-12 lg:mb-24">
                    <div class="header__item flex sm:flex-none sm:w-auto justify-center items-center w-1/2  py-2 px-2 md:py-5 md:px-5 xxl:px-24 font-cocogoose font-bold text-secondary active"
                         onclick="openTab(this)" data-index="0">@lang('Create forms')</div>
                    <div class=" header__item flex sm:flex-none sm:w-auto justify-center items-center w-1/2  py-2 px-2 md:py-5 md:px-5 xxl:px-24 font-cocogoose font-bold text-secondary"
                         onclick="openTab(this)" data-index="1">@lang('Conduct via app')</div>
                    <div class=" header__item flex sm:flex-none sm:w-auto justify-center items-center w-1/2  py-2 px-2 md:py-5 md:px-5 xxl:px-24 font-cocogoose font-bold text-secondary"
                         onclick="openTab(this)" data-index="2">@lang('Resolve issues')</div>
                    <div class=" header__item flex sm:flex-none sm:w-auto justify-center items-center w-1/2   py-2 px-2 md:py-5 md:px-5 xxl:px-24 font-cocogoose font-bold text-secondary"
                         onclick="openTab(this)" data-index="3">@lang('Results, reports, & analyses')</div>
                </div>
                <div class="tab__content">
                    @include('components.product.tab_content',[
                    'isActive' => true,
                    'textColor' => 'primary',
                    'heading' => '<span class="text-light-blue">Start within minutes</span> with forms that are tailored to your needs.',
                    'text' => 'Use ready-made, expert-proofed checklists from the template library, which you can further customise according to your needs. Or, start from scratch and convert manual hard copies or excel lists into digital checklists.',
                    'discoverText' => 'Discover how to create custom forms',
                    'image' => 'img/group-1105.svg',
                    'urlTo' => 'product.formBuilder',]
                    )
                    @include('components.product.tab_content',[
                    'isActive' => false,
                    'textColor' => 'primary',
                    'heading' => '<span class="text-purple">Conduct quickly and reliably</span>, whenever and wherever you need to.',
                    'text' => 'Conduct inspections and audits, whether on a tablet or smartphone, Android or iOS – online or offline. The highly intuitive and easy-to-use app guides you through all checks. ',
                    'discoverText' => 'Discover how to conduct via the intuitive app',
                    'image' => 'img/group-916.svg',
                    'urlTo' => 'product.conduct'])
                    @include('components.product.tab_content',[
                    'isActive' => false,
                    'textColor' => 'red',
                    'heading' => 'Uncover more issues and  resolve them faster.',
                    'text' => 'Make sure all field workers can quickly report quality and safety issues. Keep track of the troubleshooting progress and resolve problems together, with your teammates.. The highly intuitive and easy-to-use app guides you through all checks.. Or, start from scratch and convert manual hard copies or excel lists into digital checklists.',
                    'discoverText' => 'DISCOVER HOW TO SOLVE ISSUES QUICKLY',
                    'image' => 'img/group-1433.svg',
                    'urlTo' => 'product.issues'])
                    @include('components.product.tab_content',[
                    'isActive' => false,
                    'textColor' => 'gold',
                    'heading' => 'Custom reports and  detailed analyses',
                    'text' => 'Audit reports are automatically created, so you don’t waste time on post-processing. Uncover areas of your organisation that need your attention, and continuously improve quality and security through in-depth analyses..',
                    'discoverText' => 'DISCOVER CUSTOM REPORTS AND ANALYSES',
                    'image' => 'img/group-928.svg',
                    'urlTo' => 'product.analysis'])


                </div>
            </div>
            <a href=""
               class="mx-auto mt-8 base__button font-extrabold bg-red text-white uppercase font-cocogoose text-xl h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
        </div>
    </section>
    <section id="flow" class="py-12 lg:py-28 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-50 mb-8 lg:mb-8 uppercase tracking-heading">@lang('The Lumiform flow')</h2>
            <p class="px-16 text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-32">
                @lang('Digitise all quality and safety efforts, and cut down inspection time, with the Lumiform app. And, even more importantly, continuously optimise your quality and safety operations easily, with the Lumiform flow.')
            </p>
            <div class="flow__process flex-wrap lg:flex-no-wrap flex justify-between  pt-24 relative ">
                @include('components.product.flow_image',[
                'image' => 'img/group-1810.svg',
                'textColor' => 'light-blue',
                'text' => 'create',
                ])
                @include('components.product.flow_image',[
               'image' => 'img/group-1823.svg',
               'textColor' => 'gold',
               'text' => 'Conduct',
               ])
                @include('components.product.flow_image',[
               'image' => 'img/group-1836.svg',
               'textColor' => 'red',
               'text' => 'Correct',
               ])
                @include('components.product.flow_image',[
               'image' => 'img/group-2564.svg',
               'textColor' => 'purple',
               'text' => 'Analyse',
               ])
                @include('components.product.flow_image',[
               'image' => 'img/group-2580.svg',
               'textColor' => 'green',
               'text' => 'Optimise',
               ])
                <div class="line z-0 hidden lg:block"></div>
            </div>
        </div>
    </section>
    <section id="feedback" class="bg-red-light py-16">
        <div class="container mx-auto flex justify-around">
            <div class="w-0 lg:w-3/12">
                <img src="{{asset('img/group-1031.svg')}}" alt="">
            </div>
            <div class="w-full lg:w-6/12  flex flex-col justify-around">
                <p class="font-din font-light text-30 text-secondary">@lang('“With Lumiform, we conduct quality and safety checks quickly, easyly, and reliably while improving quality and safety ongoing.”')</p>
                <div class="signature flex items-center">
                    <p class="font-din font-light text-20 text-secondary">@lang('- Valentin Döhring, CEO')</p>
                    <img src="{{asset('img/signature.svg')}}" alt="" class="ml-12">
                </div>
            </div>

        </div>

    </section>
    @include('components.product.companions_section',[
    'heading' => 'Manage quality and safety like industry leaders',
    'icons' => [
    'adidasArtboard.svg','ALDIArtboard.svg','AllianzArtboard.svg','ARALArtboard.svg','audi-black-vector-logo.svg','BecksArtboard.svg',
    'BMWArtboard.svg','BOSCHArtboard.svg','DHlArtboard.svg','DPArtboard.svg','dpd-logo-png.svg','Dr._Oetker-Logo.svg','EDEKAArtboard.svg',
    'FantaArtboard.svg','hasseroeder-vector-logo.svg','HermesArtboard.svg','HIPPArtboard.svg','KauflandArtboard.svg','KrombacherArtboard.svg',
    'LIDLArtboard.svg','LufthansaArtboard.svg','Mercedes-BenzArtboard.svg','MieleArtboard.svg','NestleArtboard.svg','NIVEAArtboard.svg',
    'obi-vector-logo.svg','OTTOArtboard.svg','PUMAArtboard.svg','RittersportArtboard.svg','SchwarzkopfArtboard.svg','Siemens.svg',
    'tchibo1Artboard.svg','tui-vector-logo.svg'

    ]
    ])
    @include('components.product.bottom_form',[
    'heading' =>'It’s easy to get started - free of charge',
    'sectionBg' =>'purple-light',
    'buttonBg' =>'purple',
    'image' =>'img/group-1975.svg',
    ])


    <script>
        const tabElement = document.getElementsByClassName('header__item');
        const tabContent = document.getElementsByClassName('content__item');

        function removeClases(data) {
            [].forEach.call(data, function (el) {
                el.classList.remove("active");
            });
        }

        function openTab(event) {
            removeClases(tabElement)
            removeClases(tabContent)

            let index = event.dataset.index;
            event.classList.add('active');
            tabContent[index].classList.add('active');
        };
    </script>
@endsection
