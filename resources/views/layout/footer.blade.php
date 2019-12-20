<nav class="container mx-auto flex justify-between pb-24 flex-wrap lg:flex-no-wrap">
    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Language') }}</h5>
        <select id="languageSwitcher">
            <option value="en" @if (App::getLocale() === "en") selected @endif
            style="background-image: url('{{asset('img/arrow-right-long-red.svg')}}')">{{ __('English') }}</option>
            <option value="de" @if (App::getLocale() === "de") selected @endif >{{ __('German') }}</option>
        </select>
        <script>
            document.getElementById('languageSwitcher').addEventListener('change', function(event) {
                location.href = '/' + (event.target.value === 'en' ? '' : event.target.value);
            });
        </script>
    </div>

    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Lumiform') }}</h5>
        <ul>
            <li><a href="">{{ __('Product') }}</a></li>
            <li><a href="">{{ __('Templates') }}</a></li>
            <li><a href="">{{ __('Pricing') }}</a></li>
            <li><a href="">{{ __('All Use Cases') }}</a></li>
            <li><a href="">{{ __('Sensors') }}</a></li>
            <li><a href="">{{ __('Form Builder') }}</a></li>
            <li><a href="">{{ __('Workflows') }}</a></li>
            <li><a href="">{{ __('Mobile App') }}</a></li>
            <li><a href="">{{ __('Reports & Analysis') }}</a></li>
        </ul>
    </div>

    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Industry Solutions') }}</h5>
        <ul>
            <li><a href="">{{ __('Food') }}</a></li>
            <li><a href="">{{ __('Construction') }}</a></li>
            <li><a href="">{{ __('Manufacturing') }}</a></li>
            <li><a href="">{{ __('Retail') }}</a></li>
            <li><a href="">{{ __('Logistics') }}</a></li>
            <li><a href="">{{ __('Pharma') }}</a></li>
        </ul>
    </div>

    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Use Cases Solutions') }}</h5>
        <ul>
            <li><a href="">{{ __('Audits') }}</a></li>
            <li><a href="">{{ __('Inspections') }}</a></li>
            <li><a href="">{{ __('Digital Checklists') }}</a></li>
            <li><a href="">{{ __('Process Documentation') }}</a></li>
        </ul>
    </div>

    <div class="w-1/2 md:w-1/3 lg:w-auto mb-5">
        <h5 class="mb-8">{{ __('Resources') }}</h5>
        <ul>
            <li><a href="">{{ __('Watch a demo') }}</a></li>
            <li><a href="">{{ __('Help Center') }}</a></li>
            <li><a href="">{{ __('Blog') }}</a></li>
            <li><a href="">{{ __('Success Stories') }}</a></li>
            <li><a href="">{{ __('All Use Cases') }}</a></li>
            <li><a href="">{{ __('Contact Sales') }}</a></li>
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
</nav>
<div class="copyrights">
    <p><span>©2018-2019</span>{{__(' ALL RIGHTS RESERVED. LUMIFORM® IS A REGISTERED TRADEMARK OF ZYP.ONE GMBH.')}}</p>
</div>
