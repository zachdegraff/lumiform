
<form action="" class="searchform">
    <input name="search" type="search" value="{{ isset($search) ? $search : '' }}" />
    <button type="submot">{{ __('Search') }}</button>
</form>

<ul class="categories" id="categories">
    @foreach($categories as $category)
        @include('pages/template_library/category_tree_item', ['category' => $category])
    @endforeach
</ul>

<script>
    document.getElementById("categories").querySelectorAll('.toggleExpand').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.target.closest('li').querySelectorAll('ul').forEach(function (submenu) {
                submenu.style.display = submenu.style.display ==='block' ? 'none' : 'block';
            });
        });
    });
</script>
