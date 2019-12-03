<nav class="container mx-auto">
    <ul class="flex items-center" >
        <li class="logo mr-auto">
            <a href="@urlTo('index')">
            <img src="{{asset('img/logo.png')}}" alt="">
            </a>
        </li>
        <li>
            <a class="nav__item nav__item--arrow flex" href="@urlTo('product')">@lang("Product") <img src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <ul class="nav__subitem">
                <li><a href="@urlTo("product.formBuilder")">@lang("Form Builder")</a></li>
                <li><a href="@urlTo("product.organization")">@lang("Organization")</a></li>
                <li><a href="@urlTo("product.conduct")">@lang("Conduct")</a></li>
                <li><a href="@urlTo("product.analysis")">@lang("Analysis")</a></li>
            </ul>
        </li>
        <li>
            <a class="nav__item nav__item--arrow flex" href="@urlTo("useCases")">@lang("Solutions")<img src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <ul class="nav__subitem">
                <li><a href="@urlTo("useCases.audits")">@lang("Audits")</a></li>
                <li><a href="@urlTo("useCases.inspections")">@lang("Inspections")</a></li>
                <li><a href="@urlTo("useCases.digitalChecklists")">@lang("Digital Checklists")</a></li>
                </ul>
        </li>
        <li>
            <a class=" nav__item nav__item--arrow flex" href="@urlTo("industries")">
            @lang("Industries")<img src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <ul class="nav__subitem">
                <li><a href="@urlTo("industries.food")">@lang("Food")</a></li>
                <li><a href="@urlTo("industries.construction")">@lang("Construction")</a></li>
                <li><a href="@urlTo("industries.manufacturing")">@lang("Manufacturing")</a></li>
                <li><a href="@urlTo("industries.retail")">@lang("Retail")</a></li>
                <li><a href="@urlTo("industries.logistics")">@lang("Logistics")</a></li>
                <li><a href="@urlTo("industries.facilityManagement")">@lang("Facility Management")</a></li>
                <li><a href="@urlTo("industries.pharmaChemie")">@lang("Pharma & Chemie")</a></li>
            </ul>
        </li>
        <li><a class="nav__item nav__item--arrow flex" href="@urlTo("templateLibrary")">@lang("Templates")</a></li>
        <li>
            <a class="nav__item nav__item--arrow flex" href="@urlTo("resources")">@lang("Resources") <img src="{{asset('img/arrow-right.png')}}" class="arrow-right xl:pl-1 xxl:pl-3"></a>
            <ul class="nav__subitem">
                <li><a href="@urlTo("resources.contact")">@lang("Contact")</a></li>
                <li><a href="@urlTo("resources.customerStories")">@lang("Customer Stories")</a></li>
                <li><a href="@urlTo("resources.appUses")">@lang("App Uses")</a></li>
                <li><a href="@urlTo("resources.sensors")">@lang("Sensors")</a></li>
            </ul>
        </li>
        <li><a class="nav__item nav__item--arrow flex" href="@urlTo("pricing")">@lang("Pricing")</a></li>
        <li><a class="nav__item nav__login flex" href="">@lang("Log In")</a></li>
        <li><a href="" class="btn__red--rounded flex">@lang("Try for FREE")</a></li>
    </ul>
</nav>
