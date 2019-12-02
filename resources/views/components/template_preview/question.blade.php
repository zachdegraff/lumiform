<h4>
    @if ($item->title)
        <span class="whitespace-pre-line ">{{ $item->title }}</span>
    @else
        {{ __("(check name not set)") }}
    @endif
</h4>

<div class="response">
@switch($item->response_type)
    @case("text")
        <textarea></textarea>
        @break

    @case("number")
        <input type="number" />
        @break

    @case("datetime")
        <input type="datetime" />
        @break

    @case("checkbox")
        <input type="checkbox" />
        @break

    @case("photo")
        <button>@lang('Add Photo')</button>
        @break

    @case("instruction")

        @break

    @case("list")

        @php
            foreach ($response_sets as $set) {
                if ($set->uuid === $item->params->response_set) {
                    $response_set = $set;
                    break;
                }
            }
        @endphp

        @if (isset($response_set->type) && $response_set->type === "dropdown")
            <select>
                @foreach($response_set->responses as $response)
                    <option>{{ $response->title}}</option>
                @endforeach
            </select>
        @else
            @foreach($response_set->responses as $response)
                <button
                    class="list-response"
                    style="
                        color: {{ $response->color }};
                        background-color: {{ App\Color::lighten($response->color) }};
                        border-color: {{ $response->color }}
                    ">
                        {{ $response->title }}
                </button>
            @endforeach
        @endif
        @break

    @case("annotation")
        @if (isset($item->responded))
            @include('components/template_preview/image_drawing', [
                'image' => $item->params->image,
                'drawing' => isset($item->response->drawing) ? $item->response->drawing : null,
            ])
        @endif
        @break

    @case("photo")
        @if (isset($item->responded))
            @if (is_array($item->response))
                @foreach($item->response as $res)
                    @include('components/template_preview/image_drawing', [
                        'image' => $res->image,
                        'drawing' => isset($res->drawing) ? $res->drawing : null,
                    ])
                @endforeach
            @else
                @include('components/template_preview/image_drawing', [
                    'image' => $item->response->image,
                    'drawing' => isset($item->response->drawing) ? $item->response->drawing : null,
                ])
            @endif
        @endif
        @break

    @case("signature")
        @include('components/template_preview/image_drawing', [
            'image' => null,
            'drawing' => $item->response->drawing,
        ])
        @break

@endswitch


</div>

