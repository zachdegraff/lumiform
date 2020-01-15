<div class="sm:flex mb-12 lg:mb-40 @if (isset($reversed) && $reversed === true )sm:flex-row-reverse @endif justify-between ">
    <div class="digitise__item--text w-full sm:w-1/2 lg:w-4/12 xl:pr-0 pr-8  flex flex-col justify-center horizontal__section">
        <h3 class="text-center sm:text-left text-38 font-bold font-cocogoose uppercase mb-5 text-{{$headingColor}}">
            {!! $heading !!}
        </h3>
        <p class="text-center sm:text-left text-secondary font-hairline text-30 font-din mb-5 sm:mb-0">
            {!! $text !!}
        </p>
        @if(isset($urlTo))

            <a href="{{route(app()->getLocale().'.'.$urlTo['url'])}}"
               class="flex justify-center sm:justify-start items-center uppercase text-red text-center block text-20 tracking-large my-5 lg:mt-10">
                {!! $urlTo['text'] !!}
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        @endif
        @if(isset($withButton))

            <a href="{{$withButton['url']}}"
               class="w-290 mt-20  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-17 lg:text-20 h-70  rounded-20 items-center justify-center flex"> {!! $withButton['text'] !!}</a>
        @endif
    </div>
    <div class="digitise__item--image   w-7/12 mx-auto">
        @if(isset($srcset))
            <img class="mx-auto" src="{{asset('img/'.$image)}}" alt=""
                 srcset="
                    {{asset('img').'/'.$srcset[0]}},
                    {{asset('img').'/'.$srcset[1]}} 2x"
            >
        @else
            <img src="{{asset('img/'.$image)}}" alt="" class="mx-auto">
        @endif
    </div>
</div>