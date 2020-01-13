@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section class="py-16 lg:pt-35 lg:pb-26 bg-blue-light">
        <div class="container mx-auto">
            <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary sm:mb-12 leading-tight">
                @lang('We enable businesses to exceed their promises in terms of quality, and <span class="line__break"></span> make workplaces safe.')
            </h1>
        </div>
    </section>
    <section class="pt-16 lg:pt-32">
        <div class="container mx-auto ">
            <div class="lg:flex justify-between mb-10 lg:mb-32">
                <div class="w-full sm:w-7/12 lg:mb-0 mb-5 lg:mx-0 mx-auto">
                    <img src="{{asset('img/analog-checklist.png')}}" alt=""
                         srcset="{{asset('img/analog-checklist.png')}},
                                                                                {{asset('img/analog-checklist@2x.png')}} 2x">
                </div>
                <div class="about__text">
                    <h3 class="text-50 font-cocogoose font-black text-primary uppercase leading-none mb-5 lg:mb-10">
                        @lang('We are <span class="text-light-blue">changing the direction </span>of quality and safety procedures')
                    </h3>
                    <p class="text-20 font-din font-light tracking-text text-secondary leading-snug">@lang('Most businesses conduct quality and safety checks analogously, communicate via email or hand over documents personally or via SharePoint. Information is scattered, responsibilities are unclear and the status is non-transparent. They try to overcome the chaos with even more checklists and regular audits, spending even more time with analogue forms, sinking ever further into chaos and finally losing the overview entirely.
                            <br><br>Think about your everyday life, how you use apps, how you communicate, how you collaborate with your teammates digitally and how lean processes simplify your everyday working life. That is how quality and safety management should be!')</p>

                </div>
            </div>
            <div class="lg:flex justify-between mb-10 lg:mb-32 flex-row-reverse">
                <div class="w-full sm:w-7/12 lg:mb-0 mb-5 lg:mx-0 mx-auto">
                    <img src="{{asset('img/self-monitoring.png')}}" alt=""
                         srcset="{{asset('img/self-monitoring.png')}},
                            {{asset('img/self-monitoring@2x.png')}} 2x">
                </div>
                <div class="about__text">
                    <h3 class="text-50 font-cocogoose font-black text-primary uppercase leading-none mb-5 lg:mb-10">
                        @lang('Quality and safety management should be <span class="text-green">practical and smooth</span>')
                    </h3>
                    <p class="text-20 font-din font-light tracking-text text-secondary leading-snug">@lang('At Lumiform, we develop solutions in which all quality and safety checks – from small daily checks to extensive audits – can be organised and efficiently conducted, digitally. Every individual knows when and how to carry out inspections, and what to do if issues arise. Through collaboration, you solve problems even faster than before!
                            <br><br>The quality level of your products, services or machines will increase enormously –in turn, and customer satisfaction will increase. In the case of food, this can even lead to fewer diseases. Another factor is that many people are seriously injured or even die in accidents at the workplace. With Lumiform, deviations from the safety standard at the workplace are quickly revealed and resolved. All in all, we enable businesses to exceed their promises in terms of quality, and make the workplace safe.')</p>

                </div>
            </div>
        </div>
    </section>
    <section class="py-16 lg:py-20 bg-grey-light">
        <div class="container mx-auto">
            <div class="flex justify-around lg:flex-no-wrap flex-wrap ">

                <div class="circle__bg__white font-black uppercase font-cocogoose text-center mb-5 lg:mb-0">
                    <div class="circle__white bg-white rounded-full"></div>
                    <div class="relative flex flex-col justify-between h-full">
                        <p class=" text-20  tracking-heading  text-grey-bold">
                            @lang('Lumiform App is used in')
                        </p>
                        <span class="text-100 text-light-blue  leading-snug">10+</span>
                        <p class="text-30 tracking-heading text-grey-light ">@lang('different <br> industries')</p>
                    </div>
                </div>


                <div class="circle__bg__white font-black uppercase font-cocogoose text-center mb-5 lg:mb-0">
                    <div class="circle__white bg-white rounded-full"></div>
                    <div class="relative flex flex-col justify-between h-full">
                        <p class=" text-20  tracking-heading  text-grey-bold">
                            @lang('Lumiform is already being used in')
                        </p>
                        <span class="text-100 text-green  leading-snug">8</span>
                        <p class="text-30 tracking-heading text-grey-light ">@lang('different European countries')</p>
                    </div>
                </div>

                <div class="circle__bg__white font-black uppercase font-cocogoose text-center mb-5 lg:mb-0">
                    <div class="circle__white bg-white rounded-full"></div>
                    <div class="relative flex flex-col justify-between h-full">
                        <p class=" text-20  tracking-heading  text-grey-bold">
                            @lang('From our clients,')
                        </p>
                        <span class="text-100 text-gold  leading-snug">98%</span>
                        <p class="text-30 tracking-heading text-grey-light ">@lang('say that they have more control over ')</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="py-16 lg:pt-26 lg:pb-32">
        <div class="container mx-auto">
            <h2 class="text-70 font-cocogoose font-black text-primary uppercase text-center mb-10 lg:mb-26">@lang('Get to know our <span class="text-light-blue">management team</span>')</h2>


            <div class="team__items flex justify-around mb-20 lg:flex-no-wrap flex-wrap">
                @include('components.resources.team_items',[
                'items' => [
                     ['image' => 'team-1.png',
                     'name' => __('Lukas Blasberg, CEO '),
                     'linkedin' => 'https://www.linkedin.com/in/lukas-blasberg/',
                     'text' => __('Lukas recognised the tragedy that occurs due to manual processes in quality and safety management: poor quality in terms of products and services, serious accidents at work and a very high workload. <br><br>Since Lukas and Philip are an experienced founding team (they have already founded a successful business together), they decided to sit down together to work out a solution.'),
                                ],
                     ['image' => 'team-2.png',
                     'name' => __('Philip Blasberg, CEO '),
                     'linkedin' => 'https://www.linkedin.com/in/philip-roelen-blasberg-38201873/',
                     'text' => __('Philip has always questioned the manual processes that he was regularly confronted with – even in well-established companies – while working at the digital consultancy where he was previously employed. <br><br>So, after he and Lukas had put their heads together, he came up with the idea of Lumiform, in order to enable digital processes in quality and safety management, thereby reducing the number of accidents in the workplace and eliminating quality defects.'),
                                ],
                     ['image' => 'team-3.png',
                     'name' => __('Marton Farago, CTO '),
                     'linkedin' => 'https://www.linkedin.com/in/martonfarago/',
                     'text' => __('Marton heard about the tools that were being used for quality and safety checks, and could not believe his ears. He thought about how they could solve the lack of transparency and the inefficient conduction process technically. <br><br>All forms needed to be digitised, inspections had to be organised, smooth conduction via a mobile app was required, issues needed to be tracked and resolved quickly, in a team, and data had to be used to help businesses to improve procedures continually. Lumiform was born!'),
                                ]
                                ]
                ])
            </div>
        </div>
        <div class="team__gallery flex justify-between mb-10 lg:mb-24">
            <div class="gallery__left mr-3">
                <div class="gallery__item mb-3">
                    <img src="{{asset('img/gallery-1.png')}}" alt=""
                         srcset="{{asset('img/gallery-1.png')}},{{asset('img/gallery-1@2x.png')}} 2x">
                </div>
                <div class="gallery__item">
                    <img src="{{asset('img/gallery-2.png')}}" alt=""
                         srcset="{{asset('img/gallery-2.png')}},{{asset('img/gallery-2@2x.png')}} 2x">
                </div>
            </div>
            <div class="gallery__middle mr-3">
                <div class="gallery__item mb-3">
                    <img src="{{asset('img/gallery-3.png')}}" alt=""
                         srcset="{{asset('img/gallery-3.png')}},{{asset('img/gallery-3@2x.png')}} 2x">
                </div>
                <div class="gallery__item flex justify-between">
                    <img src="{{asset('img/gallery-4.png')}}" alt=""  class="mr-3"
                         srcset="{{asset('img/gallery-4.png')}},{{asset('img/gallery-4@2x.png')}} 2x">
                    <img src="{{asset('img/gallery-5.png')}}" alt=""
                         srcset="{{asset('img/gallery-5.png')}},{{asset('img/gallery-5@2x.png')}} 2x">
                </div>
            </div>
            <div class="gallery__right">
                <div class="gallery__item">
                    <img src="{{asset('img/gallery-6.png')}}" alt=""
                         srcset="{{asset('img/gallery-6.png')}},{{asset('img/gallery-6@2x.png')}} 2x">
                </div>
            </div>

        </div>
        <div class="container mx-auto flex items-center">
            <div class="flex-1 flex justify-center">
                <a href="#"
                   class="font-extrabold text-20 bg-red text-white uppercase font-cocogoose  h-70 px-8 py-4 lg:py-6 rounded-20 ">@lang('Join us!')</a>
            </div>

        </div>
    </section>
    <section id="common" class="bg-grey-opacity pt-16 lg:pt-26 pb-16">
        <div class="container mx-auto">
            <h2 class="text-70 font-cocogoose font-black leading-none text-primary uppercase text-center mb-10 lg:mb-20">
                @lang('<span class="text-gold">Common values </span> unite us')
            </h2>
            <div class="common__items flex justify-around flex-wrap">
                @include('components.resources.common__items',[
                'items' => [
                ['image' => 'ok-icon.svg','title' => 'POSITIVE','text' => __('We are pro rather than contra: our <span class="line__break"> </span>glass is half full, not half empty.')],
                ['image' => 'strong-icon.svg','title' => 'PROACTIVE','text' => __('We love to show initiative and realise that we <span class="line__break"> </span> are responsible for the successful completion of <span class="line__break"> </span> the tasks we tackle.')],
                ['image' => 'crown-icon.svg','title' => 'CUSTOMER-ORIENTED','text' => __('We always consider the customer’s point of view.')],
                ['image' => 'fire-icon.svg','title' => 'PASSIONATE','text' => __('We are intrinsically motivated and believe in our mission.')],
                ['image' => 'dancers-icon.svg','title' => 'PLAYFUL','text' => __('We think creatively, outside the box, try out <span class="line__break"> </span> different solutions and learn from mistakes.')],
                ['image' => 'pointing-up-icon.svg','title' => 'PRAGMATIC','text' => __('We are solution-driven and prefer to implement <span class="line__break"> </span> rather than talking. We love the 80/20 principle.')],
                ]
                ])
            </div>
        </div>
    </section>
    <section id="focus" class="lg:pt-26 lg:pb-32 py-16">
        <div class="container mx-auto">
            <h2 class="text-70 font-cocogoose font-black leading-none text-primary uppercase text-center lg:mb-24 mb-10">
                @lang('We focus on <span class="text-light-blue">quality and safety</span> ')
            </h2>
            <div class="focus__items flex justify-between xl:flex-no-wrap flex-wrap">
                <div class="focus__item xxl:flex justify-between item_first xl:mx-0 mx-auto mb-5">
                    <div class="item__icon xxl:mb-0 mb-5 ">
                        <img src="{{asset('img/icons/message-icon.svg')}}" alt="" class="mx-auto">

                    </div>
                    <div class="focus__text ml-5 xxl:ml-10">
                        <p class="mb-2 sm:mb-8 text-30 font-din text-secondary tracking-text leading-snug font-light">@lang('We are developing an app that improves product/service quality and occupational safety in companies. ')</p>
                        <a href="@urlTo('product')"
                           class="flex items-center  uppercase text-red text-center block text-20 tracking-heading ">
                            @lang('LUMIFORM PRODUCT')
                            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                        </a>
                    </div>
                </div>
                <div class="focus__item xxl:flex justify-between item_second xl:mx-0 mx-auto mb-5">
                    <div class="item__icon xxl:mb-0 mb-5 ">
                        <img src="{{asset('img/icons/list-icon_purple.svg')}}" alt="" class="mx-auto">

                    </div>
                    <div class="focus__text ml-5 xxl:ml-10">
                        <p class="mb-2 sm:mb-8 text-30 font-din text-secondary tracking-text leading-snug font-light">@lang('We are proud of how Lumiform supports our customers in their daily work.')</p>
                        <a href="#"
                           class="flex items-center  uppercase text-red text-center block text-20 tracking-heading ">
                            @lang('Case Studies')
                            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                        </a>
                    </div>
                </div>
                <div class="focus__item xxl:flex justify-between item_third xl:mx-0 mx-auto mb-5">
                    <div class="item__icon xxl:mb-0 mb-5 ">
                        <img src="{{asset('img/icons/inventory-icon.svg')}}" alt="" class="mx-auto">

                    </div>
                    <div class="focus__text ml-5 xxl:ml-10">
                        <p class="mb-2 sm:mb-8 text-30 font-din text-secondary tracking-text leading-snug font-light">@lang('We are impressed by the number of different use cases for which customers are using Lumiform.')</p>
                        <a href="#"
                           class="flex items-center  uppercase text-red text-center block text-20 tracking-heading ">
                            @lang('All app uses')
                            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.product.bottom_form',[
      'heading' => __('Want to use Lumiform your way?'),
      'sectionBg' =>'blue',
      'buttonBg' =>'blue-dark',
      'image' =>'img/group-2671.png',
      'srcset' =>['group-2671.png','group-2671@2x.png']
      ])
@endsection