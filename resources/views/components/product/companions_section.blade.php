<section id="leaders" class=" bg-grey-light">
    <div class="container  mx-auto md:py-24 py-10">
        <h3 class="section__title-large mb-20 text-center">{!! $heading !!}</h3>
        <div class="leader__items flex flex-wrap  justify-between">
            @foreach($icons as $icon)
                <div class="leader__item md:mr-12 flex items-center md:w-auto w-1/4 mr-0 mt-10">
                    <img src="{{asset('img/companions/'.$icon)}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</section>