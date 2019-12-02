
@switch($item->type)

	@case("form")
		@if (count($item->items))
			@foreach ($item->items as $subitem)
				@include("components/template_preview/item", [
					"item" => $subitem,
					"response_sets" => $response_sets,
				])
			@endforeach
		@endif
		@break

	@case("page")
		<div class="page">
			@if ($hasMultiplePages)
				<h2>
					@if (isset($item->title))
						{{ $item->title }}
					@else
						{{ __("(page name not set)") }}
					@endif
				</h2>
			@endif
            @if (count($item->items))
                @foreach ($item->items as $subitem)
                    @include("components/template_preview/item", [
                        "item" => $subitem,
                        "response_sets" => $response_sets,
                    ])
                @endforeach
            @endif
        </div>
		@break

    @case("section")
        <div class="section">
            @if ( ! $item->repeat)
                <h3>
                    @if ($item->title)
                        {{ $item->title }}
                    @else
                        {{ __("(section name not set)") }}
                    @endif
                </h3>
                @if (count($item->items))
                    @foreach ($item->items as $subitem)
                        @include("components/template_preview/item", [
                            "item" => $subitem,
                            "response_sets" => $response_sets,
                        ])
                    @endforeach
                @endif
            @endif
        </div>
		@break

    @case("conditional_section")
        <div class="section conditional">
            @if (count($item->items))
                @foreach ($item->items as $subitem)
                    @include("components/template_preview/item", [
                        "item" => $subitem,
                        "response_sets" => $response_sets,
                    ])
                @endforeach
            @endif
        </div>
		@break

    @case("question")
        <div class="question">
            @include("components/template_preview/question", [
                "item" => $subitem,
                "response_sets" => $response_sets,
            ])
        </div>
		@break

@endswitch

