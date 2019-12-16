<section id="industries_explore" class="py-32">
    <div class="container mx-auto">
        <h3 class="text-primary text-center uppercase text-40 font-cocogoose tracking-heading font-bold mb-24">
            {!! $heading !!}
        </h3>
        <div class="flex justify-between">
            @php $i = 0 @endphp
            @foreach($items as $item)
                <div >
                    <img src="{{asset('img/'.$item['image'])}}" alt="" srcset="{{asset('img/'.$item['srcset'][0])}},
                {{asset('img/'.$item['srcset'][1])}} 2x" class="rounded-15 industries__cases--img">
                    <a href="{{$item['template']['url']}}"
                       class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large my-5 lg:mt-10">
                        {!! $item['template']['text'] !!}
                        <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                    </a>
                </div>
                @php $i++ @endphp
            @endforeach
        </div>
    </div>
</section>