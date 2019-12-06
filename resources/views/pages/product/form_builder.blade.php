@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="form__banner" class="py-10 lg:pt-32 lg:pb-24 bg-blue-light relative">
        <div class="container mx-auto flex">
            <div class="banner__left  w-full">
                <h1 class="tracking-normal text-center lg:text-left text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold">
                    @lang('Create custom forms in minutes.')
                </h1>
                <div class="banner__submit">
                    <form action="" class="mb-10 flex flex-col md:flex-row items-center md:justify-center lg:flex-none lg:justify-start">
                        <input type="email" class="w-full sm:w-360 pl-8 h-50 xxl:h-70 rounded-20"
                               placeholder="@lang('Enter e-mail address')">
                        <button class="font-extrabold w-215 mt-5 md:ml-10 md:mt-0  xxl:ml-12 bg-red text-white uppercase font-cocogoose text-17 lg:text-xl  h-50 xxxl:h-70 px-8 rounded-20">@lang('TRY FOR FREE')</button>
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
    <section id="digitise" class="py-12 lg:py-24">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 xl:text-40 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-light-blue">Digitise</span> your custom forms')
            </h2>
            <p class="sm:px-16 text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-24">
                @lang('Create a check queries form by typing a statement or question and then defining the type of response.')
            </p>
            <div class="digitise__items">
                <div class="digitise__item sm:flex mb-12 lg:mb-40">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center mb-5 sm:mb-0">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-grey-light">@lang('Define the <span class="text-light-blue">query</span>')</h3>
                        <p class="text-center  sm:text-left text-secondary font-hairline lg:text-30 font-din">@lang('Type in a question or statement to be displayed to the inspector in the field.')</p>
                    </div>
                    <div class="mx-auto digitise__item--image w-1/2  lg:w-3/5">
                        <img src="{{asset('img/group-2699.svg')}}" alt="">
                    </div>
                </div>
                <div class="digitise__item flex flex-wrap lg:flex-no-wrap">
                    <div class="digitise__item--text  sm:w-full lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="lg:text-30 font-bold font-cocogoose uppercase mb-5 text-grey-light text-center sm:text-left">
                            @lang('Define the <span class="text-purple">response</span>')
                        </h3>
                        <p class="text-secondary font-hairline lg:text-30 font-din text-center sm:text-left">
                            @lang('Define how the inspector should answer the question or statement in the field.')
                        </p>
                    </div>
                    <div class="digitise__item--image w-full lg:w-3/5 flex flex-wrap">
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1261.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Multiple Choice')</span>
                        </div>
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1262.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Text')</span>
                        </div>
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1265.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Number')</span>
                        </div>
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1266.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Checkbox')</span>
                        </div>
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1268.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Date & Time')</span>
                        </div>
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1260.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('photo')</span>
                        </div>
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1263.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Annotation')</span>
                        </div>
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1264.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Signature')</span>
                        </div>
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1267.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Dropdown')</span>
                        </div>
                        <div class="image__item w-1/3 sm:w-1/5 text-center my-4 lg:my-10">
                            <img src="{{asset('img/group-1269.svg')}}" alt="" class="mb-4 lg:mb-8 mx-auto">
                            <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('Instruction')</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="button__base px-8 py-3 lg:py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="workflow" class="py-12 lg:pt-24 lg:py-32">

        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 mb-5 lg:text-40 lg:mb-24 uppercase tracking-heading">
                @lang('Create logics and <span class="text-green">define workflows</span>')
            </h2>
            <div class="workflow__items">
                <div class="sm:flex mb-12 lg:mb-40 sm:flex-row-reverse">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pl-12 lg:pl-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-gold">@lang('Check-logics')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din mb-5 sm:mb-0">
                            @lang('Create if-then logics, and only make inspection elements visible when the inspector gives a particular answer.')</p>
                    </div>
                    <div class="digitise__item--image lg:w-3/5 w-1/2 mx-auto">
                        <img src="{{asset('img/group-2743.svg')}}" alt="">
                    </div>
                </div>
                <div class="sm:flex mb-12 lg:mb-40 sm:flex-row-reverse">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pl-12 lg:pl-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-green">@lang('Automatic issue logics')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din">
                            @lang('Predefine issues that the system triggers automatically when receiving a specific response. For example, notify the technician automatically if the coffee machine is damaged.')
                        </p>
                        <a href=""
                           class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large my-5  lg:mt-10">
                            @lang('LEARN MORE ABOUT issues')
                            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                        </a>
                    </div>
                    <div class="digitise__item--image lg:w-3/5 w-1/2 mx-auto">
                        <img src="{{asset('img/rect-515.svg')}}" alt="">
                    </div>
                </div>
                <div class="sm:flex mb-12 lg:mb-40 sm:flex-row-reverse">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pl-12  lg:pl-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-light-blue">@lang('Notification-logics')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din mb-5 sm:mb-0">
                            @lang('Notify users via push-notification or email, when the inspector gives a particular answer.')</p>
                    </div>
                    <div class="digitise__item--image lg:w-3/5 w-1/2 mx-auto">
                        <img src="{{asset('img/group-2700.svg')}}" alt="">
                    </div>
                </div>

            </div>
            <button class="button__base px-8 py-3 lg:py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="forms" class="py-12 lg:pt-24 lg:py-32">

        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-5 lg:mb-20 uppercase tracking-heading">
                @lang('<span class="text-gold">structure your forms</span> with sections and pages')
            </h2>
            <div class="workflow__items">
                <div class="sm:flex mb-12 lg:mb-40 ">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-light-blue">@lang('Create sections and pages')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din mb-5">
                            @lang('Use sections to bundle elements relating to one topic (for example, a ‘Product inspection’ section can be comprised of several checks), and pages to separate checks on different screens.')</p>
                    </div>
                    <div class="digitise__item--image  w-1/2 lg:w-3/5 mx-auto">
                        <img src="{{asset('img/group-2701.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>
                <div class="sm:flex mb-12 lg:mb-40">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-gold">@lang('Repeatable sections')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din mb-5">
                            @lang('Use repeatable sections to perform a series of checks, as often as you like, and duplicate the questions on the fly.')</p>
                    </div>
                    <div class="digitise__item--image w-1/2 lg:w-3/5 mx-auto">
                        <img src="{{asset('img/group-2744.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>


            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>
    </section>
    <section id="organise" class="py-12 lg:pt-24 lg:py-32">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 lg:mb-20 mb-5 uppercase tracking-heading">
                @lang('<span class="text-purple">Organise</span> your inspections')
            </h2>
            <div class="workflow__items">
                <div class="sm:flex mb-12 lg:mb-40 ">
                    <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-10 text-gold">@lang('Schedule inspections')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din mb-5">
                            @lang('Define the timeframe in which inspectors should complete the assignment, and the cycle in which the check must be repeated.')
                        </p>
                        <div class="define__block mt-5 sm:mt-24">
                            <h6 class="text-15 lg:text-20 font-bold font-cocogoose uppercase mb-5 text-grey-bold">
                                @lang('DEFINE THE FOLLOWING PARAMETERS:')
                            </h6>
                            <ul class="parameters">
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1287.svg')}}" alt=""
                                         class="mr-6"> @lang('Schedule start & end time')</li>
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1288.svg')}}" alt=""
                                         class="mr-6"> @lang('Schedule repeats <br>(e.g. daily, weekly, monthly, custom)')
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="digitise__item--image w-1/2 lg:w-3/5 mx-auto">
                        <img src="{{asset('img/group-2711.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>
                <div class="sm:flex mb-12 lg:mb-40">
                    <div class="digitise__item--text w-full lg:w-2/5 sm:pr-12 lg:pr-20 flex flex-col justify-center">
                        <h3 class="text-center sm:text-left lg:text-30 font-bold font-cocogoose uppercase mb-5 text-purple">@lang('Assign inspections')</h3>
                        <p class="text-center sm:text-left text-secondary font-hairline lg:text-30 font-din">
                            @lang('Assign inspections to users or groups (e.g. cleaning team) and select the site where it takes place.')
                        </p>
                        <div class="define__block mt-5 sm:mt-24">
                            <h6 class="text-15 lg:text-20 font-bold font-cocogoose uppercase mb-10 text-grey-bold">
                                @lang('DEFINE THE FOLLOWING PARAMETERS:')
                            </h6>
                            <ul class="parameters">
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1290.svg')}}" alt="" class="mr-6">
                                    @lang('Groups')
                                </li>
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1289.svg')}}" alt="" class="mr-6">
                                    @lang('Users')
                                </li>
                                <li class="text-secondary text-15 lg:text-20 font-cocogoose tracking-heading flex items-center mb-8">
                                    <img src="{{asset('img/group-1290.svg')}}" alt="" class="mr-6">
                                    @lang('Site')
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="digitise__item--image w-1/2 lg:w-3/5 mx-auto">
                        <img src="{{asset('img/group-2712.svg')}}" alt="" class="mx-auto">
                    </div>
                </div>


            </div>
            <button class="button__base px-8 py-5 mt-20 mx-auto">@lang('Get Lumiform FREE')</button>
        </div>

    </section>
    <section id="restrict" class="py-12 lg:py-32">
        <div class="container mx-auto">
            <div class="sm:flex  sm:flex-row-reverse">
                <div class="digitise__item--text w-full sm:w-1/2 lg:w-2/5 sm:pl-12 lg:pl-20 flex flex-col justify-center">
                    <h3 class="text-center sm:text-left text-30 lg:text-40 font-bold font-cocogoose uppercase mb-5 text-red">@lang('Restrict the availability of forms')</h3>
                    <p class="text-center sm:text-left text-secondary font-hairline text-20 lg:text-30 font-din mb-5 sm:mb-0">
                        @lang('Your checklist is available for all users in your organisation, per default, at any time. To limit the availability of unscheduled lists, you can make them available to individual users only.')</p>
                </div>
                <div class="digitise__item--image w-1/2 lg:w-3/5 mx-auto">
                    <img src="{{asset('img/group-2745.svg')}}" alt="" class="mx-auto">
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="py-12 lg:pt-24 lg:pb-32 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-30 lg:text-40 mb-4 uppercase tracking-heading">
                @lang('We offer many more features to improve flexibility')
            </h2>
            <p class=" text-center font-light font-din text-20 lg:text-30 text-secondary tracking-text mb-16">
                @lang('Features that help you to create and organise your inspections easily – no matter how advanced or sophisticated they are.')
            </p>

            <div class="feature__items flex flex-wrap sm:flex-no-wrap">
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-2713.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('dRAG & DROP')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-2714.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('REQUIRED FIELDS')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-2715.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('UNIVERSAL RESPONSE TYPES')</span>
                </div>
                <div class="feature__item w-1/2 sm:flex-1 text-center mb-2 sm:mb-0">
                    <img src="{{asset('img/group-2716.svg')}}" alt="" class="mb-6 mx-auto">
                    <span class="uppercase text-secondary text-12 lg:text-20 tracking-heading">@lang('SCORES')</span>
                </div>
            </div>
        </div>

    </section>
    <section id="easy" class="pt-12 lg:pt-24 bg-blue">
        <div class="container mx-auto md:pt-12">
            <h3 class="section__title-large lg:w-2/3 md:mx-auto text-center mb-5 lg:mb-20 "
                style="color: #ffffff">@lang('Use our easy-to-use form builder, and create your first form within minutes.')</h3>
            <div class="easy__content flex">
                <div class="easy__image w-0 lg:w-1/4 flex justify-start">
                    <img src="{{asset('img/group-1960.svg')}}" alt="">
                </div>
                <div class="easy__submit w-full lg:w-3/4 xxl:w-2/4 px-5 lg:px-16">
                    <form action="">
                        <div class="home__banner--email flex flex-col justify-center  md:flex-row lg:justify-between mb-8">

                            <input class="pl-8 w-full sm:w-360 lg:w-2/4 sm:mx-4" type="email" placeholder="{{__('Enter e-mail address')}}">
                            <button class="base__button mx-auto mt-5 md:mt-0 w-215 lg:w-auto px-8 bg-blue-dark md:mx-4 font-extrabold text-white uppercase font-cocogoose text-17 lg:text-xl h-70  rounded-20 items-center flex">@lang('TRY FOR FREE')</button>
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
