<div id="signUp" class="modal">

    <div class="modal-content">
        <div class="bg-white px-10 pt-10 pb-12">
            <div class="modal-header  flex justify-center mb-6">
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>
            <div class="modal-body">
                <h2 class="font-cocogoose text-20 font-normal text-secondary tracking-heading leading-snug text-center uppercase mb-16">
                    @lang('Sign In')
                </h2>
                <form action="" id="loginForm">
                    <div class="input__raw flex justify-between">
                        <div class="input__group mb-4">
                            <label for="fName"
                                   class="font-din font-light text-20 text-secondary capitalize w-full mb-2 leading-snug tracking-text">
                                @lang('First name')
                            </label>
                            <input type="text" id="fName" name="f_name"
                                   class="pl-10 w-full text-20 font-din text-secondary mt-2">
                        </div>
                        <div class="input__group mb-4">
                            <label for="lName"
                                   class="font-din font-light text-20 text-secondary capitalize w-full mb-2 leading-snug tracking-text">
                                @lang('Last name')
                            </label>
                            <input type="text" id="lName" name="l_name"
                                   class="pl-10 w-full text-20 font-din text-secondary mt-2">
                        </div>
                    </div>
                    <div class="input__group mb-4">
                        <label for="email"
                               class="font-din font-light text-20 text-secondary capitalize w-full mb-2 leading-snug tracking-text">
                            @lang('Email')
                        </label>
                        <input type="email" id="email" name="email"
                               class="pl-10 w-full text-20 font-din text-secondary mt-2">
                    </div>
                    <div class="input__group mb-4">
                        <label for="password"
                               class="font-din font-light text-20 text-secondary capitalize w-full mb-2 leading-snug tracking-text">
                            @lang('Create a password')
                        </label>
                        <input type="password" id="password" name="password"
                               class="pl-10 w-full text-20 font-din text-secondary mt-2">
                    </div>
                    <div class="input__group mt-12 text-center">
                        <button class="font-black  bg-red text-white uppercase font-cocogoose text-20  leading-snug px-12 py-5 rounded-20 tracking-large ">
                            @lang('Sign up for FREE')
                        </button>
                    </div>
                    <div class="input__group text-center">
                        <button class="font-black mt-6 bg-red text-white uppercase font-cocogoose text-20  leading-snug px-12 py-5 rounded-20 tracking-large ">
                            @lang('Sign up with Google')
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer py-5">
            <p class="font-din text-white font-light text-20 text-center tracking-text">@lang('By creating an account, you agree the Terms of Service.')</p>
            <p class="font-din text-white font-light text-20 text-center tracking-text">
                @lang('Already using Lumiform?    <a href="javascript:void(0)" class="ml-3 sign-in font-black">Sign in</a>')
            </p>
        </div>
    </div>

</div>
