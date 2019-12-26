<form action="" class="searchform">
    <div class="flex justify-between">
        <img src="{{asset('img/icons/home-icon_grey.svg')}}" alt="">
        <input name="search" type="search" value="{{ isset($search) ? $search : '' }}" class="search__input" placeholder=" Search"/>
    </div>
</form>
<div class="filter flex flex-wrap py-6">
    {{-- Form for Language (if needed by query) --}}
    <form action="">
        <input type="radio" value="en" id="en" hidden name="lang" class="language_select">
        <input type="radio" value="de" id="de" hidden  name="lang" class="language_select">
    </form>
    {{-- Form for category (if needed by query) --}}
    <form action="">
        <input type="checkbox" value="industries" id="industries_filter" hidden name="category">
        <input type="checkbox" value="categories" id="categories_filter" hidden  name="category">
    </form>
    <div class="filter__item w-5/12 mb-8" data-category="is_industry">
        <label for="industries_filter" class="text-20 font-cocogoose uppercase leading-snug tracking-heading text-secondary flex items-center">
            <div class="custom__checkbox  mr-5"></div>
            industries
        </label>
    </div>
    <div class="filter__item  ml-10 w-5/12 mb-8"  data-category="is_use_case">
        <label for="categories_filter" class="text-20 font-cocogoose uppercase leading-snug tracking-heading text-secondary flex items-center">
            <div class="custom__checkbox mr-5"></div>
            categories
        </label>
    </div>

    <div class="filter__item w-5/12 mb-8 @if (app()->getLocale() === 'en') active @endif ">
        <label for="en" class="text-20 font-cocogoose uppercase leading-snug tracking-heading text-secondary flex items-center">
            <div class="custom__checkbox  mr-5"></div>
            English
        </label>
    </div>
    <div class="filter__item  ml-10 w-5/12 mb-8 @if (app()->getLocale() === 'de') active @endif ">
        <label for="de" class="text-20 font-cocogoose uppercase leading-snug tracking-heading text-secondary flex items-center">
            <div class="custom__checkbox mr-5"></div>
            German
        </label>
    </div>
    {{--<div class="filter__item w-5/12 mb-8">
        <input type="checkbox" value="en" id="en" hidden name="lang">
        <label for="en" class="text-20 font-cocogoose uppercase leading-snug tracking-heading text-secondary flex items-center">
            <div class="custom__checkbox  mr-5"></div>
            English
        </label>
    </div>
    <div class="filter__item  ml-10 w-5/12 mb-8">
        <input type="checkbox" value="de" id="de" hidden  name="lang">
        <label for="de" class="text-20 font-cocogoose uppercase leading-snug tracking-heading text-secondary flex items-center">
            <div class="custom__checkbox mr-5"></div>
            German
        </label>
    </div>--}}
</div>

<ul class="categories" id="categories">
    @foreach($categories as $category)
        @include('pages/template_library/category_tree_item', ['category' => $category])
    @endforeach
</ul>

<script>

    document.querySelectorAll('.toggleExpand').forEach(function (button) {
        button.addEventListener('click', function (event) {
            let item = event.target.closest('li');
            item.classList.contains('item-opened') ?  item.classList.remove('item-opened') : item.classList.add('item-opened')
            event.target.closest('li').querySelectorAll('ul').forEach(function (submenu) {
                submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            });
        });
    });
    document.querySelectorAll('.language_select').forEach(function (radio) {
        radio.addEventListener('change', function (event) {
            location.href = '/' + (event.target.value === 'en' ? '' : event.target.value);
        });
    })


</script>
