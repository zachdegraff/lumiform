<section  class="bg-white relative py-24 with__border--bottom">
    <div class="container mx-auto">
        <div class="audits-top flex justify-between items-center mb-16">
            <div class="w-4/12">
                <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-{{$color}} mb-10">
                    {!! $heading !!}
                </h2>
                <p class="mt-10 font-din text-left font-light text-secondary text-20 mb-5">
                    {!! $text !!}
                </p>
                <a href="{{$explore['url']}}"
                   class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large">
                    {{$explore['text']}}
                    <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-6">
                </a>
            </div>
            <div class="w-3/5">
                <img src="{{asset('img/'.$image[0])}}" alt="" srcset="{{asset('img/'.$image[0])}},
                {{asset('img/'.$image[1])}} 2x">
            </div>
        </div>
        <div class="desc__bottom flex justify-between">
            <div class="bottom__left w-7/12 flex flex-wrap justify-between">
                @foreach($items as $item)
                    <div class="bottom__item w-6/12 flex justify-start items-center  mb-10 pr-10">
                        <img src="{{'img/'.$item['image']}}" alt="" class="rounded-15 index__image--list" srcset="{{asset('img'.'/'.$item['srcset'][0])}},
                    {{asset('img'.'/'.$item['srcset'][1])}} 2x">
">
                        <span class="ml-5 text-20 font-cocogoose font-medium uppercase text-secondary">{!! $item['text'] !!}</span>
                    </div>
                @endforeach

            </div>
            <div class="cases__bottom--right   rounded-full bg-grey-light">
                <div class="mx-auto max-w-240 h-full flex flex-col justify-center">
                    <p class="font-din text-20 font-light text-primary mb-5">{!! $companion['text'] !!}</p>
                    <span class="text-base grey-bold font-hairline font-din">{!! $companion['info'] !!}</span>
                </div>
            </div>
        </div>
        <a href="{{$template['url']}}"
           class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large">
            {{$template['text']}}
            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
        </a>
    </div>
</section>