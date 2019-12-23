<div class="banner__submit">
    <form action=""
          class="mb-10 flex flex-col md:flex-row items-center md:justify-center lg:flex-none lg:justify-start">
        <input type="email" class="w-full sm:w-360 pl-8 h-50 xxl:h-70 rounded-20"
               placeholder="@lang('Enter e-mail address')">
        <button class="font-black  mt-5  md:mt-0  xxl:ml-2 bg-red text-white uppercase font-cocogoose text-20  h-50 xxl:h-70 leading-snug px-8 rounded-20 tracking-large">
            @if(isset($buttonText))
                @lang($buttonText)
            @else
                @lang('Get Lumiform FREE')
            @endif
        </button>
    </form>
    <div class="banner__signin text-center lg:text-left">
        <small class="banner__small-text font-light">@lang('Already using Lumiform?') <a
                    href="" class="font-semibold"> @lang('Sign in')</a>
        </small>
    </div>
</div>
