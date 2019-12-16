<section class="py-32 bg-grey-light">
    <div class="container mx-auto">
        <h3 class="text-primary text-center uppercase text-40 font-cocogoose tracking-heading font-bold mb-6">
            {!! $heading !!}
        </h3>
        <p class="font-din font-light text-30 tracking-text text-secondary text-center mb-24">
            {!! $text !!}
        </p>
        <div class="desc__bottom flex justify-around">
            <div class="bottom__left w-5/12 flex flex-wrap justify-between">
                @foreach($items as $item)
                    <div class="bottom__item w-5/12  mb-10">
                        <img src="{{asset('img/'.$item['image'])}}" alt="" class="w-230 mb-3 rounded-15" srcset="{{asset('img'.'/'.$item['srcset'][0])}},
                    {{asset('img'.'/'.$item['srcset'][1])}} 2x ">
                        <span class="text-20 font-cocogoose font-medium uppercase text-secondary">{!! $item['text'] !!}</span>
                    </div>
                @endforeach

            </div>
            <div class="bottom__right w-6/12 ">
                <div class="mx-auto  h-full flex flex-col justify-center items-center ">
                    <img src="{{asset('img/'.$image)}}" alt="">
                    <a href="{{$template['url']}}"
                       class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large my-5 lg:mt-10">
                        {!! $template['text'] !!}
                        <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>