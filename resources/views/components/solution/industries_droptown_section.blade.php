<div class="flex justify-between">
    <div class="w-3/12">
        <ul class="industries__list">
            @php $i = 0 @endphp
            @foreach($items as $item)

                <li class="list__border @if ($i == 0) active @endif" onclick="openTab(this,event)"
                    data-index="item-{{$i}}">
                    <p class="text-30 font-cocogoose uppercase text-grey-light font-bold flex items-start">
                        <img src="{{asset('img/icons/chevron-right.svg')}}" alt=""
                             class="mr-6 mt-4"> {!! $item['title'] !!}
                    </p>
                    <span class="text-20 font-din font-light tracking-text text-secondary">
                    {!! $item['desc'] !!}
                    </span>
                </li>
                @php $i++ @endphp
            @endforeach
        </ul>

    </div>
    <div class="w-7/12 flex flex-col py-8">
        @php $j = 0 @endphp
        @foreach($items as $image)
            <div class="mx-auto">
                <img src="{{asset('img'.'/'.$image['srcset'][0])}}" alt=""
                     srcset="{{asset('img'.'/'.$image['srcset'][0])}},
                    {{asset('img'.'/'.$image['srcset'][1])}} 2x "
                     class="industries__list--image @if ($j == 0) active__image @endif " id="item-{{$j}}">
            </div>
            @php $j++ @endphp
        @endforeach
        <a href="{{$features['url']}}"
           class="@if (count($items) < 5)mt-32 @else mt-auto @endif flex items-center justify-center uppercase text-red text-center block text-17 lg:text-20 tracking-heading ">
            {!! $features['text'] !!}
            <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
        </a>
    </div>
</div>
<script>
    function openTab(target, event) {

        let items = document.querySelectorAll('.list__border');
        let images = document.querySelectorAll('.industries__list--image');
        items.forEach(function (item) {
            console.log(item);
            item.classList.remove('active')
        });
        let dataId = target.dataset.index;
        images.forEach(function (image) {
            image.classList.remove('active__image')
        });
        let targetImage = document.getElementById(dataId);
        targetImage.classList.add('active__image');
        target.classList.add('active')
    }
</script>