@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section class="pt-26 pb-28"
             style="
                     background-image: url('{{asset('img/group-5442.png')}}');
                     background-color: #FAFBFB;
                     background-size: 100% 100%;
                     background-repeat: no-repeat;
                     background-position-y: bottom;
                     background-position-x: center;"
    >
        <div class="container mx-auto">
            <div class="w-10/12 mx-auto mb-12">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary mb-16 leading-tight">
                    @lang('Resolve issues quickly,
                        <span class="line__break"></span> through collaboration')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('Solve issues immediately, by reporting them quickly, via the app and resolving <span class="line__break"></span>  them with seamless collaboration between field operations and head office.')
                </p>
            </div>
            <button class="mx-auto w-215  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-17 lg:text-20 h-70  rounded-20 items-center justify-center flex">
                @lang('try for FREE')
            </button>
        </div>
    </section>
    <section class="py-32 with__border--bottom">
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-light-blue">Save time and effort</span> ',
        'image' => ['group-4364.png','group-4364@2x.png'],
        'items' => [
        'Pre-define issue events, at which the system automatically assigns troubleshooting to teammates.',
        'Solve issues more quickly, together with your colleagues, by inviting them to issue cases. '
        ],
        'bottom' => ['text' => 'Issues are solved 40% faster, by inviting teammates to participate in problem solving.','borderColor' => 'light-blue']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-red">Solve issues faster</span>',
        'image' => ['group-5034.png','group-5034@2x.png'],
        'reversed' => true,
        'items' => [
        'Send corrective actions and notify co-workers or third party contractors whenever a problem occurs.',
        'Keep track of task completion by co-workers and third parties, and track troubleshooting in real-time.'
        ],
        'bottom' => ['text' => 'With Lumiform, inspectors were able to increase the time available for operational business by 1/3.','borderColor' => 'red']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => '<span class="text-green">Communicate faster</span>',
        'image' => ['group-5035.png','group-5035@2x.png'],
        'items' => [
        'Assign and schedule issue solving directly to your team, from the field, and see operations in real-time.',
        'Let all stakeholders know about any risks or failure areas immediately, via the app.',
        ],
        'bottom' => ['text' => 'Issues are solved four times faster if they are raised within the first 30 minutes, after their occurrence.','borderColor' => 'green']
        ])
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-xl h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
    </section>
    <section class="py-28 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-50 lg:mb-2 uppercase tracking-heading">
                @lang('Resolve issues effectively by <span class="text-green"> collaborating as a team </span>')
            </h2>
            <p class="text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-26">
                @lang('Work together with your team to recognize, address and resolve issues quickly, as soon as problems occur.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4633.png','group-4633@2x.png'],'title' => 'Create an issue case','desc' => 'Create a follow-up task for a specific check during an audit, raise issues any time, independently, or pre-define events in which problems are triggered automatically.'],
            ['srcset' => ['group-4893.png','group-4893@2x.png'],'title' => 'Assign and schedule','desc' => 'Assign the issue task to a teammate or third party contractor, and schedule the job with a deadline. Alert the those responsible immediately, via notification.'],
            ['srcset' => ['group-4894.png','group-4894@2x.png'],'title' => 'Solve the Issues','desc' => 'Solve issues quickly, together with your teammates, by inviting them to the issue task.  Communicate effortlessly, via chat. Everything is logged, so you never miss any actions.'],
            ['srcset' => ['group-4896.png','group-4896@2x.png'],'title' => 'Manage and track','desc' => 'Manage all issues and tasks on a dashboard, with complete visibility. Lumiform logs and documents all of the processes automatically. The issue resolution is automatically attached to the audit report.'],
            ],
            'features' => ['url' => '#','text' => 'Explore more PRODUCT features']
            ])

        </div>
    </section>
    <section id="solve__issue" class="py-32 bg-grey-extralight">
        <div class="flex justify-center items-center relative mb-16">
            <div class="issue__circle bg-white rounded-full">
            </div>

                <h5 class="text-100 text-gold text-center leading-snug ">92%</h5>
                <h6 class="text-50 text-primary font-cocogoose font-black text-center leading-none uppercase">@lang('of our customers are able to <span class="line__break"></span>
<span class="text-gold">solve issues faster</span> with Lumiform')</h6>

        </div>
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-xl h-70 px-8 rounded-20 items-center flex">@lang('Solve your first issue')</a>
    </section>
    @include('components.solution.industries_explore_section',[
    'heading' => 'Explore how we help teams to
        <span class="text-green">solve issues quickly</span>',
    'items' => [
    ['image' => 'issue-general-workplace.png','srcset' => ['issue-general-workplace.png','issue-general-workplace@2x.png'],'template' => ['url' => '#','text' => 'View Food Issue Management CASE STUDY'] ],
    ['image' => 'documentation-food-incoming.png','srcset' => ['documentation-food-incoming.png','documentation-food-incoming@2x.png'],'template' => ['url' => '#','text' => 'View transportation Issue management CASE STUDY'] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'group-1031.svg',
    'class' => 'bg-red-light',
    'text' => '“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“',
    'position' => '- Christina, Head of Quality, Environmental and Safety Management',
    ])
    @include('components.use-cases.section_companies')
    @include('components.product.bottom_form',[
    'heading' =>'Try effective issue management – free of charge!',
   'sectionBg' =>'red-opacity',
    'buttonBg' =>'red',
    'image' =>'img/group-2262.png',
    'srcset' => ['group-2262.png','group-2262@2x.png']
    ])
@endsection
