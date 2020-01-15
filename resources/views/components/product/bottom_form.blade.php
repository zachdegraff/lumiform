<section id="easy" class="pt-8 md:pt-16 xl:pt-32 bg-{{$sectionBg}}">
    <div class="container mx-auto">
        <h3 class="text-white text-50 font-extrabold uppercase font-cocogoose md:mx-auto text-center mb-6 md:mb-12 xl:mb-20 tracking-heading"
        >{!! $heading !!}</h3>
        <div class="easy__content flex justify-between">

            <div class="easy__image w-0 lg:w-3/12 flex justify-center">
                @if(!isset($left))
                    @if(isset($srcset))
                        <img src="{{asset('img/'.$image)}}" alt=""
                             srcset="
                    {{asset('img').'/'.$srcset[0]}},
                    {{asset('img').'/'.$srcset[1]}} 2x"
                        >
                    @else
                        <img src="{{asset($image)}}" alt="">
                    @endif
                @endif
            </div>

            <div class="easy__submit w-full  lg:w-5/12">
                <form action="">
                    <div class="home__banner--email flex flex-col justify-center  md:flex-row  mb-8">

                        <input class="pl-8 w-full md:w-1/2 xxl:w-360  " type="email"
                               placeholder="{{__('Enter e-mail address')}}">
                        <button class=" mt-5 md:mt-0 md:ml-3 bg-{{$buttonBg}} tracking-large font-extrabold text-white uppercase font-cocogoose px-8 text-20 h-70  rounded-20 items-center justify-center flex">@lang('Try for free')</button>
                    </div>
                </form>
                @php $url = '' @endphp
                <div class="banner__signin">
                    <small class="text-20 font-din text-center font-medium block text-white"
                    >We also offer <a href="@urlTo('pricing')" class="font-bold underline"> paid plans </a> with additional features, storage and support.
                    </small>
                </div>
            </div>

            <div class="easy__image w-0 lg:w-3/12 flex justify-center">
                @if(isset($left) && $left === true)
                    @if(isset($srcset))
                        <img src="{{asset('img/'.$image)}}" alt=""
                             srcset="
                    {{asset('img').'/'.$srcset[0]}},
                    {{asset('img').'/'.$srcset[1]}} 2x"
                        >
                    @else
                        <img src="{{asset('img/'.$image)}}" alt="">
                    @endif
                @endif
            </div>

        </div>
    </div>
</section>