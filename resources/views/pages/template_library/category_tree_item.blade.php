<li>
    <a href="@urlTo("templateLibrary.index", ["categories" => $category->slug])">{{ $category->title }}</a>
    @if ($category->subcategories->count() > 0)
    <button class="toggleExpand"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path opacity=".87" fill="none" d="M24 24H0V0h24v24z"/><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"/></svg></button>
    <ul style="display: none;">
        @foreach($category->subcategories as $subcategory)
            @include('pages/template_library/category_tree_item', ['category' => $subcategory])
        @endforeach
    </ul>
    @endif
</li>
