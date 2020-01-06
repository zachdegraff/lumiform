<div class="mx-auto team__item w-full sm:w-1/2 mb-10 px-5 lg:px-0">
    <img src="{{asset('img/'.$image)}}" alt="" class="mb-16 mx-auto lg:mx-0"
         @if(isset($srcset)) srcset="{{asset('img/'.$srcset[0])}}, {{asset('img/'.$srcset[1])}} 2x" @endif >
    <h3 class="font-cocogoose font-black text-{{$color}} uppercase text-15 md:text-38 mb-10">
        {!! $heading !!}
    </h3>
    <p class="font-light font-din text-15 md:text-24 text-secondary">
        {!! $text !!}
    </p>
</div>