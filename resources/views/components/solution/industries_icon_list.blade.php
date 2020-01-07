@foreach($items as $item)
    <div class="w-1/4 xl:w-1/5 flex  xl:items-center ml-8 xl:ml-16 xl:mb-20 mb-10  xl:flex-row flex-col xl:justify-start">
        <img src="{{asset('img/icons/'.$item['icon'])}}" alt="" class="industries__icon ">
        <p class="text-20 tracking-heading uppercase font-medium text-secondary xl:ml-8 text-center xl:text-left text-center">{!! $item['text'] !!}</p>
    </div>
@endforeach