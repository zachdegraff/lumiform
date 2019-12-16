{{--<nav class="container mx-auto sm:px-10">
    <ul class="flex items-center">
        <li class="logo mr-auto">
            <a href="@urlTo('index')" class="h-6">
                <img src="{{asset('img/logo.png')}}" alt="">
            </a>
        </li>
        <li onclick="openMenu(this)" class="menu__item">
            <a class="nav__item nav__item--arrow flex items-center" href="javascript:void(0)" --}}{{--href="@urlTo('product')"--}}{{--><span>@lang("Product")</span> <img
                        src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <div class="nav__subitem">
                <a href="@urlTo('product.formBuilder')">@lang("Form Builder")</a>
                <a href="@urlTo('product.organization')">@lang("Organization")</a>
                <a href="@urlTo('product.conduct')">@lang("Conduct")</a>
                <a href="@urlTo('product.analysis')">@lang("Analysis")</a>
            </div>
        </li>
        <li onclick="openMenu(this)" class="menu__item">
            <a class="nav__item nav__item--arrow flex items-center" href="javascript:void(0)" --}}{{--href="@urlTo('useCases')"--}}{{-- >
                <span>@lang("Solutions")</span><img
                    src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <div class="nav__subitem">
                <a href="@urlTo('useCases.audits')">@lang("Audits")</a>
                <a href="@urlTo('useCases.inspections')">@lang("Inspections")</a>
                <a href="@urlTo('useCases.digitalChecklists')">@lang("Digital Checklists")</a>
            </div>
        </li>
        <li onclick="openMenu(this)" class="menu__item">
            <a class="nav__item nav__item--arrow flex items-center" href="javascript:void(0)" --}}{{--href="@urlTo('industries')"--}}{{-->
            <span>@lang("Industries")</span>
                <img src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <div class="nav__subitem">
               <a href="@urlTo('industries.food')">@lang("Food")</a>
               <a href="@urlTo('industries.construction')">@lang("Construction")</a>
               <a href="@urlTo('industries.manufacturing')">@lang("Manufacturing")</a>
               <a href="@urlTo('industries.retail')">@lang("Retail")</a>
               <a href="@urlTo('industries.logistics')">@lang("Logistics")</a>
               <a href="@urlTo('industries.facilityManagement')">@lang("Facility Management")</a>
               <a href="@urlTo('industries.pharmaChemie')">@lang("Pharma & Chemie")</a>
            </div>
        </li>
        <li class="menu__item"><a class="nav__item flex" href="@urlTo('templateLibrary')">@lang("Templates")</a></li>
        <li onclick="openMenu(this)" class="menu__item">
            <a class="nav__item nav__item--arrow flex items-center" href="javascript:void(0)" --}}{{--href="@urlTo('resources')"--}}{{--><span>@lang("Resources")</span>
                <img
                    src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <div class="nav__subitem">
                <a href="@urlTo('resources.contact')">@lang("Contact")</a>
                <a href="@urlTo('resources.customerStories')">@lang("Customer Stories")</a>
                <a href="@urlTo('resources.appUses')">@lang("App Uses")</a>
                <a href="@urlTo('resources.sensors')">@lang("Sensors")</a>
            </div>
        </li>
        <li ><a class="nav__item flex" href="@urlTo('pricing')">@lang("Pricing")</a></li>
        <li ><a class="nav__item nav__login flex" href="">@lang("Log In")</a></li>
        <li><a href="" class="btn__red--rounded flex">@lang("Try for FREE")</a></li>

    </ul>
</nav>--}}


