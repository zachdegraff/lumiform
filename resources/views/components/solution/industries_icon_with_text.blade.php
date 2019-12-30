<div class="flex items-start industry__icons w-3/12" style="width: 100%;max-width: {{$width}}px">
    <img src="{{asset('img').'/'.$icon}}" alt="">
    <div class="ml-10">
        <h5 class="text-20 font-cocogoose font-extrabold tracking-heading text-{{$color}} mb-4 uppercase">{!! $heading !!}</h5>
        <p class="text-20 font-din font-light tracking-text text-secondary">{!! $text !!}</p>
    </div>
</div>