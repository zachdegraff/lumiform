<li class="mb-3">

    @if ($category->subcategories->count() > 0)
        <button class="toggleExpand font-din font-light text-20 leading-snug tracking-text text-secondary capitalize flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="17.414" viewBox="0 0 9.414 17.414"
                 class="mr-6">
                <g transform="translate(-921.793 -432.793)">
                    <line x2="8" y2="8" transform="translate(922.5 433.5)" fill="none" stroke="#707070"
                          stroke-linecap="round" stroke-width="1"/>
                    <line y1="8" x2="8" transform="translate(922.5 441.5)" fill="none" stroke="#707070"
                          stroke-linecap="round" stroke-width="1"/>
                </g>
            </svg>
            {{ $category->title }}
        </button>
        <ul style="display: none;" class="aside__submenu">
            @foreach($category->subcategories as $subcategory)
                @include('pages/template_library/category_tree_item', ['category' => $subcategory])
            @endforeach
        </ul>
    @else
        <a href='@urlTo("templateLibrary.index", ["categories" => $category->slug])'
           class="font-din font-light text-20 leading-snug tracking-text text-secondary capitalize flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="17.414" viewBox="0 0 9.414 17.414"
                 class="mr-6">
                <g transform="translate(-921.793 -432.793)">
                    <line x2="8" y2="8" transform="translate(922.5 433.5)" fill="none" stroke="#707070"
                          stroke-linecap="round" stroke-width="1"/>
                    <line y1="8" x2="8" transform="translate(922.5 441.5)" fill="none" stroke="#707070"
                          stroke-linecap="round" stroke-width="1"/>
                </g>
            </svg>
            {{ $category->title }}
        </a>
    @endif

</li>
