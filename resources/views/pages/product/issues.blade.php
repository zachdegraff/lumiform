@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="issues__banner" class="py-10 lg:pt-32 lg:pb-24 bg-blue-light relative">
        <div class="container mx-auto flex">
            <div class="banner__left  w-full lg:w-2/3">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('Uncover more issues and solve them faster.')
                </h1>
                <div class="banner__submit">
                    <form action=""
                          class="mb-10 flex flex-col md:flex-row items-center md:justify-center lg:flex-none lg:justify-start">
                        <input type="email" class="w-full sm:w-360 pl-8 h-50 xxl:h-70 rounded-20"
                               placeholder="@lang('Enter e-mail address')">
                        <button class="font-extrabold w-215 mt-5 md:ml-10 md:mt-0  xxl:ml-12 bg-red text-white uppercase font-cocogoose text-17 lg:text-xl  h-50 xxl:h-70 px-8 rounded-20">@lang('TRY FOR FREE')</button>
                    </form>
                    <div class="banner__signin text-center lg:text-left">
                        <small class="banner__small-text">@lang('Already using Lumiform?') <a
                                    href=""> @lang('Sign in')</a>
                        </small>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section id="management" class="py-12 lg:py-24">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 lg:mb-4 uppercase tracking-heading">
                @lang('No back and forth, just <span class="text-gold">effective issue management</span>')
            </h2>
            <p class="sm:px-16 text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-24">
                @lang('We invented the first issue management feature, to make issue workflows more effective and traceable.')
            </p>
            <div class="management__tools flex flex-wrap justify-center lg:flex-no-wrap lg:justify-between">
                <div class="tool__item w-full sm:w-1/2 lg:w-1/3">
                    <h3 class="text-center text-20 font-bold font-cocogoose uppercase mb-10 text-red">@lang('Raise Issue')</h3>
                    <div class="tool__item--img relative">
                        <img src="{{asset('img/rise-image.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>
                <div class="tool__item w-full sm:w-1/2 lg:w-1/3">
                    <h3 class="text-center text-20 font-bold font-cocogoose uppercase mb-10 text-green">@lang('Solve issue together')</h3>
                    <div class="tool__item--img relative">
                        <img src="{{asset('img/group-1374.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>
                <div class="tool__item mt-8 w-full sm:mt-0 w-1/2 lg:w-1/3">
                    <h3 class="text-center text-20 font-bold font-cocogoose uppercase mb-10 text-light-blue">@lang('Get an overview')</h3>
                    <div class="tool__item--img relative">
                        <img src="{{asset('img/group-880.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>
            </div>
            <button class="button__base px-8 py-3 lg:py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="restrict" class="py-12 lg:py-32">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 mb-12 lg:mb-24 uppercase tracking-heading">
                @lang('Raise issues in three different ways:')
            </h2>
            <div class="lg:flex  lg:flex-row-reverse mb-5 md:mb-16">
                <div class="issue__item--text w-full lg:w-5/6 flex flex-col justify-center items-end">
                    <div class="flex issue__item--bg py-10 pl-12 lg:max-w-3/4">
                        <span class="text-50 md:text-80 text-secondary leading-none">1</span>
                        <div class="pl-4 sm:pl-12">
                            <h3 class="text-left text-20 lg:text-30 font-bold font-cocogoose uppercase mb-5 text-grey-light">
                                @lang('Raise issues <span class="text-light-blue">automatically</span>')
                            </h3>
                            <p class="text-left text-secondary font-hairline text-15 lg:text-20 font-din mb-5 sm:mb-0 font-light">
                                @lang('Your checklist is available for all users in your organisation, per default, at any time. To limit the availability of unscheduled lists, you can make them available to individual users only.')
                            </p>
                        </div>
                    </div>
                    <div class="w-full issue__subitem lg:max-w-3/4 mt-10">
                        <h5 class="pl-32 md:pl-40 text-15 lg:text-20 font-cocogoose font-extrabold mb-5">@lang('EXAMPLE USE CASES FOR AUTOMATIC ISSUES')</h5>
                        <ul>
                            <li class="flex items-center font-light text-20 font-din text-secondary"><img src="{{asset('img/group-1392.svg')}}" alt="" class="px-12 md:px-16">@lang('Inform the technician when employee marked Coffee machine as damaged.')</li>
                            <li class="flex items-center font-light text-20 font-din text-secondary"><img src="{{asset('img/group-1382.svg')}}" alt="" class="px-12 md:px-16">@lang('Inform the safety officer if first aid kit is marked as incomplete.')</li>
                            <li class="flex items-center font-light text-20 font-din text-secondary"><img src="{{asset('img/group-1383.svg')}}" alt="" class="px-12 md:px-16">@lang('Inform the manager if mould infestation is detected during the monthly audit.')</li>
                        </ul>
                    </div>

                </div>
                <div class="digitise__item--image w-2/5 mx-auto">
                    <img src="{{asset('img/group-1432.svg')}}" alt="" class="mx-auto">
                </div>
            </div>
            <div class="lg:flex  lg:flex-row-reverse mb-5 md:mb-16">
                <div class="issue__item--text w-full lg:w-3/5 flex flex-col justify-center md:pl-10 items-end">
                    <div class="flex issue__item--bg py-10 pl-12 lg:max-w-3/4">
                        <span class="text-50 md:text-80 text-secondary leading-none">2</span>
                        <div class="pl-4 sm:pl-12">
                            <h3 class="text-left text-20 lg:text-30 font-bold font-cocogoose uppercase mb-5 text-grey-light">
                                @lang('Raise <span class="text-red"> ad-hoc issues</span>')
                            </h3>
                            <p class="text-left text-secondary font-hairline text-15 lg:text-20 font-din mb-5 sm:mb-0 font-light">
                                @lang('Inspectors have the option of reporting an issue at any time, via the mobile app. Either raise an issue by defining everything from scratch or select from a predefined set of issues. ')
                            </p>
                        </div>
                    </div>

                </div>
                <div class="digitise__item--image w-2/5 mx-auto">
                    <img src="{{asset('img/group-1697.svg')}}" alt="" class="mx-auto">
                </div>
            </div>
            <div class="lg:flex  lg:flex-row-reverse mb-5 md:mb-16">
                <div class="issue__item--text w-full lg:w-3/5 flex flex-col justify-center md:pl-10 items-end">
                    <div class="flex issue__item--bg py-10 pl-12 lg:max-w-3/4">
                        <span class="text-50 md:text-80 text-secondary leading-none">3</span>
                        <div class="pl-4 sm:pl-12">
                            <h3 class="text-left text-20 lg:text-30 font-bold font-cocogoose uppercase mb-5 text-grey-light">
                                @lang('Raise <span class="text-gold">in-form Issues</span>')
                            </h3>
                            <p class="text-left text-secondary font-hairline text-15 lg:text-20 font-din mb-5 sm:mb-0 font-light">
                                @lang('During an inspection, inspectors have the option of reporting a problem relating to a particular check. The solution workflow is then attached to the inspection report.')
                            </p>
                        </div>
                    </div>

                </div>
                <div class="digitise__item--image w-2/5 mx-auto ">
                    <img src="{{asset('img/group-2738.svg')}}" alt="" class="mx-auto ">
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="py-12 lg:pt-24 lg:pb-32 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('FOR EVERY ISSUE RAISED, YOU CAN DEFINE THE FOLLOWING PARAMETERS')
            </h2>

            <div class="feature__items flex flex-wrap sm:flex-no-wrap">
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-1262_2.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('title')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-1401.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Description')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-1402.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Assignee')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-1262_1.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Priority')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-2697.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Deadline')</span>
                </div>
            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>

    </section>
    <section id="as_a_team" class="py-12 lg:py-32">
        <dic class="container mx-auto">

            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('  <span class="text-green"> Solve issues quickly </span> as a team')
            </h2>
        </dic>
        <div class="container mx-auto text-center lg:text-left flex flex-wrap lg:flex-no-wrap justify-between">

            <div class="team__itemw-full sm:w-1/2 lg:w-1/5 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-1417.svg')}}" alt="" class="mb-16 mx-auto lg:mx-0">
                <h3 class="font-cocogoose font-black text-green uppercase text-15 md:text-20 mb-10">
                    @lang('View details and update the process')
                </h3>
                <p class="font-light font-din text-15 md:text-20">
                    @lang('Review the details and information from the person who raised the issue. Set the process from ‘open’ to ‘in process’ ‚or ‘solved’, in order to inform all stakeholders.')
                </p>
            </div>


            <div class="team__itemw-full sm:w-1/2 lg:w-1/5 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-2739.svg')}}" alt="" class="mb-16 mx-auto lg:mx-0">
                <h3 class="font-cocogoose font-black text-gold uppercase text-15 md:text-20 mb-10">
                    @lang('Add photos and comments related to the solution')
                </h3>
                <p class="font-light font-din text-15 md:text-20">
                    @lang('When troubleshooting, you can add images and comments to document the entire solution process.')
                </p>
            </div>


            <div class="team__item w-full sm:w-1/2 lg:w-1/5 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-2740.svg')}}" alt="" class="mb-16 mx-auto lg:mx-0">
                <h3 class="font-cocogoose font-black text-purple uppercase text-15 md:text-20 mb-10">
                    @lang('Messaging with teammates')
                </h3>
                <p class="font-light font-din text-15 md:text-20">
                    @lang('Write messages and share them with teammates who are also assigned to the issue, in order to speed up resolution. ')
                </p>
            </div>


            <div class="team__item w-full sm:w-1/2 lg:w-1/5 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-2741.svg')}}" alt="" class="mb-16 mx-auto lg:mx-0">
                <h3 class="font-cocogoose font-black text-green uppercase text-15 md:text-20 mb-10">
                    @lang('Log protocol')
                </h3>
                <p class="font-light font-din text-15 md:text-20">
                    @lang('The system logs all process steps automatically, and this ensures seamless documentation.')
                </p>
            </div>

        </div>
        <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
    </section>
    <section id="troubleshot" class="lg:py-24 py-12">
        <div class="container mx-auto">
            <div class="sm:flex mb-12 lg:mb-40 sm:flex-row-reverse">
                <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pl-12 lg:pl-20 flex flex-col justify-center">
                    <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-primary">
                        @lang('Manage to <span class="text-red">troubleshoot</span>')
                    </h3>
                    <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din md:mb-0 mb-10">
                        @lang('Process unassigned and unscheduled issues to the right person, in order to solve them quickly. Monitor all assigned issues remotely. ')
                    </p>
                </div>
                <div class="digitise__item--image lg:w-3/5 w-1/2 mx-auto">
                    <img src="{{asset('img/rect-515.svg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="easy" class="pt-12 lg:pt-24 bg-green-light">
        <div class="container mx-auto md:pt-12">
            <h3 class="section__title-large  md:mx-auto text-center mb-5 lg:mb-20 "
                style="color: #ffffff">@lang('Improve your quality and safety efforts with meaningful analyses')</h3>
            <div class="easy__content flex">
                <div class="easy__image w-0 lg:w-1/4 flex justify-start">
                    <img src="{{asset('img/group-1836.svg')}}" alt="">
                </div>
                <div class="easy__submit w-full lg:w-3/4 xxl:w-2/4 px-5 lg:px-16">
                    <form action="">
                        <div class="home__banner--email flex flex-col justify-center  md:flex-row lg:justify-between mb-8">

                            <input class="pl-8 w-full sm:w-360 lg:w-2/4 sm:mx-4" type="email"
                                   placeholder="{{__('Enter e-mail address')}}">
                            <button class="base__button mx-auto mt-5 md:mt-0 w-215 lg:w-auto px-8 bg-green-dark md:mx-4 font-extrabold text-white uppercase font-cocogoose text-17 lg:text-xl h-70  rounded-20 items-center flex">@lang('TRY FOR FREE')</button>
                        </div>
                    </form>
                    <div class="banner__signin">
                        <small class="banner__small-text text-center block"
                               style="color: #ffffff;">@lang('We also offer <a href=""> paid plans </a> with additional features, storage and support.')
                        </small>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
