<section class="pt-24">
    <div class="container mx-auto case__studies">
        <div class="case__items flex flex-wrap justify-between">
            @foreach($items as $item)
                <div class="case__item flex flex-col mb-24">
                    <img src="{{asset('img/'.$item['srcset'][0])}}" alt=""
                         srcset="{{asset('img/'.$item['srcset'][0])}},
                         {{asset('img/'.$item['srcset'][0])}} 2x"
                         class="w-full mb-10">
                    <h3 class="text-30 font-cocogoose font-black text-grey-light uppercase mb-5">{!! $item['title'] !!}</h3>
                    <p class="font-din font-light text-20 text-secondary mb-5">{!! $item['text'] !!}</p>
                    <a href="{{$item['url']}}"
                       class="flex items-center uppercase text-red text-left block text-17 lg:text-20 tracking-heading mt-auto">
                        {!! $item['moreText'] !!}
                        <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>