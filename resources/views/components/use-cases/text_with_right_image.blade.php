<div class="audits-top flex mb-32">

    <div class="w-2/5 pr-32">
        <h2 class="font-cocogoose font-bold text-left uppercase text-40 text-{{$color}}">
            {!! $heading !!}
        </h2>
        <p class="mt-10 font-cocogoose text-left text-primary text-20">
            {!! $text !!}
        </p>
        <a href="{{$template['url']}}"
           class="flex items-center uppercase text-red text-center block text-17 lg:text-20 tracking-large my-5 lg:mt-10">
            {!! $template['text'] !!}
            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
        </a>
    </div>
    <div class="w-3/5  border-solid">
        <img src="{{asset('img/'.$image[0])}}" alt="" srcset="{{asset('img'.'/'.$image[0])}},
                    {{asset('img'.'/'.$image[1])}} 2x ">
    </div>
</div>