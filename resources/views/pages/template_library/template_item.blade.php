<li class="template imgbox">
    <a href="@urlTo("templateLibrary.template", ["templateSlug" => $template->slug, "templateId" => $template->id])">
        <div class="image"
            @if ($template->image)
                style="background-image: url(@urlToImage($template->image));"
            @endif
        ></div>
        <div class="text">
            <h2>{{ $template->title }}</h2>
            <p>{{ $template->short_description }}</p>
        </div>
    </a>
</li>
