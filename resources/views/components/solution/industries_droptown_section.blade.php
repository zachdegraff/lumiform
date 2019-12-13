<div class="flex justify-between">
    <div class="w-3/12">
        <ul class="industries__list">
            @php $i = 0 @endphp
            @foreach($items as $item)

                <li class="list__border @if ($i == 0) active @endif" onclick="openTab(this,event)">
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
        <img src="{{asset('img'.'/'.$image)}}" alt=""
             srcset="{{asset('img'.'/'.$srcset[0])}},
                    {{asset('img'.'/'.$srcset[1])}} 2x ">
    </div>
</div>
<script>
    function openTab(target,event) {

        console.log(this,event)
        let items = document.querySelectorAll('.list__border');
        items.forEach(function (item) {
            console.log(item)
            item.classList.remove('active')
        })

        target.classList.add('active')
    }
</script>