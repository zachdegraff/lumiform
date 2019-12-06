@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <section id="use-cases-top" class="bg-grey-light relative pt-32 pb-32">
        <div class="container mx-auto flex flex-wrap">
            <div class="page-title w-full text-center ">
                <h1 class="tracking-normal text-center lg:text-center text-40 xxl:text-70 mb-16 font-cocogoose uppercase font-extrabold text-primary">@lang('Specific for all types of use cases')</h1>
            </div>
            <div class="icon-block w-full flex">
                <div class="icon-block-child w-2/12">
                    <div class="icon text-center"><img src="{{asset('img/icons/audits.svg')}}" class="mx-auto"></div>
                    <div class="icon-title text-center mt-5"><p class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Audits')</p></div>
                </div>
                <div class="icon-block-child w-2/12">
                    <div class="icon text-center"><img src="{{asset('img/icons/inspections.svg')}}" class="mx-auto"></div>
                    <div class="icon-title text-center mt-5"><p class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Inspections')</p></div>
                </div>
                <div class="icon-block-child w-2/12">
                    <div class="icon text-center"><img src="{{asset('img/icons/checklist.svg')}}" class="mx-auto"></div>
                    <div class="icon-title text-center mt-5"><p class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Checklists')</p></div>
                </div>
                <div class="icon-block-child w-2/12">
                    <div class="icon text-center"><img src="{{asset('img/icons/assessments.svg')}}" class="mx-auto"></div>
                    <div class="icon-title text-center mt-5"><p class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Assessments')</p></div>
                </div>
                <div class="icon-block-child w-2/12">
                    <div class="icon text-center"><img src="{{asset('img/icons/documentation.svg')}}" class="mx-auto"></div>
                    <div class="icon-title text-center mt-5"><p class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Documentation')</p></div>
                </div>
                <div class="icon-block-child w-2/12">
                    <div class="icon text-center"><img src="{{asset('img/icons/issue-management.svg')}}" class="mx-auto"></div>
                    <div class="icon-title text-center mt-5"><p class="font-cocogoose text-20 uppercase text-primary text-regular">@lang('Issue management')</p></div>
                </div>
            </div>
        </div>
    </section>
    <section id="use-cases-audits" class="bg-white relative pt-32">
        <div class="container mx-auto flex flex-wrap">
            <div class="audits-top flex mb-32">
                <div class="w-2/5 pr-32">
                    <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-primary">@lang('Audits')</h2>
                    <p class="mt-10 font-cocogoose text-left text-primary text-20">
                        @lang('With Lumiform’s audit app, you cut the audit time by half. Conduct audits anytime and everywhere, share reports with all stakeholders immediately and analyse the overall performance.')
                    </p>
                    <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('Explore Lumiform for audits')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                </div>
                <div class="w-3/5 bg-grey border-solid"></div>
            </div>
            <div class="flex audits-second mb-16 w-full">
                <div class="w-6/12 flex flex-wrap">
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12  h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Site safety audit')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Food safety & HACCP audit')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('5S audit')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('ISO 22000 audit checklist')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('ISO 14001:2015 audit checklist')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Waste management compliance audit')</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('More Audit templates')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                    </div>
                </div>
                <div class="w-6/12 flex justify-center">
                    <div class="circle text-center p-32">
                        <p class="text-left text-17 font-cocogoose text-secondary mb-10 font-semibold">@lang('„Lumiform allowed us to achieve full transparency with regard to our quality in the stores, and has thus helped us to improve our quality procedures continuously.“')</p>
                        <p class="text-left text-15 font-cocogoose text-secondary font-hairline mb-10">@lang('Kristina Mockaytite, Backfactory Quality Manager')</p>
                        <p class="text-center text-red ">
                            <img src="{{asset('img/back-factory.png')}}" class="mx-auto">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="use-cases-inspections" class="bg-white relative pt-16 border-top-ccc">
        <div class="container mx-auto flex flex-wrap">
            <div class="audits-top flex mb-32">
                <div class="w-2/5 pr-32">
                    <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-primary">@lang('Inspections')</h2>
                    <p class="mt-10 font-cocogoose text-left text-primary text-20">
                        @lang('Lumiform enables you to create customised forms for all your quality and safety inspections. Perform all checks via the app. It’s simple, safe and reliable.')
                    </p>
                    <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('Explore Lumiform for inspections')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                </div>
                <div class="w-3/5 bg-grey border-solid"></div>
            </div>
            <div class="flex audits-second mb-16 w-full">
                <div class="w-6/12 flex flex-wrap">
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12  h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Light vehicle safety inspection')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Food premises self inspection checklist')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('OSHA self inspection checklist')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Food safety and hygiene inspection')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('General workplace inspection')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('HACCP template')</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('More inspection templates')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                    </div>
                </div>
                <div class="w-6/12 flex justify-center">
                    <div class="circle text-center p-32">
                        <p class="text-left text-17 font-cocogoose text-secondary mb-10 font-semibold">@lang('“Lumiform has helped us to eliminate accidents on the construction site almost entirely, and we have managed to increase the quality of work at the same time, through frequent safety checks.“')</p>
                        <p class="text-left text-15 font-cocogoose text-secondary font-hairline mb-10">@lang('Axel Kalisch, Benfleet, CEO')</p>
                        <p class="text-center text-red ">
                            <img src="{{asset('img/back-factory.png')}}" class="mx-auto">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="use-cases-digital-checklists" class="bg-white relative pt-16 border-top-ccc">
        <div class="container mx-auto flex flex-wrap">
            <div class="audits-top flex mb-32">
                <div class="w-2/5 pr-32">
                    <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-primary">@lang('Digital checklists')</h2>
                    <p class="mt-10 font-cocogoose text-left text-primary text-20">
                        @lang('Lumiform is your all-in-one solution for all digital lists. Create individual forms within minutes, schedule and assign, conduct inspections via mobile app, solve issues quickly and analyse the whole process.')
                    </p>
                    <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('Explore Lumiform for digital checklists')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                </div>
                <div class="w-3/5 bg-grey border-solid"></div>
            </div>
            <div class="flex audits-second mb-16 w-full">
                <div class="w-6/12 flex flex-wrap">
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12  h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Safety walk checklist')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Safety observation checklist')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Construction site cleaning checklist')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('ISO 9001:2008 system audit checklist')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Food premises self inspection checklist')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Warehouse safety checklist')</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('More digital checklist templates')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                    </div>
                </div>
                <div class="w-6/12 flex justify-center">
                    <div class="circle text-center p-32">
                        <p class="text-left text-17 font-cocogoose text-secondary mb-10 font-semibold">@lang('„Lumiform’s digital checklists helped us to get full transparency regarding what is happening in the field, and to check whether inspectors are completing their checklists in time.“')</p>
                        <p class="text-left text-15 font-cocogoose text-secondary font-hairline mb-10">@lang('Axel Kalisch, Benfleet, CEO')</p>
                        <p class="text-center text-red ">
                            <img src="{{asset('img/back-factory.png')}}" class="mx-auto">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="use-cases-assessments" class="bg-white relative pt-16 border-top-ccc">
        <div class="container mx-auto flex flex-wrap">
            <div class="audits-top flex mb-32">
                <div class="w-2/5 pr-32">
                    <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-primary">@lang('Assessments')</h2>
                    <p class="mt-10 font-cocogoose text-left text-primary text-20">
                        @lang('With the Lumiform app, you can quickly digitise all assessments, and conduct them efficiently in the field. The system creates your assessment reports automatically, and you can send them on to all stakeholders immediately. Find even more inspiration in our template library.')
                    </p>
                    <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('Explore Lumiform for assessments')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                </div>
                <div class="w-3/5 bg-grey border-solid"></div>
            </div>
            <div class="flex audits-second mb-16 w-full">
                <div class="w-6/12 flex flex-wrap">
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12  h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('General risk assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Area safety and health assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('High risk machine safety assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Hazard risk identification assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Office risk assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Risk assessment template')</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('More assessment templates')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                    </div>
                </div>
                <div class="w-6/12 flex justify-center">
                    <div class="circle text-center p-32">
                        <p class="text-left text-17 font-cocogoose text-secondary mb-10 font-semibold">@lang('“Lumiform has helped us to reduce the time spent on assessments by about half. We have also rolled out the solution to other processes that were being done manually before.”')</p>
                        <p class="text-left text-15 font-cocogoose text-secondary font-hairline mb-10">@lang('XY von Firma YZ')</p>
                        <p class="text-center text-red ">
                            <img src="{{asset('img/back-factory.png')}}" class="mx-auto">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="use-cases-assessments" class="bg-white relative pt-16 border-top-ccc">
        <div class="container mx-auto flex flex-wrap">
            <div class="audits-top flex mb-32">
                <div class="w-2/5 pr-32">
                    <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-primary">@lang('Assessments')</h2>
                    <p class="mt-10 font-cocogoose text-left text-primary text-20">
                        @lang('With the Lumiform app, you can quickly digitise all assessments, and conduct them efficiently in the field. The system creates your assessment reports automatically, and you can send them on to all stakeholders immediately. Find even more inspiration in our template library.')
                    </p>
                    <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('Explore Lumiform for assessments')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                </div>
                <div class="w-3/5 bg-grey border-solid"></div>
            </div>
            <div class="flex audits-second mb-16 w-full">
                <div class="w-6/12 flex flex-wrap">
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12  h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('General risk assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Area safety and health assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('High risk machine safety assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Hazard risk identification assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Office risk assessment')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Risk assessment template')</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('More assessment templates')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                    </div>
                </div>
                <div class="w-6/12 flex justify-center">
                    <div class="circle text-center p-32">
                        <p class="text-left text-17 font-cocogoose text-secondary mb-10 font-semibold">@lang('“Lumiform has helped us to reduce the time spent on assessments by about half. We have also rolled out the solution to other processes that were being done manually before.”')</p>
                        <p class="text-left text-15 font-cocogoose text-secondary font-hairline mb-10">@lang('XY von Firma YZ')</p>
                        <p class="text-center text-red ">
                            <img src="{{asset('img/back-factory.png')}}" class="mx-auto">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="use-cases-digital-documentation" class="bg-white relative pt-16 border-top-ccc">
        <div class="container mx-auto flex flex-wrap">
            <div class="audits-top flex mb-32">
                <div class="w-2/5 pr-32">
                    <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-primary">@lang('Digital documentation')</h2>
                    <p class="mt-10 font-cocogoose text-left text-primary text-20">
                        @lang('Lumiform is the all-in-one solution that gives you reliable, digital documentation, via the app. We store your documents in a safe place, and you gain full transparency regarding all events in the field.')
                    </p>
                    <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('Explore Lumiform for documentation')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                </div>
                <div class="w-3/5 bg-grey border-solid"></div>
            </div>
            <div class="flex audits-second mb-16 w-full">
                <div class="w-6/12 flex flex-wrap">
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12  h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Temperature logs documentation')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Visitor documentation')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Restaurant cleaning documentation')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Food incoming goods inspection')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Vehicle inspection documentation')</span>
                        </div>
                    </div>
                    <div class="w-6/12 flex py-5 pr-5">
                        <div class="img-block border-solid bg-grey w-5/12 h-30"></div>
                        <div class="title-block w-7/12 items-center flex">
                            <span class="font-cocogoose font-bold text-left uppercase text-20 text-primary pl-5">@lang('Training documentation')</span>
                        </div>
                    </div>
                    <div class="w-full">
                        <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('More documentation templates')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                    </div>
                </div>
                <div class="w-6/12 flex justify-center">
                    <div class="circle text-center p-32">
                        <p class="text-left text-17 font-cocogoose text-secondary mb-10 font-semibold">@lang('“The digital documentation with Lumiform has helped us to meet a company-wide standard and store documents securely.“')</p>
                        <p class="text-left text-15 font-cocogoose text-secondary font-hairline mb-10">@lang('XY von Firma YZ')</p>
                        <p class="text-center text-red ">
                            <img src="{{asset('img/back-factory.png')}}" class="mx-auto">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="use-cases-issue-management" class="bg-white relative pt-16 border-top-ccc">
        <div class="container mx-auto flex flex-wrap">
            <div class="audits-top flex mb-32">
                <div class="w-2/5 pr-32">
                    <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-primary">@lang('Issue management')</h2>
                    <p class="mt-10 font-cocogoose text-left text-primary text-20">
                        @lang('The Lumiform issue management helps you to uncover more issues and to solve them faster, collaborating as a team. All issues are seamlessly documented, and either attached to reports or recorded separately.')
                    </p>
                    <a href="" class="font-cocogoose font-bold text-left uppercase text-20 text-red flex mt-10"><span>@lang('Explore Lumiform for issue management')</span> <img src="{{asset('img/icons/secondary-button.svg')}}" class="ml-10"></a>
                </div>
                <div class="w-3/5 bg-grey border-solid"></div>
            </div>

        </div>
        <div class="flex issue-management-second mb-16 w-full flex-wrap">
            <div class="first-block w-7/12 p-16">
                <p class="text-left text-30 font-cocogoose text-secondary mb-10 font-semibold max-w-3xl">@lang('„With Lumiform’s issue management, we have not only uncovered twice as many issues as before, but also solved them in half the time.“')</p>
                <p class="text-left text-20 font-cocogoose text-secondary font-hairline mb-10">@lang('XY von Firma YZ')</p>
            </div>
            <div class="second-block w-5/12">
                <img src="{{asset('img/issue-management-second.svg')}}" class="mx-auto issue-management-second-img">
            </div>
        </div>
    </section>
@endsection
