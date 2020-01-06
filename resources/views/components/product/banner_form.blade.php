<div class="banner__submit">
    <form action=""
          id="subscribe"
          class="mb-10 flex flex-col md:flex-row items-center justify-center lg:justify-start lg:flex-none ">
        <input type="email" class="w-full md:w-1/2 xxl:w-360 pl-8 h-70 rounded-20"
               placeholder="@lang('Enter e-mail address')">
        <button class="font-black w-full  md:w-auto mt-5  md:mt-0 sm:ml-2 bg-red text-white uppercase font-cocogoose text-20 h-70 leading-snug sm:px-4 xxl:px-8 rounded-20 tracking-large">
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
