<section id="industries_explore" class="py-16 lg:py-32">
    <div class="container mx-auto">
        <h3 class="text-primary text-center uppercase text-50 font-cocogoose tracking-heading font-bold mb-10 lg:mb-24">
            {!! $heading !!}
        </h3>
        <div class="flex justify-between sm:flex-no-wrap flex-wrap">
            @php $i = 0 @endphp
            @foreach($items as $item)
                <div class="w-10/12 mx-auto sm:mx-0 sm:w-5/12 xxl:w-auto sm:mb-0 mb-8">
                    <img src="{{asset('img/'.$item['image'])}}" alt="" srcset="{{asset('img/'.$item['srcset'][0])}},
                {{asset('img/'.$item['srcset'][1])}} 2x" class="rounded-15 industries__cases--img">
                    <a href="{{$item['template']['url']}}"
                       class="flex items-center uppercase text-red text-center block text-20 tracking-large my-5 lg:mt-10 ml-2">
                        {!! $item['template']['text'] !!}
                        <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                    </a>
                </div>
                @php $i++ @endphp
            @endforeach
        </div>
    </div>
</section>