@extends('layout/base')

@section("head.title", __("Easy and Powerful Audit Software & App - FREE  - Lumiform"))
@section('meta-tags')
        <meta name="keywords" content="@lang('Audit App')">
        <meta name="keywords" content="@lang('Audit software')">
        <meta name="keywords" content="@lang('Audit tool')">
    <meta name="description" content="@lang('Conduct audits in half the time, solve issues more quickly, and get fully automated audit reports with the audit app + audit software. FOR FREE!')">
@endsection
@section("content")
    <section class="xxl:pt-24 xxl:pb-32 py-16 cases--audit">
        <div class="container mx-auto">
            <div class="w-full lg:w-10/12 mx-auto lg:mb-32 mb-12">
                <h1 class="text-70 font-cocogoose font-black uppercase  text-center tracking-normal text-primary lg:mb-16 mb-10">
                    @lang('Your secret to time-saving audits')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('With Lumiform’s audit app, you cut the inspection time by half. Perform audits anytime and everywhere, get automatically created reports, and analyse with ease. ')
                </p>
            </div>
            <button class="mx-auto w-215  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-20 h-70  rounded-20 items-center justify-center flex">
                @lang('try for FREE')
            </button>
        </div>
    </section>
    <section class="py-16 lg:py-32 with__border--bottom">
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-light-blue">Cut audit time </span> by 50%'),
        'image' => ['group-3144.png','group-3144@2x.png'],
        'items' => [
        __('Efficient, digital auditing, without an additional camera'),
        __('Custom audit reports are automatically created, and can be sent directly to team members')
        ],
        'bottom' => ['text' => __('Through Lumiform, Beumer Group was able to reduce the time required for an audit by 50%.'),'borderColor' => 'light-blue']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('Uncover more issues and <span class="text-red">solve them faster </span>'),
        'image' => ['group-4928.png','group-4928@2x.png'],
        'reversed' => true ,
        'items' => [
        __('Assign corrective actions to teammates on the fly'),
        __('Set a deadline and track the progress')
        ],
        'bottom' => ['text' => 'Nordsee managed to cut the time spent on troubleshooting by 60%.','borderColor' => 'red']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-green">Analyse faster </span> and more accurately'),
        'image' => ['group-5111.png','group-5111@2x.png'],
        'items' => [
        __('Get all audit results and trends at a glance'),
        __('Monitor failed audits and troubleshooting over time'),
        __('Uncover weak areas that require attention'),
        ],
        'bottom' => ['text' => __('MyGoodness has eight times fewer critical and moderate problems than they did a year ago, thanks to our audit platform.'),'borderColor' => 'green']
        ])
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-20 h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
    </section>
    <section class="py-16 lg:py-28 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-2 uppercase tracking-heading">
                @lang('<span class="text-light-blue">Save time on every audit, </span> while troubleshooting with ease')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-10 lg:mb-26 ">
                @lang('Intuitive forms guide you through the audit while reports are automatically <span class="line__break"></span>created. Create a clear path of action when issues occur.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4892.png','group-4892@2x.png'],'title' => __('Create audit forms and report templates'),'desc' => __('Lumiform allows you to create audits in just a few minutes, entirely according to your individual needs, with our flexible form and report builder.')],
            ['srcset' => ['group-4837.png','group-4837@2x.png'],'title' => __('Conduct via App'),'desc' => __('Perform your audits anywhere, anytime via the app –online or offline. Add photos and comments automatically, while auditing.')],
            ['srcset' => ['group-4838.png','group-4838@2x.png'],'title' => __('Solve Issues'),'desc' => __('Let teammates or third parties know if audit checks uncovered issues, and assign corrective action to any stakeholder immediately. Track the troubleshooting process while the system documents everything automatically.')],
            ['srcset' => ['group-4681.png','group-4681@2x.png'],'title' => __('AUTOMATIC AND CUSTOMISABLE AUDIT REPORTS'),'desc' => __('Lumiform automatically creates in-depth analyses. View all reports, including images, comments and checks, and share your audit report immediately via e-mail. ')],
            ['srcset' => ['group-5131.png','group-5131@2x.png'],'title' => __('Smart analyses'),'desc' => __('Lumiform presents the standardised data in such a way that you can quickly identify areas that need your special attention.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])

        </div>
    </section>
    @include('components.solution.industries_explore_section',[
    'heading' => __('<span class="text-purple">WORK MORE EFFICIENTLY </span> WITH LUMIFORM’s DIGITAL AUDITS'),
    'items' => [
    ['image' => 'case-food-audit.png','srcset' => ['case-food-audit.png','case-food-audit@2x.png'],'template' => ['url' => '#','text' => __('View FOOD AUDIT CASE STUDY')] ],
    ['image' => 'manufacturing-inspection.png','srcset' => ['manufacturing-inspection.png','manufacturing-inspection@2x.png'],'template' => ['url' => '#','text' => __('View MANUFACTURING Audit CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'heart-blue.png',
    'class' => 'bg-blue-opacity',
    'text' => __('“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“'),
    'position' => __('- Mark, HSE-Manager'),
    ])
    @include('components.use-cases.section_companies')
    @include('components.product.bottom_form',[
    'heading' => __('Start conducting your audits via app, with Lumiform – free of charge'),
    'sectionBg' =>'blue',
    'left' => true,
    'srcset' => ['group-2173.png','group-2173@2x.png'],
    'buttonBg' =>'blue-dark',
    'image' =>'img/group-2028.svg',
    ])
@endsection
