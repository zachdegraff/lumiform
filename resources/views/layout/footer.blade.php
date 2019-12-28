<nav class="container mx-auto flex justify-between pb-24 flex-wrap lg:flex-no-wrap relative">
    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Language') }}</h5>
        <div class="relative">

            <div class="custom_select">
                <div class="select" style="background-image: url('../img/icons/{{app()->getLocale()}}.svg')">
                    {{app()->getLocale() === "en" ? __('English') :  __('German') }}
                </div>
                <div class="options">
                    <div class="language flex items-center" data-lang="en" onclick="selectLanguage(this)">
                        <img src="{{asset('img/icons/en.svg')}}" alt="{{ __('English') }}" class="mr-5">
                        {{ __('English') }}
                    </div>
                    <div class="language flex items-center" data-lang="de" onclick="selectLanguage(this)">
                        <img src="{{asset('img/icons/de.svg')}}" alt="{{ __('German') }}" class="mr-5">
                        {{ __('German') }}
                    </div>
                </div>

            </div>
            <select id="languageSwitcher" class="relative" style="display: none" name="language">
                <option value="en" @if (App::getLocale() === "en") selected @endif >{{ __('English') }}</option>
                <option value="de" @if (App::getLocale() === "de") selected @endif >{{ __('German') }}</option>
            </select>
        </div>
        <script>
            let select = document.querySelector('.select');

            function selectLanguage(target) {
                let lang = target.dataset.lang;
                location.href = '/' + (lang === 'en' ? '' : lang);
            }

            select.addEventListener('click', function (event) {
                console.log(event)
                if (event.target.parentElement.classList.contains('open')) {
                    event.target.parentElement.classList.remove('open')
                } else {
                    event.target.parentElement.classList.add('open')
                }
            })
        </script>
        <script>
            document.getElementById('languageSwitcher').addEventListener('change', function (event) {
                location.href = '/' + (event.target.value === 'en' ? '' : event.target.value);
            });
        </script>
    </div>
    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Lumiform') }}</h5>
        <ul>
            <li><a href="@urlTo('product')">{{ __('Product') }}</a></li>
            <li><a href="@urlTo('pricing')">{{ __('Pricing') }}</a></li>
            <li><a href="@urlTo('product.formBuilder')">{{ __('Create Forms ') }}</a></li>
            <li><a href="@urlTo('product.conduct')">{{ __('Conduct via App') }}</a></li>
            <li><a href="@urlTo('product.issues')">{{ __('Solve Issues') }}</a></li>
            <li><a href="@urlTo('product.analysis')">{{ __('Results Reports & Analysis') }}</a></li>
            <li><a href="@urlTo('product.organization')">{{ __('Administration ') }}</a></li>
            <li><a href="@urlTo('resources.sensors')">{{ __('Temperature monitoring') }}</a></li>
        </ul>
    </div>

    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Industry Solutions') }}</h5>
        <ul>
            <li><a href="@urlTo('industries.food')">{{ __('Food & Hospiatlity') }}</a></li>
            <li><a href="@urlTo('industries.construction')">{{ __('Construction') }}</a></li>
            <li><a href="@urlTo('industries.manufacturing')">{{ __('Manufacturing') }}</a></li>
            <li><a href="@urlTo('industries.retail')">{{ __('Retail') }}</a></li>
            <li><a href="@urlTo('industries.logistics')">{{ __('Logistics & transportation') }}</a></li>
            <li><a href="@urlTo('industries.facilityManagement')">{{ __('facility management') }}</a></li>
            <li><a href="@urlTo('industries.pharmaChemie')">{{ __('Pharmaceuticals & Chemicals') }}</a></li>
        </ul>
    </div>

    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Use Cases Solutions') }}</h5>
        <ul>
            <li><a href="@urlTo('useCases.audits')">{{ __('Audits') }}</a></li>
            <li><a href="@urlTo('useCases.inspections')">{{ __('Inspections') }}</a></li>
            <li><a href="@urlTo('useCases.digitalChecklists')">{{ __('Checklists') }}</a></li>
            <li><a href="@urlTo('useCases.assessment')">{{ __('Assessment') }}</a></li>
            <li><a href="@urlTo('useCases.documentation')">{{ __('Documentation') }}</a></li>
            <li><a href="@urlTo('useCases.issue')">{{ __('Issue Management') }}</a></li>
        </ul>
    </div>

    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Resources') }}</h5>
        <ul>
            <li><a href="">{{ __('Watch a demo') }}</a></li>
            <li><a href="">{{ __('Help Center') }}</a></li>
            <li><a href="">{{ __('Blog') }}</a></li>
            <li><a href="@urlTo('resources')">{{ __('Case Studies') }}</a></li>
            <li><a href="@urlTo('resources')">{{ __('All Use Cases') }}</a></li>
            <li><a href="@urlTo('resources.contact')">{{ __('Contact Sales') }}</a></li>
            <li><a href="">{{ __('app uses') }}</a></li>
            <li><a href="">{{ __('topics') }}</a></li>
            <li><a href="">{{ __('checklists') }}</a></li>
            <li><a href="@urlTo('templateLibrary')">{{ __('templates') }}</a></li>
        </ul>
    </div>

    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('About us') }}</h5>
        <ul>
            <li><a href="@urlTo('about')">{{ __('About') }}</a></li>
            <li><a href="">{{ __('Jobs') }}</a></li>
            <li><a href="">{{ __('Imprint') }}</a></li>
            <li><a href="">{{ __('Terms') }}</a></li>
            <li><a href="">{{ __('Privacy') }}</a></li>
        </ul>
    </div>
    <img src="{{asset('img/footer-img.png')}}" alt=""
         srcset="{{asset('img/footer-img.png')}},{{asset('img/footer-img@2x.png')}} 2x"
         class="footer__image">
</nav>
<div class="copyrights">
    <p><span>©2018-2019</span>{{__(' ALL RIGHTS RESERVED. LUMIFORM® IS A REGISTERED TRADEMARK OF ZYP.ONE GMBH.')}}</p>
</div>
