@foreach($items as $item)
    <div class="w-1/4 lg:w-1/5 flex  xl:items-center ml-4 xl:ml-16 xl:mb-20 mb-12  lg:flex-row flex-col lg:justify-start">
        <img src="{{asset('img/icons/'.$item['icon'])}}" alt="" class="industries__icon ">
        <p class="flex items-center lg:justify-start justify-center text-20 tracking-heading uppercase font-medium text-secondary ml-4 lg:ml-8 text-center lg:text-left ">{!! $item['text'] !!}</p>
    </div>
@endforeach