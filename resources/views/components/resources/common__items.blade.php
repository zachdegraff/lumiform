@foreach($items as $item)
    <div class="common__item flex items-center justify-center relative mb-16">
        <div class="common__circle bg-white rounded-full"></div>
        <div class="common__text h-full">
            <div class="common__image flex items-end">
                <img src="{{asset('img/icons/'.$item['image'])}}" alt="" class="mx-auto">
            </div>
            <h3 class="text-50 font-cocogoose uppercase font-black leading-none text-primary mt-2 mb-1 text-center">{!! $item['title'] !!}</h3>
            <p class="font-din text-20 leading-snug tracking-text text-secondary text-center">{!! $item['text'] !!}</p>
        </div>
    </div>
@endforeach