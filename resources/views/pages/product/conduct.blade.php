@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="conduct__banner" class="py-10 lg:pt-32 lg:pb-24 bg-red-light relative">
        <div class="container mx-auto flex">
            <div class="banner__left lg:w-3/4 w-full">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('Conduct audits and inspections via the mobile app.')
                </h1>
                @include('components.product.banner_form')
            </div>

        </div>

    </section>
    <section id="from" class="py-12 lg:py-24 with__border--bottom">
        <div class="container mx-auto md:flex justify-between">

            <div class="from__text w-full md:w-5/12">
                <h3 class="mb-8 lg:mb-16 text-green text-30 xl:text-40 font-cocogoose uppercase">
                    @lang('Conduct inspections from anywhere, anytime')
                </h3>
                <p class="mb-10 font-light font-din md:text-20 lg:text-30 text-secondary tracking-text">
                    @lang('Perform inspections and audits anytime, anywhere – online or offline. Use the Lumiform app on any device, smartphone or tablet, including both Android and iOS.')
                </p>
                <div class="download__links flex items-center">
                    <div class="w-210">
                        <a href="">
                            <img src="{{asset('img/app-store.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="w-270 ml-10">
                        <a href="">
                            <img src="{{asset('img/google-play.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <a href=""
                   class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large mt-16">
                    @lang('LEARN MORE ABOUT THE PRODUCT')
                    <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                </a>
            </div>
            <div class=" w-6/12 mx-auto mt-10 md:mt-0 md:mx-0 lg:-mb-48">
                <img src="{{asset('img/group-3327.svg')}}" alt="" class="from__image ">
            </div>
        </div>
    </section>
    <section id="as_a_team" class="py-12 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('The right form <span class="text-purple"> in the palm of your hand at all times </span>')
            </h2>
        </div>
        <div class="container mx-auto text-center lg:text-left flex flex-wrap lg:flex-no-wrap justify-around">
            <div class="team__itemw-full sm:w-1/2 lg:w-1/3 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-2723.svg')}}" alt="" class="mb-16 mx-auto lg:mx-0">
                <h3 class="font-cocogoose font-black text-light-blue uppercase text-20 md:text-30 mb-10">
                    @lang('Never miss deadlineS')
                </h3>
                <p class="font-light font-din text-20 md:text-30">
                    @lang('MyTodo’s remind you of assigned checklists that are scheduled and due.')
                </p>
            </div>
            <div class="team__itemw-full sm:w-1/2 lg:w-1/3 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-2724.svg')}}" alt="" class="mb-16 mx-auto lg:mx-0">
                <h3 class="font-cocogoose font-black text-purple uppercase text-20 md:text-30 mb-10">
                    @lang('Always use templates')
                </h3>
                <p class="font-light font-din text-20 md:text-30">
                    @lang('Review the details and information from the person who raised the issue. Set the process from ‘open’ to ‘in process’ ‚or ‘solved’, in order to inform all stakeholders.')
                </p>
            </div>

        </div>
        <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
    </section>
    <section id="as_a_team" class="py-12 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('Notifications help to  <span class="text-gold"> ensure that inspections are conducted reliably</span>')
            </h2>
        </div>
        <div class="container mx-auto text-center lg:text-left flex flex-wrap lg:flex-no-wrap justify-around">
            <div class="team__itemw-full sm:w-1/2 lg:w-1/3 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-3333.svg')}}" alt=""
                     class="mb-16 mx-auto lg:mx-0 sm:max-h-1/4 lg:max-h-1/2">
                <h3 class="font-cocogoose font-black text-red uppercase text-20 md:text-30 mb-10">
                    @lang('upcoming task Notifications')
                </h3>
                <p class="font-light font-din text-20 md:text-30">
                    @lang('The system notifies you automatically as soon as tasks, such as inspections or issues, are due and have been assigned to you.')
                </p>
            </div>
            <div class="team__itemw-full sm:w-1/2 lg:w-1/3 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-3328.svg')}}" alt=""
                     class="mb-16 mx-auto lg:mx-0 sm:max-h-1/4 lg:max-h-1/2">
                <h3 class="font-cocogoose font-black text-gold uppercase text-20 md:text-30 mb-10">
                    @lang('Supervisor notifications')
                </h3>
                <p class="font-light font-din text-20 md:text-30">
                    @lang('Define whether a supervisor should get a message as soon as an inspection becomes overdue.')
                </p>
            </div>

        </div>
        <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
    </section>
    <section id="messages" class="py-12 lg:py-32 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('CHOOSE BETWEEN <span class="text-light-blue"> TWO TYPES OF MESSAGES</span>')
            </h2>

            <div class="feature__items flex justify-center">
                <div class="feature__item w-1/2 max-w-140 mx-5 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-1402.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Assignee')</span>
                </div>
                <div class="feature__item w-1/2 max-w-140 mx-5 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-1262_1.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Priority')</span>
                </div>
            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="as_a_team" class="py-12 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-green text-30 lg:text-40 mb-10 lg:mb-20 uppercase tracking-heading">
                @lang('Easy, intuitive filling-out process')
            </h2>
        </div>
        <div class="container mx-auto text-center lg:text-left flex flex-wrap lg:flex-no-wrap justify-between">

            <div class="team__itemw-full sm:w-1/2 lg:w-1/5 mb-10 px-5 lg:px-0">
                <div class="h-250 lg:h-320 mb-16 mx-auto lg:mx-0 flex items-center">
                    <img src="{{asset('img/group-3329.svg')}}" alt="" class="h-fit mx-auto">
                </div>
                <h3 class="font-cocogoose font-black text-green uppercase text-15 md:text-20 mb-10">
                    @lang('Easy and simple interface')
                </h3>
                <p class="font-light font-din text-15 md:text-20">
                    @lang('Simple, straightforward user interface that anyone can work with – absolutely anyone!')
                </p>
            </div>


            <div class="team__itemw-full sm:w-1/2 lg:w-1/5 mb-10 px-5 lg:px-0">
                <div class="h-250 lg:h-320 mb-16 mx-auto lg:mx-0 flex items-center">
                    <img src="{{asset('img/group-3330.svg')}}" alt="" class="h-fit mx-auto">
                </div>
                <h3 class="font-cocogoose font-black text-gold uppercase text-15 md:text-20 mb-10">
                    @lang('intuitive filling-out process logic')
                </h3>
                <p class="font-light font-din text-15 md:text-20">
                    @lang('When logics have been pre-defined in the form builder, you are guided through your inspection and always do the right checks at the right time.')
                </p>
            </div>


            <div class="team__item w-full sm:w-1/2 lg:w-1/5 mb-10 px-5 lg:px-0">
                <div class="h-250 lg:h-320 mb-16 mx-auto lg:mx-0 flex items-center">
                    <img src="{{asset('img/group-3331.svg')}}" alt="" class="h-fit mx-auto">
                </div>
                <h3 class="font-cocogoose font-black text-purple uppercase text-15 md:text-20 mb-10">
                    @lang('Support answers with text comments and photos')
                </h3>
                <p class="font-light font-din text-15 md:text-20">
                    @lang('Add photos and text comments to specific checks, to describe deficiencies better. Draw in pictures and mark particular areas.')
                </p>
            </div>


            <div class="team__item w-full sm:w-1/2 lg:w-1/5 mb-10 px-5 lg:px-0">
                <div class="h-250 lg:h-320 mb-16 mx-auto lg:mx-0 flex items-center">
                    <img src="{{asset('img/group-3332.svg')}}" alt="" class="h-fit mx-auto">
                </div>
                <h3 class="font-cocogoose font-black text-red uppercase text-15 md:text-20 mb-10">
                    @lang('Save inspections as drafts')
                </h3>
                <p class="font-light font-din text-15 md:text-20">
                    @lang('Save incomplete forms as a draft and reopen them as soon as you want to complete the audit.')
                </p>
            </div>

        </div>
        <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
    </section>
    <section id="as_a_team" class="py-12 lg:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-purple text-30 lg:text-40 mb-10 lg:mb-20 uppercase tracking-heading">
                @lang('Manage and share reports')
            </h2>
        </div>
        <div class="report__items container mx-auto text-center lg:text-left flex flex-wrap lg:flex-no-wrap">
            <div class="team__itemw-full sm:w-1/2 lg:w-1/3 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-2733.svg')}}" alt=""
                     class="mb-16 mx-auto  sm:max-h-1/4 lg:max-h-500">
                <h3 class="font-cocogoose font-black text-purple uppercase text-20 md:text-30 mb-10">
                    @lang('Manage reports')
                </h3>
                <p class="font-light font-din text-20 md:text-30">
                    @lang('Depending on the assigned user rights, you can view inspection results after completion and edit them again.')
                </p>
            </div>
            <div class="team__itemw-full sm:w-1/2 lg:w-1/3 mb-10 px-5 lg:px-0">
                <img src="{{asset('img/group-2732.svg')}}" alt=""
                     class="mb-16 mx-auto sm:max-h-1/4 lg:max-h-500">
                <h3 class="font-cocogoose font-black text-red uppercase text-20 md:text-30 mb-10">
                    @lang('Manage reports')
                </h3>
                <p class="font-light font-din text-20 md:text-30">
                    @lang('Send your automatically created audit reports to all stakeholders via email, as a PDF report.')
                </p>
            </div>

        </div>
        <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
    </section>
    @include('components.product.bottom_form',[
   'heading' =>'Install the mobile app on your device now, and use Lumiform free of charge',
   'sectionBg' =>'red-opacity',
   'buttonBg' =>'red',
   'image' =>'img/group-1943.svg',
   ])

@endsection
