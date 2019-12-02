<li class="app-use imgbox">
    <a href="@urlTo("resources.appUses.appUse", ["appUseSlug" => $appUse->slug])">
        <div class="image"
            @if ($appUse->image)
                style="background-image: url(@urlToImage($appUse->image));"
            @endif
        ></div>
        <div class="text">
            <h2>{{ $appUse->title }}</h2>
            <p>{{ $appUse->short_description }}</p>
        </div>
    </a>
</li>
