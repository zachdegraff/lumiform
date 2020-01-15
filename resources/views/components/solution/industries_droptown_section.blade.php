<div class="sm:flex-no-wrap flex-wrap sm:flex-row flex-col flex justify-between dropdown__section">
    <div class="w-full sm:w-5/12 xl:w-3/12">
        <ul class="industries__list">
            @php $i = 0 @endphp
            @foreach($items as $item)

                <li class="list__border @if ($i == 0) active @endif" onclick="openTab(this,event)"
                    data-index="item-{{$i}}">
                    <p class="text-30 font-cocogoose uppercase text-grey-light font-bold flex items-start">
                        <img src="{{asset('img/icons/chevron-right.svg')}}" alt=""
                             class="mr-6 mt-2 dropdown__arrow"> {!! $item['title'] !!}
                    </p>
                    <span class="text-20 font-din font-light tracking-text text-secondary">
                    {!! $item['desc'] !!}
                    </span>
                </li>
                @php $i++ @endphp
            @endforeach
        </ul>

    </div>
    <div class="w-full sm:w-6/12 xl:w-7/12 flex flex-col py-8">
        @php $j = 0 @endphp
        @foreach($items as $image)
            <div class="mx-auto w-0 sm:w-auto">
                <img src="{{asset('img'.'/'.$image['srcset'][0])}}" alt=""
                     srcset="{{asset('img'.'/'.$image['srcset'][0])}},
                    {{asset('img'.'/'.$image['srcset'][1])}} 2x "
                     class="industries__list--image @if ($j == 0) active__image @endif " id="item-{{$j}}">
            </div>
            @php $j++ @endphp
        @endforeach
        @if(isset($features))
            <a href="{{route(app()->getLocale().'.product')}}"
               class="mt-12 font-bold  flex items-center justify-center uppercase text-red text-center block text-20 tracking-heading ">
                {!! $features['text'] !!}
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        @endif
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