<nav class="container mx-auto flex items-center sm:px-10">
    <div class="logo mr-auto">
        <a href="@urlTo('index')" class="h-6">
            <img src="{{asset('img/logo.png')}}" alt="">
        </a>
    </div>
    <ul class="menu__items flex items-center">
        <li class="menu__item">
            <a class="nav__item nav__item--arrow flex items-center"
               href="@urlTo('product')"><span>@lang("Product")</span></a>
        </li>

        <li onclick="openMenu(this)" class="menu__item">
            <a class="nav__item nav__item--arrow flex items-center"
               href="javascript:void(0)" {{--href="@urlTo('useCases')"--}} >
                <span>@lang("Solutions")</span>
                <img
                        src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <div class="nav__subitem">
                <div class="flex with-border">
                    <ul >
                        <li onclick="showChild(event,this)" class="sub__menu--item" data-id="industries">
                            <a href="javascript:void(0)"
                               class="flex items-center justify-between"><span>@lang("Industries")</span> <img
                                        src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
                        </li>
                        <li onclick="showChild(event,this)" class="sub__menu--item" data-id="categories">
                            <a href="javascript:void(0)"
                               class="flex items-center justify-between"><span>@lang("Categories")</span> <img
                                        src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>

                        </li>
                    </ul>
                    <div class="sub__right">
                        <div class="nav__subitem--2" id="industries">
                            <a href="@urlTo('industries.food')">@lang("Food & Hospitality")</a>
                            <a href="@urlTo('industries.construction')">@lang("Construction")</a>
                            <a href="@urlTo('industries.manufacturing')">@lang("Manufacturing")</a>
                            <a href="@urlTo('industries.retail')">@lang("Retail")</a>
                            <a href="@urlTo('industries.logistics')">@lang("Logistic & Transportation")</a>
                            <a href="@urlTo('industries.facilityManagement')">@lang("Facility Management")</a>
                            <a href="@urlTo('industries.pharmaChemie')">@lang("Pharma & Chemistry")</a>
                        </div>
                        <div class="nav__subitem--2" id="categories">
                            <a href="@urlTo('useCases.audits')">@lang("Audits")</a>
                            <a href="@urlTo('useCases.audits')">@lang("Inspection")</a>
                            <a href="@urlTo('useCases.audits')">@lang("Digital checklist")</a>
                            <a href="@urlTo('useCases.audits')">@lang("Assessment")</a>
                            <a href="@urlTo('useCases.audits')">@lang("Digital documentation")</a>
                            <a href="@urlTo('useCases.audits')">@lang("Issue  management")</a>
                        </div>
                    </div>
                </div>
                <a href="" class="sub__red flex items-center pt-5"><span
                            class="text-red ">@lang('All app uses')</span><img
                            src="{{asset('img/arrow-right-long-red.svg')}}" class="w-4 ml-5"></a>
            </div>
        </li>
        <li class="menu__item"><a class="nav__item flex" href="@urlTo('templateLibrary')">@lang("Templates")</a></li>

        <li onclick="openMenu(this)" class="menu__item">
            <a class="nav__item nav__item--arrow flex items-center" href="javascript:void(0)">
                <span>@lang("resources")</span>
                <img
                        src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <div class="nav__subitem">
                <ul>
                    <li class="sub__menu--item">
                        <a href="javascript:void(0)"
                           class="flex items-center justify-between"><span>@lang("Help center")</span> </a>
                    </li>
                    <li class="sub__menu--item">
                        <a href="javascript:void(0)"
                           class="flex items-center justify-between"><span>@lang("Blog")</span> </a>
                    </li>
                    <li class="sub__menu--item">
                        <a href="javascript:void(0)"
                           class="flex items-center justify-between"><span>@lang("Watch a demo")</span> </a>
                    </li>
                    <li class="sub__menu--item">
                        <a href="javascript:void(0)"
                           class="flex items-center justify-between"><span>@lang("Customer stories")</span> </a>
                    </li>
                    <li class="sub__menu--item">
                        <a href="javascript:void(0)"
                           class="flex items-center justify-between"><span>@lang("Contact sales")</span> </a>
                    </li>

                </ul>
                <a href="" class="sub__red flex items-center text-red"><span
                            class="text-red">@lang('All app uses')</span><img
                            src="{{asset('img/arrow-right-long-red.svg')}}" class="w-4 ml-5"></a>
            </div>
        </li>
        <li><a class="nav__item flex" href="@urlTo('pricing')">@lang("Pricing")</a></li>
        <li><a class="nav__item nav__login flex" href="">@lang("Log In")</a></li>
        <li><a href="" class="btn__red--rounded flex">@lang("Try for FREE")</a></li>
    </ul>
</nav>