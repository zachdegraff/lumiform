<div class="flag__block w-280 h-280 rounded-full flex flex-col justify-center items-center bg-white">
    <img src="{{'img/flags/'.$image.'.png'}}" alt=""
         srcset="
                    {{asset('img/flags').'/'.$image.'.png'}},
                     {{asset('img/flags').'/'.$image.'@2x.png'}} 2x"
    >
    <h4 class="text-{{$color}} text-30 font-cocogoose font-extrabold mt-8 uppercase">{{$text}}</h4>
</div>