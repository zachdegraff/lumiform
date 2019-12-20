@foreach($items as $item)
    <div class="team__item">
        <img src="{{asset('img/'.$item['image'])}}" class="team__image mb-12" alt="">
        <h3 class="text-30 font-cocogoose font-black tracking-large text-grey-light text-center">{{$item['name']}}</h3>
        <a href="{{$item['linkedin']}}" class="block my-6"><img src="{{asset('img/linkedin.svg')}}" alt="" class="mx-auto"></a>
        <p class="text-20 font-din font-light tracking-text leading-snug text-secondary px-4">{!! $item['text'] !!}</p>
    </div>
@endforeach