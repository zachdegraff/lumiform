<div class="flex justify-between">
    <div class="w-3/12">
        <ul class="industries__list">
            @php $i = 0 @endphp
            @foreach($items as $item)

                <li class="list__border @if ($i == 0) active @endif" onclick="openTab(this,event)"
                    data-index="item-{{$i}}">
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
    <div class="w-6/12">
        @php $j = 0 @endphp
        @foreach($items as $image)
            <img src="{{asset('img'.'/'.$image['srcset'][0])}}" alt=""
                 srcset="{{asset('img'.'/'.$image['srcset'][0])}},
                    {{asset('img'.'/'.$image['srcset'][1])}} 2x " class="industries__list--image @if ($j == 0) active__image @endif" id="item-{{$j}}">
            @php $j++ @endphp
        @endforeach
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