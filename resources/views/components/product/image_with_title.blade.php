<div class="tool__item w-full sm:w-1/2 lg:w-1/3">
    <h3 class="text-center text-34 font-bold font-cocogoose uppercase mb-10 text-{{$color}}">
        {!! $heading !!}
    </h3>
    <div class="tool__item--img @if (isset($class)) {{$class}} @endif relative">
        <img src="{{asset('img/'.$image)}}" alt="" class="mx-auto">
    </div>
</div>