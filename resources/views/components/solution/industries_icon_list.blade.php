@foreach($items as $item)
    <div class="w-1/5 flex items-center ml-16 mb-20">
        <img src="{{asset('img/icons/'.$item['icon'])}}" alt="">
        <p class="text-20 tracking-heading uppercase font-medium text-secondary ml-8">{!! $item['text'] !!}</p>
    </div>
@endforeach