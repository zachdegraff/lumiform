<div class="flex justify-between">
    <div class="w-3/12">
        <ul class="industries__list">
            @php $i = 0 @endphp
            @foreach($items as $item)

                <li class="list__border @if ($i == 0) active @endif">
                    <p class="text-30 font-cocogoose uppercase text-grey-light font-bold flex items-center">
                        <img src="{{asset('img/icons/chevron-right.svg')}}" alt="" class="mr-6"> {!! $item['title'] !!}
                    </p>
                    <span class="text-20 font-din font-light tracking-text text-secondary">
                    {!! $item['desc'] !!}
                    </span>
                </li>
                @php $i++ @endphp
            @endforeach
        </ul>

    </div>
    <div class="w-5/12">
        <img src="{{asset('img'.'/'.$image)}}" alt=""
             srcset="{{asset('img'.'/'.$srcset[0])}}
                     {{asset('img'.'/'.$srcset[1])}}
                     "
        >
    </div>
</div>