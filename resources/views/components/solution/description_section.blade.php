<section class="py-12 lg:py-32 solution__section">
    <div class="container mx-auto">
        <div class="desc__top mb-12 md:mb-32">
            <p class="font-din text-30 font-light text-secondary sm:text-left text-center">
                {!! $mainText !!}
            </p>
            <a href="{{route(app()->getLocale().'.'.$explore['url'])}}"
               class="flex items-center uppercase text-red text-center block text-20 tracking-large mt-5 lg:mt-12 sm:justify-start justify-center">
                {!! $explore['text'] !!}
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>

        </div>
        <div class="desc__bottom flex justify-between lg:flex-no-wrap flex-wrap">
            <div class="bottom__left w-6/12 flex flex-wrap justify-between ">
                @foreach($items as $item)
                    <div class="bottom__item w-9/12 sm:mx-0 mx-auto sm:w-6/12 flex sm:flex-no-wrap flex-wrap justify-start items-center  mb-10 lg:pr-5">
                        <img src="{{'img/'.$item['image']}}" alt="" class="rounded-15 index__image--list sm:w-auto w-full" srcset="{{asset('img'.'/'.$item['srcset'][0])}},
                    {{asset('img'.'/'.$item['srcset'][1])}} 2x
">
                        <span class="ml-5 text-20 font-cocogoose font-medium uppercase text-secondary">{!! $item['text'] !!}</span>
                    </div>
                @endforeach

            </div>
            <div class="bottom__right w-4/12 mx-auto rounded-full bg-grey-opacity">
                <div class="mx-auto max-w-370 h-full flex flex-col justify-center sm:py-16">
                    <p class="font-din text-20 font-light text-primary mb-10">{!! $companion['text'] !!}</p>
                    <span class="text-base grey-bold font-hairline font-din ">{!! $companion['info'] !!}</span>
                </div>
            </div>
        </div>
        <a href="{{$template['url']}}"
           class="flex items-center lg:justify-start justify-center uppercase text-red text-center block text-20 tracking-large my-5 mt-10">
            {!! $template['text'] !!}
            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
        </a>
    </div>
</section>