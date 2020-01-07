<section id="feedback" class="@if (isset($class)) {{$class}}  @else bg-red-light @endif py-16">
    <div class="container mx-auto flex justify-around flex-row-reverse">
        <div class="w-0 lg:w-3/12">
            <img src="{{asset('img/'.$image)}}" alt="">
        </div>
        <div class="w-full lg:w-6/12  flex flex-col justify-around">
            <p class="font-din font-light text-30 text-secondary mt-5">
                {!! $text !!}
            </p>
            <div class="signature flex items-center">
                <p class="font-din font-light text-20 text-secondary">
                    {!! $position !!}
                </p>
            </div>
        </div>

    </div>
</section>