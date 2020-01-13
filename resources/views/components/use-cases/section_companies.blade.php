<section class="pt-16 pb-10 @if(isset($bgColor)) bg-{{$bgColor}} @endif">
<div class="container mx-auto">
    <h4 class="xl:mb-10 mb-3 text-center @if(isset($fontSize)) {{$fontSize}} @else text-38 @endif font-normal font-cocogoose uppercase text-grey-bold">
        @lang('TRUSTED BY FORWARD-THINKING COMPANIES OF ALL SHAPES AND SIZES')
    </h4>
    <div class="lg:flex-no-wrap flex-wrap flex justify-between items-center">
        <div class="max-h-120 w-1/5 lg:w-auto">
            <img src="{{asset('img/companions/kitchentown.png')}}" alt=""
                 srcset="{{asset('img/companions/kitchentown.png')}}, {{asset('img/companions/kitchentown@2x.png')}} 2x">
        </div>
        <div class="max-h-120 w-1/5 lg:w-auto">
            <img src="{{asset('img/companions/burgerista.png')}}" alt=""
                 srcset="{{asset('img/companions/burgerista.png')}}, {{asset('img/companions/burgerista@2x.png')}} 2x">
        </div>
        <div class="max-h-120 w-1/5 lg:w-auto">
            <img src="{{asset('img/companions/beumer.svg')}}" alt=""
                 srcset="{{asset('img/companions/beumer.png')}}, {{asset('img/companions/beumer@2x.png')}} 2x">
        </div>
        <div class="max-h-120 w-1/5 lg:w-auto">
            <img src="{{asset('img/companions/okin.svg')}}" alt=""
                 srcset="{{asset('img/companions/okin.png')}}, {{asset('img/companions/okin@2x.png')}} 2x">
        </div>
        <div class="max-h-120 w-1/5 lg:w-auto">
            <img src="{{asset('img/companions/elen.svg')}}" alt=""
                 srcset="{{asset('img/companions/elen.png')}}, {{asset('img/companions/elen@2x.png')}} 2x">
        </div>
        <div class="max-h-120 w-1/5 lg:w-auto">
            <img src="{{asset('img/companions/myGoodness.svg')}}" alt="">
        </div>
        <div class="max-h-120 w-1/5 lg:w-auto">
            <img src="{{asset('img/companions/nordsee.svg')}}" alt="">
        </div>
        <div class="max-h-120">
            <img src="{{asset('img/companions/curry.svg')}}" alt=""
                 srcset="{{asset('img/companions/curry.png')}}, {{asset('img/companions/curry@2x.png')}} 2x">
        </div>
        <div class="max-h-120 w-1/5 lg:w-auto">
            <img src="{{asset('img/companions/pizza-hut.svg')}}" alt=""
                 srcset="{{asset('img/companions/pizza-hut.png')}}, {{asset('img/companions/pizza-hut@2x.png')}} 2x">
        </div>
    </div>
</div>
</section>