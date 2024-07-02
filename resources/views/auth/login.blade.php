@extends('layouts.main')

    @section('content')

        <!-- creditional Start -->
            <div class="creditional-window-all flex justify-center items-center px-14">
                <div class="creditional-window-box w-full max-w-[455px] py-4">

                        @session('status')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ $value }}
                            </div>
                        @endsession

                    <h5 class="h5 medium">Sign in to MyCash</h5>
                    <h6 class="mt-3 mb-4">New user?<a href="/register"> Create an account</a></h6>
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-item">
                        <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-item">
                        <input type="password" name="password" required autocomplete="current-password">
                        <label for="password">Password</label>
                        <img src="/assets/icons/icons_solid_ic_solar_eye_bold.webp" class="absolute right-4 top-4" alt="">
                    </div>

                    <div class="text-right w-full">
                        <a href="#" class="text-sm font-medium primary-clr underline">Forgot password?</a>
                    </div>

                    <button class="themebtn w-full mt-4">Login</button>
            </form>

                    <div class="credentional-or-box my-6">
                        <span class="or-line"></span>
                        <span>OR</span>
                        <span class="or-line"></span>
                    </div>

                    <div class="flex justify-center">
                        <div class="flex items-center gap-4">
                            <a href="#"><img src="/assets/icons/ic_google1.webp" alt=""></a>
                            <a href="#"><img src="/assets/icons/icons_social_ic_facebbook.webp" alt=""></a>
                            <a href="#"><img src="/assets/icons/icons_social_ic_twitter.webp" alt=""></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- creditional End -->
    @endsection