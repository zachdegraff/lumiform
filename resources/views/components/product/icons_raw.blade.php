<div class="feature__item {{$class}}  text-center sm:mb-2 mb-5">
    @if(isset($url))<a href="{{route(app()->getLocale().'.'.$url)}}"> @endif
        <img src="{{asset('img/'.$image)}}" alt="" class="mb-6 mx-auto icon__item">
        <span class="uppercase text-secondary text-20 tracking-heading font-cocogoose">
    {!! $text !!}
    </span>
        @if(isset($url))</a> @endif
</div>