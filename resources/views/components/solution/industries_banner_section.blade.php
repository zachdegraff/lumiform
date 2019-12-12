<section id="intusry__banner"
         style="background: url({{asset('img/'.$imageBg)}}) no-repeat; background-size: cover"
         class="pt-64 pb-32"
>
    <div class="container mx-auto">
        <div class="w-8/12 mx-auto">
            <h1 class="tracking-normal leading-heading text-center text-40 xxl:text-70 mb-8 font-cocogoose uppercase font-extrabold text-white">
                {!! $heading !!}
            </h1>
            <p class="text-30 font-din font-medium text-white text-center tracking-text mb-16">
                {!! $text !!}
            </p>
            <a href="#"
               class="font-extrabold w-215 mt-5 flex justify-center items-center mx-auto bg-red text-white uppercase font-cocogoose text-17 lg:text-xl  h-50 xxl:h-70 px-8 rounded-20">@lang('TRY FOR FREE')</a>
        </div>
    </div>

</section>