<div class="w-3/5 sm:w-2/5 lg:w-1/4 lg:mb-0 mb-10 lg:pl-0 md:pl-10 pl-0">
    <p class="font-extrabold text-30 font-cocogoose text-{{$color}} mb-8 xl:mb-12 uppercase">{!! $text !!}</p>
    <ul class="with__check--bg">
        @foreach($items as $item)
            <li class="text-20 font-light font-din text-secondary text-left mb-5">
                {!! $item !!}
            </li>
        @endforeach
    </ul>
</div>