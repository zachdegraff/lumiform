{{--<li class="template imgbox">
    <a href="@urlTo("templateLibrary.template", ["templateSlug" => $template->slug, "templateId" => $template->id])">
        <div class="image img-box__image"
            @if ($template->image)
                style="background-image: url(@urlToImage($template->image));"
             @else style="background: #90cdf4"
            @endif
        ></div>
        <div class="text">
            <h2>{{ $template->title }}</h2>
            <p>{{ $template->short_description }}</p>
        </div>
    </a>
</li>--}}
@php for ($i = 1; $i <= 3; $i++){ @endphp
<li class="template imgbox bg-lighter-grey">
    <a href='@urlTo("templateLibrary.template", ["templateSlug" =>"slug", "templateId" => "1"])'>
    <div class="image img-box__image" style="background: #f0f3f4"
    ></div>
    <div class="text p-6">
        <h3 class="font-cocogoose text-18 font-bold tracking-heading leading-snug text-primary uppercase mb-3">Achieve higher standards</h3>
        <p class="font-din text-18 font-light leading-snug text-secondary">Manage every step from script to screen! You can use this template to plan out scenes, shots, props and actors for your next film project.</p>
    </div>
    </a>
</li>
@php } @endphp