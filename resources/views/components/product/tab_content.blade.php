<div class="content__item @if ($isActive) active @endif flex justify-between items-center">
    <div class="w-5/12 flex items-start  flex-col">
        <div >
            <h3 class="mb-10 font-bold md:text-25 lg:text-38 tracking-text leading-none uppercase font-cocogoose text-{{$textColor}}">
                {!! $heading !!}
            </h3>
            <p class="text-left font-light font-din md:text-20 lg:text-30 text-secondary tracking-text">
                {!! $text !!}
            </p>

        </div>
        <a href="{{route(app()->getLocale().'.'.$urlTo)}}"
           class="flex items-center  uppercase text-red text-center block text-17 lg:text-20 tracking-large  mt-10 ">
           {!! $discoverText !!}
            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
        </a>

    </div>

    <div class="w-0 sm:w-1/5 lg:w-6/12 tab__content--img flex justify-end">
        <img src="{{asset($image)}}" alt="" class="h-full w-auto mx-auto" @if(isset($srcset)) srcset="{{asset($srcset[0])}},{{asset($srcset[1])}} 2x" @endif>
    </div>
</div>