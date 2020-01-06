<div class="lg:flex  lg:flex-row-reverse mb-5 md:mb-32">
    <div class="issue__item--text w-full lg:w-5/6 flex flex-col justify-center items-end">
        <div class="flex issue__item--bg pt-12 pl-12 lg:max-w-3/4">
            <span class="text-50 md:text-80 text-secondary leading-none font-cocogoose">{{$number}}</span>
            <div class="pl-4 sm:pl-8">
                <h3 class="text-left text-38 font-bold font-cocogoose uppercase mb-5 text-{{$color}}">
                    {!! $heading !!}
                </h3>
                <p class="text-left text-secondary font-hairline text-15 lg:text-30 font-din mb-5 sm:mb-0 font-light">
                    {!! $text !!}
                </p>
            </div>
        </div>
        @if(isset($subItem) && $subItem === true)
            <div class="w-full issue__subitem lg:max-w-3/4 mt-16">
                <h5 class="pl-32 md:pl-40 text-20 font-cocogoose font-extrabold mb-5">@lang('EXAMPLE USE CASES FOR AUTOMATIC ISSUES')</h5>
                <ul>
                    <li class="flex items-center font-light text-20 font-din text-secondary mb-1"><img
                                src="{{asset('img/group-1392.svg')}}" alt=""
                                class="px-12 md:pl-16">@lang('Inform the technician when employee marked Coffee machine as damaged.')
                    </li>
                    <li class="flex items-center font-light text-20 font-din text-secondary mb-1"><img
                                src="{{asset('img/group-1382.svg')}}" alt=""
                                class="px-12 md:pl-16">@lang('Inform the safety officer if first aid kit is marked as incomplete.')
                    </li>
                    <li class="flex items-center font-light text-20 font-din text-secondary mb-1"><img
                                src="{{asset('img/group-1383.svg')}}" alt=""
                                class="px-12 md:pl-16">@lang('Inform the manager if mould infestation is detected during the monthly audit.')
                    </li>
                </ul>
            </div>
        @endif

    </div>
    <div class="digitise__item--image w-2/5 mx-auto">
        <img src="{{asset('img/'.$image)}}" alt="" class="mx-auto" @if(isset($srcset))srcset="{{asset('img/'.$srcset[0])}},{{asset('img/'.$srcset[1])}} 2x" @endif>
    </div>
</div>