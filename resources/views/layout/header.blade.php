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


<nav class="container mx-auto flex items-center">
    <div class="logo mr-auto">
        <a href="@urlTo('index')" class="h-6">
            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1132.95 136.57"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#666;}.cls-3{fill:#00b2ff;}.cls-10,.cls-11,.cls-12,.cls-13,.cls-14,.cls-15,.cls-16,.cls-17,.cls-18,.cls-19,.cls-20,.cls-21,.cls-22,.cls-23,.cls-3,.cls-4,.cls-5,.cls-6,.cls-7,.cls-8,.cls-9{mix-blend-mode:screen;}.cls-4{fill:#fd2f58;}.cls-5{fill:#ffad22;}.cls-6{fill:#ffbc6e;}.cls-7{fill:#00c389;}.cls-8{fill:#00edff;}.cls-9{fill:#ffec99;}.cls-10{fill:#dcfff1;}.cls-11{fill:#ffefbc;}.cls-12{fill:#fff5f4;}.cls-13{fill:#8d5fd6;}.cls-14{fill:#8dcfff;}.cls-15{fill:#fe7ce4;}.cls-16{fill:#fed7ff;}.cls-17{fill:#ffd5e8;}.cls-18{fill:#fef6ff;}.cls-19{fill:#8df4ff;}.cls-20{fill:#fffbff;}.cls-21{fill:#fffaff;}.cls-22{fill:#fff2ff;}.cls-23{fill:#fff;}</style></defs><title>Artboard 36 copy</title><g class="cls-1"><g id="Layer_1" data-name="Layer 1"><path class="cls-2" d="M79.93,134.44H7.48A7.48,7.48,0,0,1,0,127V8.68A7.48,7.48,0,0,1,7.48,1.2H26.63a7.48,7.48,0,0,1,7.48,7.48v94.85H79.93A7.48,7.48,0,0,1,87.41,111V127A7.48,7.48,0,0,1,79.93,134.44Z"/><path class="cls-2" d="M235.68,89.67c-1.94,29.19-26.66,46.9-56.89,46.9s-54.94-17.71-56.89-46.9l-.12-81a7.48,7.48,0,0,1,7.48-7.49H148.4a7.48,7.48,0,0,1,7.48,7.48V81.13c0,12.43,9.66,23,22.08,23.45a22.92,22.92,0,0,0,23.75-22.9v-73a7.48,7.48,0,0,1,7.48-7.48h19.14a7.49,7.49,0,0,1,7.48,7.49Z"/><path class="cls-2" d="M392.11,127.68,385.45,58.3,364.5,129.09a7.48,7.48,0,0,1-7.17,5.35H338.66a7.47,7.47,0,0,1-7.17-5.35L311,59.83l-7.06,67.91a7.46,7.46,0,0,1-7.43,6.7H277.41a7.48,7.48,0,0,1-7.44-8.25L282.28,7.91a7.47,7.47,0,0,1,7.43-6.71h27.16A7.48,7.48,0,0,1,324,6.5l24,78.85L372,6.5a7.5,7.5,0,0,1,7.16-5.3h27.15a7.48,7.48,0,0,1,7.44,6.71L426,126.19a7.47,7.47,0,0,1-7.43,8.25h-19A7.48,7.48,0,0,1,392.11,127.68Z"/><rect class="cls-2" x="463.37" y="1.2" width="34.11" height="133.24" rx="7.48"/><path class="cls-2" d="M621.36,32.11H570.21V58.76H607.5A7.48,7.48,0,0,1,615,66.24v16a7.47,7.47,0,0,1-7.48,7.47H570.21V127a7.48,7.48,0,0,1-7.48,7.48H543.58A7.48,7.48,0,0,1,536.1,127V8.68a7.48,7.48,0,0,1,7.48-7.48h77.78a7.47,7.47,0,0,1,7.47,7.48v16A7.46,7.46,0,0,1,621.36,32.11Z"/><path class="cls-2" d="M915.29,83.5A44.76,44.76,0,0,0,894.75.19v0H838.28a7.47,7.47,0,0,0-7.48,7.47V127a7.48,7.48,0,0,0,7.48,7.48h19.15a7.48,7.48,0,0,0,7.48-7.48V89.67h14.26l22,40.84a7.5,7.5,0,0,0,6.59,3.93H930.2a7.47,7.47,0,0,0,6.58-11ZM886.23,60.89H864.91v-32h21.32a16,16,0,0,1,0,32Z"/><path class="cls-2" d="M1099,127.74l-7.06-67.91-20.5,69.26a7.48,7.48,0,0,1-7.17,5.35h-18.68a7.47,7.47,0,0,1-7.16-5.35l-20.51-69.26-7.06,67.91a7.47,7.47,0,0,1-7.44,6.7H984.31a7.48,7.48,0,0,1-7.44-8.25L989.17,7.91a7.49,7.49,0,0,1,7.44-6.71h27.16a7.48,7.48,0,0,1,7.15,5.3l24,78.85,24-78.85A7.49,7.49,0,0,1,1086,1.2h27.15a7.48,7.48,0,0,1,7.44,6.71l12.3,118.28a7.47,7.47,0,0,1-7.43,8.25H1106.4A7.48,7.48,0,0,1,1099,127.74Z"/><path class="cls-3" d="M767.43,58a43.14,43.14,0,0,1,7.33,5.86A42,42,0,0,1,786.54,86.8a42.17,42.17,0,0,0-24.18-69.33A42.23,42.23,0,0,1,767.43,58Z"/><path class="cls-4" d="M689.15,58a42.23,42.23,0,0,1,3-37.36,42.16,42.16,0,0,0-22.43,69A42.11,42.11,0,0,1,689.15,58Z"/><path class="cls-5" d="M704,103.89c-.88,0-1.77.08-2.66.08a42,42,0,0,1-31.69-14.35c-.13,1.34-.2,2.7-.2,4.08a42.2,42.2,0,0,0,58.82,38.75A42.31,42.31,0,0,1,704,103.89Z"/><path class="cls-6" d="M701.36,104c.89,0,1.78,0,2.66-.08A42.3,42.3,0,0,1,705.8,78a43.14,43.14,0,0,1-7.33-5.86A42,42,0,0,1,689.15,58a42.11,42.11,0,0,0-19.48,31.59A42,42,0,0,0,701.36,104Z"/><path class="cls-7" d="M754.86,101.14c-.57,0-1.14,0-1.71,0a42.23,42.23,0,0,1-24.86,31.35A42.18,42.18,0,0,0,786.54,86.8,42.06,42.06,0,0,1,754.86,101.14Z"/><path class="cls-8" d="M767.43,58a42.07,42.07,0,0,1-9.33,14.12A42.68,42.68,0,0,1,750.78,78a42.36,42.36,0,0,1,2.37,23.1c.57,0,1.14,0,1.71,0A42.06,42.06,0,0,0,786.54,86.8a42,42,0,0,0-11.78-22.92A43.14,43.14,0,0,0,767.43,58Z"/><path class="cls-9" d="M753.15,101.1a42,42,0,0,1-23.32-8.19,42,42,0,0,1-25.81,11,42.31,42.31,0,0,0,24.27,28.56A42.23,42.23,0,0,0,753.15,101.1Z"/><path class="cls-10" d="M750.78,78a41.94,41.94,0,0,1-13.24,5.46,42,42,0,0,1-7.71,9.45,42,42,0,0,0,23.32,8.19A42.36,42.36,0,0,0,750.78,78Z"/><path class="cls-11" d="M720.79,83.82a42.24,42.24,0,0,1-15-5.82A42.3,42.3,0,0,0,704,103.89a42,42,0,0,0,25.81-11A42.81,42.81,0,0,1,720.79,83.82Z"/><path class="cls-12" d="M737.54,83.46a42.56,42.56,0,0,1-16.75.36,42.81,42.81,0,0,0,9,9.09A42,42,0,0,0,737.54,83.46Z"/><path class="cls-13" d="M726.39,27.88a42,42,0,0,1,28.47-11.07,43,43,0,0,1,7.5.66,42.19,42.19,0,0,0-70.26,3.2,42.14,42.14,0,0,1,34.29,7.21Z"/><path class="cls-14" d="M726.39,27.88a42.19,42.19,0,0,1,15.89,23.74A42.13,42.13,0,0,1,767.43,58a42.23,42.23,0,0,0-5.07-40.55,43,43,0,0,0-7.5-.66A42,42,0,0,0,726.39,27.88Z"/><path class="cls-15" d="M689.15,58a41.9,41.9,0,0,1,22.48-6.5c.58,0,1.15,0,1.72,0a42,42,0,0,1,13-23.69,42.14,42.14,0,0,0-34.29-7.21A42.23,42.23,0,0,0,689.15,58Z"/><path class="cls-16" d="M742.28,51.62a42.19,42.19,0,0,0-15.89-23.74,42,42,0,0,0-13,23.69A42.12,42.12,0,0,1,728.29,55,42.14,42.14,0,0,1,742.28,51.62Z"/><path class="cls-17" d="M712.7,59a42,42,0,0,1,.65-7.4c-.57,0-1.14,0-1.72,0A41.9,41.9,0,0,0,689.15,58a42,42,0,0,0,9.32,14.11A43.14,43.14,0,0,0,705.8,78a41.94,41.94,0,0,1,7.46-12.13A42.36,42.36,0,0,1,712.7,59Z"/><path class="cls-18" d="M713.26,65.87c.6-.67,1.22-1.34,1.87-2A42,42,0,0,1,728.29,55a42.12,42.12,0,0,0-14.94-3.38,42.61,42.61,0,0,0-.09,14.3Z"/><path class="cls-19" d="M743.33,65.89A42.39,42.39,0,0,1,750.78,78a42.68,42.68,0,0,0,7.32-5.86A42.07,42.07,0,0,0,767.43,58a42.13,42.13,0,0,0-25.15-6.4,42.25,42.25,0,0,1,1.24,10.19C743.52,63.19,743.46,64.55,743.33,65.89Z"/><path class="cls-20" d="M743.33,65.89c.13-1.34.19-2.7.19-4.08a42.25,42.25,0,0,0-1.24-10.19,42.14,42.14,0,0,0-14,3.33A42.33,42.33,0,0,1,743.33,65.89Z"/><path class="cls-21" d="M737.54,83.46A41.94,41.94,0,0,0,750.78,78a42.39,42.39,0,0,0-7.45-12.11A41.94,41.94,0,0,1,737.54,83.46Z"/><path class="cls-22" d="M713.26,65.87A41.94,41.94,0,0,0,705.8,78a42.24,42.24,0,0,0,15,5.82A42,42,0,0,1,713.26,65.87Z"/><path class="cls-23" d="M728.29,55a42,42,0,0,0-13.16,8.93c-.65.65-1.27,1.32-1.87,2a42,42,0,0,0,7.53,17.95,42.56,42.56,0,0,0,16.75-.36,41.94,41.94,0,0,0,5.79-17.57A42.33,42.33,0,0,0,728.29,55Z"/></g></g></svg>
        </a>
    </div>
    <ul class="menu__items flex items-center">
        <li class="menu__item">
            <a class="nav__item flex items-center"
               href="@urlTo('product')"><span>@lang("Product")</span></a>
        </li>

        <li onclick="openMenu(this)" class="menu__item">
            <a class="nav__item nav__item--arrow flex items-center"
               href="javascript:void(0)" {{--href="@urlTo('useCases')"--}} >
                <span>@lang("Solutions")</span>
                @include('components.global.header-arrow')
            </a>
            <div class="nav__subitem">
                <div class="flex with-border">
                    <ul class="flex">
                        <li onclick="showChild(event,this)" class="sub__menu--item  border-right" data-id="industries">
                            <a href="javascript:void(0)"
                               class="flex items-center justify-between mb-4"><span>@lang("Industries")</span></a>
                            <div class="nav__subitem--2 pr-8" id="industries">
                                <a href="@urlTo('industries.food')">@lang("Food & Hospitality")</a>
                                <a href="@urlTo('industries.construction')">@lang("Construction")</a>
                                <a href="@urlTo('industries.manufacturing')">@lang("Manufacturing")</a>
                                <a href="@urlTo('industries.retail')">@lang("Retail")</a>
                                <a href="@urlTo('industries.logistics')">@lang("Logistic & Transportation")</a>
                                <a href="@urlTo('industries.facilityManagement')">@lang("Facility Management")</a>
                                <a href="@urlTo('industries.pharmaChemie')">@lang("Pharma & Chemistry")</a>
                            </div>
                        </li>
                        <li onclick="showChild(event,this)" class="sub__menu--item pl-8" data-id="categories">
                            <a href="javascript:void(0)"
                               class="flex items-center justify-between mb-4"><span>@lang("Categories")</span></a>
                            <div class="nav__subitem--2 " id="categories">
                                <a href="@urlTo('useCases.audits')">@lang("Audits")</a>
                                <a href="@urlTo('useCases.inspections')">@lang("Inspection")</a>
                                <a href="@urlTo('useCases.digitalChecklists')">@lang("Digital checklist")</a>
                                <a href="@urlTo('useCases.assessment')">@lang("Assessment")</a>
                                <a href="@urlTo('useCases.documentation')">@lang("Digital documentation")</a>
                                <a href="@urlTo('useCases.issue')">@lang("Issue  management")</a>
                            </div>

                        </li>
                    </ul>
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
                @include('components.global.header-arrow')</a>
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
                           class="flex items-center justify-between"><span>@lang("Case Studies")</span> </a>
                    </li>
                    <li class="sub__menu--item">
                        <a href="@urlTo('resources.contact')"
                           class="flex items-center justify-between"><span>@lang("Contact sales")</span> </a>
                    </li>
                    <li class="sub__menu--item">
                        <a href="@urlTo('resources.contact')"
                           class="flex items-center justify-between"><span>@lang("Topics")</span> </a>
                    </li>
                    <li class="sub__menu--item">
                        <a href="@urlTo('resources.contact')"
                           class="flex items-center justify-between"><span>@lang("Checklists")</span> </a>
                    </li>

                </ul>
            </div>
        </li>
        <li><a class="nav__item flex" href="@urlTo('pricing')">{{__("pricing")}}</a></li>
        <li><a class="nav__item nav__login flex" href="javascript:void(0)">@lang("Log In")</a></li>
        <li><a href="javascript:void(0)" class="btn__red--rounded flex nav__register text-20">@lang("Try for FREE")</a></li>
    </ul>
</nav>