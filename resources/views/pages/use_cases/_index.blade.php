@extends('layout/base')

@section("head.title", __("All Check Types at a Glance - Lumiform"))
@section('meta-tags')
        <meta name="keywords" content="@lang('check types')">
    <meta name="description" content="@lang('Use Lumiform App for all types of checks in your quality and safety management. TRY FREE!')">
@endsection
@section("content")
    <section id="use-cases-top" class="bg-grey-light relative pt-32 pb-32">
        <div class="container mx-auto flex flex-wrap">
            <div class="page-title w-full text-center ">
                <h1 class="tracking-normal text-center lg:text-center text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold text-primary">@lang('Specific for all types of use cases')</h1>
            </div>
            <div class="icon-block w-full flex">
                <div class="icon-block-child w-2/12">
                    <a href="@urlTo('useCases.audits')">
                        <div class="icon text-center"><img src="{{asset('img/icons/audits.svg')}}" class="mx-auto">
                        </div>
                        <div class="icon-title text-center mt-5"><p
                                    class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Audits')</p>
                        </div>
                    </a>
                </div>
                <div class="icon-block-child w-2/12">
                    <a href="@urlTo('useCases.inspections')">
                        <div class="icon text-center"><img src="{{asset('img/icons/inspections.svg')}}" class="mx-auto">
                        </div>
                        <div class="icon-title text-center mt-5"><p
                                    class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Inspections')</p>
                        </div>
                    </a>
                </div>
                <div class="icon-block-child w-2/12">
                    <a href="@urlTo('useCases.digitalChecklists')">
                        <div class="icon text-center"><img src="{{asset('img/icons/checklist.svg')}}" class="mx-auto">
                        </div>
                        <div class="icon-title text-center mt-5"><p
                                    class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Checklists')</p>
                        </div>
                    </a>
                </div>
                <div class="icon-block-child w-2/12">
                    <a href="@urlTo('useCases.assessment')">
                        <div class="icon text-center"><img src="{{asset('img/icons/assessments.svg')}}" class="mx-auto">
                        </div>
                        <div class="icon-title text-center mt-5"><p
                                    class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Assessments')</p>
                        </div>
                    </a>
                </div>
                <div class="icon-block-child w-2/12">
                    <a href="@urlTo('useCases.documentation')">
                        <div class="icon text-center"><img src="{{asset('img/icons/documentation.svg')}}"
                                                           class="mx-auto">
                        </div>
                        <div class="icon-title text-center mt-5"><p
                                    class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Documentation')</p>
                        </div>
                    </a>
                </div>
                <div class="icon-block-child w-2/12">
                    <a href="@urlTo('useCases.issue')">
                        <div class="icon text-center"><img src="{{asset('img/icons/issue-management.svg')}}"
                                                           class="mx-auto"></div>
                        <div class="icon-title text-center mt-5"><p
                                    class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Issue management')</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('components.use-cases.description_section',[
    'heading' => __('Audits'),
    'color' => 'light-blue',
    'text' => __('With Lumiform’s audit app, you cut the audit time by half. Conduct audits anytime and everywhere, share reports with all stakeholders immediately and analyse the overall performance.'),
    'explore' => ['url' => 'useCases.audits','text' => __('Explore Lumiform for audits')],
    'image' => ['group-5056.png','group-5056@2x.png'],
    'items' => [
            ['image' => 'site-safety-audit.png','srcset' =>['site-safety-audit.png','site-safety-audit@2x.png'],'text' => __('Site safety audit')],
            ['image' => 'audits-food-safety.png','srcset' =>['audits-food-safety.png','audits-food-safety@2x.png'],'text' => __('Food safety & <span class="line__break"></span> HACCP audit')],
            ['image' => 'manufacturing-audit.png','srcset' =>['manufacturing-audit.png','manufacturing-audit@2x.png'],'text' => __('5S audit')],
            ['image' => 'audits-ISO.png','srcset' =>['audits-ISO.png','audits-ISO@2x.png'],'text' => __('ISO 22000 audit <span class="line__break"></span>checklist')],
            ['image' => 'audits-iso-14001.png','srcset' =>['audits-iso-14001.png','audits-iso-14001@2x.png'],'text' => __('ISO 14001:2015 <span class="line__break"></span> audit checklist')],
            ['image' => 'audits-waste.png','srcset' =>['audits-waste.png','audits-waste@2x.png'],'text' => __('Waste management <span class="line__break"></span> compliance audit ')],
        ],
    'companion' => [
        'text' => __('“In the past, we needed about 6 hours for an audit including post-processing, today we need 3 hours for the same result. And, we can assign, schedule and trace the troubleshooting process!”'),
        'info' => __('- Kristina, Quality Manager')
                    ],
    'template' => ['text' => __('More Audit templates'),'url' => '#']
    ])
    @include('components.use-cases.description_section',[
    'heading' => __('Inspections'),
    'color' => 'purple',
    'text' => __('Lumiform enables you to create customised forms for all your quality and safety inspections. Perform all checks via the app. It’s simple, safe and reliable.'),
    'explore' => ['url' => 'useCases.inspections','text' => __('Explore Lumiform for inspections')],
    'image' => ['group-5138.png','group-5138@2x.png'],
    'items' => [
            ['image' => 'inspections-light-vehicle.png','srcset' =>['inspections-light-vehicle.png','inspections-light-vehicle@2x.png'],'text' => __('Light vehicle <span class="line__break"></span> safety inspection')],
            ['image' => 'inspections-food-promises.png','srcset' =>['inspections-food-promises.png','inspections-food-promises@2x.png'],'text' => __('Food premises self <span class="line__break"></span> inspection checklist')],
            ['image' => 'inspections-osha-self-inspection.png','srcset' =>['inspections-osha-self-inspection.png','inspections-osha-self-inspection@2x.png'],'text' => __('OSHA self <span class="line__break"></span> inspection checklist')],
            ['image' => 'inspections-food-safety.png','srcset' =>['inspections-food-safety.png','inspections-food-safety@2x.png'],'text' => __('Food safety and <span class="line__break"></span> hygiene inspection')],
            ['image' => 'inspections-workplace.png','srcset' =>['inspections-workplace.png','inspections-workplace@2x.png'],'text' => __('General workplace <span class="line__break"></span> inspection')],
            ['image' => 'inspections-template.png','srcset' =>['inspections-template.png','inspections-template@2x.png'],'text' => __('HACCP template')],
        ],
    'companion' => [
        'text' => __('“Lumiform has helped us to eliminate accidents on the construction site almost entirely, and we have managed to increase the quality of work at the same time, through frequent safety checks.“'),
        'info' => __('- Axel, CEO')
                    ],
    'template' => ['text' => __('More inspection templates'),'url' => '#']
    ])
    @include('components.use-cases.description_section',[
    'heading' => __('checklists'),
    'color' => 'green',
    'text' => __('Lumiform is your all-in-one solution for all digital lists. Create individual forms within minutes, schedule and assign, conduct inspections via mobile app, solve issues quickly and analyse the whole process.'),
    'explore' => ['url' => 'useCases.digitalChecklists','text' => __('Explore Lumiform for digital checklists')],
    'image' => ['group-5066.png','group-5066@2x.png'],
    'items' => [
            ['image' => 'construction-safety-walk.png','srcset' =>['construction-safety-walk.png','construction-safety-walk@2x.png'],'text' => __('Safety walk <span class="line__break"></span> checklist')],
            ['image' => 'checklist-safety.png','srcset' =>['checklist-safety.png','checklist-safety@2x.png'],'text' => __('Safety observation <span class="line__break"></span> checklist')],
            ['image' => 'checklists-construction.png','srcset' =>['checklists-construction.png','checklists-construction@2x.png'],'text' => __('Construction site <span class="line__break"></span> cleaning checklist')],
            ['image' => 'checklists-iso-9001.png','srcset' =>['checklists-iso-9001.png','checklists-iso-9001@2x.png'],'text' => __('ISO 9001:2008 <span class="line__break"></span> system audit checklist')],
            ['image' => 'audits-ISO.png','srcset' =>['audits-ISO.png','audits-ISO@2x.png'],'text' => __('Food premises self <span class="line__break"></span> inspection checklist')],
            ['image' => 'checklists-warehouse.png','srcset' =>['checklists-warehouse.png','checklists-warehouse@2x.png'],'text' => __('Warehouse safety <span class="line__break"></span> checklist')],
        ],
    'companion' => [
        'text' => __('„Lumiform’s digital checklists helped us to get full transparency regarding what is happening in the field, and to check whether inspectors are completing their checklists in time.“'),
        'info' => __('- Sebastian, Safety and Environment Manager')
                    ],
    'template' => ['text' => __('More digital checklist templates'),'url' => '#']
    ])
    @include('components.use-cases.description_section',[
    'heading' => __('Assessments'),
    'color' => 'gold',
    'text' => __('With the Lumiform app, you can quickly digitise all assessments, and conduct them efficiently in the field. The system creates your assessment reports automatically, and you can send them on to all stakeholders immediately. Find even more inspiration in our template library.'),
    'explore' => ['url' => 'useCases.assessment','text' => __('Explore Lumiform for assessments')],
    'image' => ['group-5067.png','group-5067@2x.png'],
    'items' => [
            ['image' => 'assessment-general-risk.png','srcset' =>['assessment-general-risk.png','assessment-general-risk@2x.png'],'text' => __('General risk <span class="line__break"></span> assessment')],
            ['image' => 'assessments-area-safety.png','srcset' =>['assessments-area-safety.png','assessments-area-safety@2x.png'],'text' => __('Area safety and <span class="line__break"></span> health assessment')],
            ['image' => 'assessment-high-risk.png','srcset' =>['assessment-high-risk.png','assessment-high-risk@2x.png'],'text' => __('High risk machine <span class="line__break"></span> safety assessment')],
            ['image' => 'assessments-hazard-risk.png','srcset' =>['assessments-hazard-risk.png','assessments-hazard-risk@2x.png'],'text' => __('Hazard risk <span class="line__break"></span> identification <span class="line__break"></span> assessment')],
            ['image' => 'assessment-high-risk-machine.png','srcset' =>['assessment-high-risk-machine.png','assessment-high-risk-machine@2x.png'],'text' => __('Office risk <span class="line__break"></span> assessment')],
            ['image' => 'assessment-risk-template.png','srcset' =>['assessment-risk-template.png','assessment-risk-template@2x.png'],'text' => __('Risk assessment <span class="line__break"></span> template')],
        ],
    'companion' => [
        'text' => __('“Lumiform has helped us to reduce the time spent on assessments by about half. We have also rolled out the solution to other processes that were being done manually before.”'),
        'info' => __('- Kristina, Quality Manager')
                    ],
    'template' => ['text' => __('More assessment templates'),'url' => '#']
    ])
    @include('components.use-cases.description_section',[
        'heading' => __('documentation'),
        'color' => 'light-gold',
        'text' => __('Lumiform is the all-in-one solution that gives you reliable, digital documentation, via the app. We store your documents in a safe place, and you gain full transparency regarding all events in the field.'),
        'explore' => ['url' => 'useCases.documentation','text' => __('Explore Lumiform for documentation')],
        'image' => ['group-5069.png','group-5069@2x.png'],
        'items' => [
                ['image' => 'food-daily-temperature-log.png','srcset' =>['food-daily-temperature-log.png','food-daily-temperature-log@2x.png'],'text' => __('Temperature logs <span class="line__break"></span> documentation')],
                ['image' => 'documentation--visitor.png','srcset' =>['documentation--visitor.png','documentation--visitor@2x.png'],'text' => __('Visitor  <span class="line__break"></span>documentation')],
                ['image' => 'documentation-restaurant-cleaning.png','srcset' =>['documentation-restaurant-cleaning.png','documentation-restaurant-cleaning@2x.png'],'text' => __('Restaurant cleaning <span class="line__break"></span> documentation')],
                ['image' => 'documentation-incoming.png','srcset' =>['documentation-incoming.png','documentation-incoming@2x.png'],'text' => __('Food incoming <span class="line__break"></span> goods inspection')],
                ['image' => 'documentation-vehicle.png','srcset' =>['documentation-vehicle.png','documentation-vehicle@2x.png'],'text' => __('Vehicle inspection <span class="line__break"></span> documentation')],
                ['image' => 'documentation-training.png','srcset' =>['documentation-training.png','documentation-training@2x.png'],'text' => __('Training <span class="line__break"></span> documentation')],
            ],
        'companion' => [
            'text' => __('“The digital documentation with Lumiform has helped us to meet a company-wide standard and store documents securely.“'),
            'info' => __('- Christopher, Project Lead')
                        ],
        'template' => ['text' => __('More assessment templates'),'url' => '#']
        ])



    <section class="bg-white relative pt-24 pb-32 with__border--bottom">
        <div class="container mx-auto">
            <div class="audits-top flex justify-between items-center mb-16">
                <div class="w-4/12">
                    <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-red mb-10">
                        @lang('Issue management')
                    </h2>
                    <p class="mt-10 font-din text-left font-light text-secondary text-20 mb-5">
                        @lang('The Lumiform issue management helps you to uncover more issues and to solve them faster, collaborating as a team. All issues are seamlessly documented, and either attached to reports or recorded separately.')
                    </p>
                    <a href="@urlTo('useCases.issue')"
                       class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large">
                        @lang('Explore Lumiform for issue management')
                        <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-6">
                    </a>
                </div>
                <div class="w-3/5">
                    <img src="{{asset('img/group-5072.png')}}" alt="" srcset="{{asset('img/group-5072.png')}}
                    {{asset('img/group-5072@2x.png')}} 2x">
                </div>
            </div>
        </div>
    </section>
    {{--@include('components.solution.industries_quotes',[
    'image' => 'group-1131.svg',
    'class' => 'bg-purple-extralight',
    'text' => '“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“',
    'position' => '- Carsten, Project Manager',
    ])
    <section id="easy" class="pt-12 lg:pt-24 bg-purple-light">
        <div class="container mx-auto md:pt-12">
            <h3 class="text-white text-40 font-extrabold uppercase font-cocogoose md:mx-auto text-center mb-5 lg:mb-20 tracking-heading"
            >@lang('Start using Lumiform - for free!')</h3>
            <div class="easy__content flex justify-between">

                <div class="easy__image w-0 lg:w-3/12 flex justify-center">

                    <img src="{{asset('img/group-5139.png')}}" alt=""
                         srcset="
                    {{asset('img/group-5139.png')}},
                    {{asset('img/group-5139@2x.png')}} 2x"
                    >

                </div>

                <div class="easy__submit w-full  lg:w-5/12">
                    <form action="">
                        <div class="home__banner--email flex flex-col justify-center  md:flex-row lg:justify-between mb-8">

                            <input class="pl-8 w-360  " type="email"
                                   placeholder="{{__('Enter e-mail address')}}">
                            <button class="mx-auto mt-5 md:mt-0 w-290   bg-purple tracking-large font-extrabold text-white uppercase font-cocogoose text-17 lg:text-20 h-70  rounded-20 items-center justify-center flex">@lang('Get Lumiform FREE')</button>
                        </div>
                    </form>
                    <div class="banner__signin">
                        <small class="text-20 font-din text-center font-medium block text-white"
                        >@lang('We also offer <a href="" class="font-bold underline"> paid plans </a> with additional features, storage and support.')
                        </small>
                    </div>
                </div>

                <div class="easy__image w-0 lg:w-3/12 flex justify-center">

                    <img src="{{asset('img/group-5140.png')}}" alt=""
                         srcset="
                    {{asset('img/group-5140.png')}},
                    {{asset('img/group-5140@2x.png')}} 2x"
                    >

                </div>

            </div>
        </div>
    </section>--}}
@endsection
