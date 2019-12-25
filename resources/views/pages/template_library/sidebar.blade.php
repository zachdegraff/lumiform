<form action="" class="searchform">
    <div class="flex justify-between">
        <img src="{{asset('img/icons/home-icon_grey.svg')}}" alt="">
        <input name="search" type="search" value="{{ isset($search) ? $search : '' }}" class="search__input"/>
    </div>
</form>
<div class="filter flex py-6">
    <div class="filter__item ">

        <input type="checkbox" value="industries" id="industries" hidden>
        <label for="industries" class="text-20 font-cocogoose uppercase leading-snug tracking-heading text-secondary flex items-center">
            <div class="custom__checkbox  mr-5"></div>
            industries
        </label>
    </div>
    <div class="filter__item  ml-10">

        <input type="checkbox" value="categories" id="categories" hidden>
        <label for="categories" class="text-20 font-cocogoose uppercase leading-snug tracking-heading text-secondary flex items-center">
            <div class="custom__checkbox mr-5"></div>
            categories
        </label>
    </div>
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
    document.querySelectorAll('.filter__item').forEach(function (filter) {
        filter.addEventListener('click',function (event) {
            let el =  event.target.closest('.filter__item')
            el.classList.contains('active') ? el.classList.remove('active') : el.classList.add('active')


        })
    });



</script>
