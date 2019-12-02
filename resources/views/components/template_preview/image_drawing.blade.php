@if ($drawing && $image)
    <img
        style="
                background-image: url({{ $image }});
                background-size: cover;
                background-repeat: no-repeat;
                margin-bottom: 10px;
                "
        src="{{ $drawing }}"
    />
@elseif ($image)
    <img
        style=" margin-bottom: 10px;"
        src="{{ $image }}"
    />
@elseif ($drawing)
    <img
        style=" margin-bottom: 10px;"
        src="{{ $drawing }}"
    />
@endif
