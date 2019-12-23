<section class="py-32">
    <div class="container mx-auto">
        <h2 class="text-50 font-cocogoose font-black leading-none text-gold uppercase tracking-text text-center mb-26">
            @lang($heading)
        </h2>
        <div class="flex justify-between">
            @foreach($sections as $section)
                <div class="sensor__faq__items">
                    @foreach($section as $item)
                        <div class=" sensor__faq__item mb-12">
                            <h3 class="text-grey-bold text-20 uppercase font-cocogoose text-black leading-snug tracking-heading mb-5">
                                {!! $item['title'] !!}
                            </h3>
                            <p class="font-din text-20 font-light text-secondary leading-snug tracking-text ">{!! $item['text'] !!}</p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>