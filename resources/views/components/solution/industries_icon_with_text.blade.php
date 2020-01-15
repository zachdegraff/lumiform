<div class="flex lg:flex-no-wrap flex-wrap lg:justify-start justify-center items-start industry__icons md:w-3/12 w-1/2 md:mx-0 mx-auto mb-5" style="width: 100%;max-width: {{$width}}px">
    <img src="{{asset('img').'/'.$icon}}" alt="" class="icon__left mb-5">
    <div class="md:ml-10 lg:text-left text-center">
        <h5 class="text-20 font-cocogoose font-extrabold tracking-heading text-{{$color}} md:mb-4 mb-2 uppercase">{!! $heading !!}</h5>
        <p class="text-20 font-din font-light tracking-text text-secondary">{!! $text !!}</p>
    </div>
</div>