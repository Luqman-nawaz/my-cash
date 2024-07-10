@extends('layouts.second')

    @push('css')
        <style>
            .input-fields {
                display: none;
                margin-top: 10px;
            }

            .selected {
                border-radius: var(--radius-12, 12px);
                border: 2px solid var(--main-light-primary, #2CC9FF) !important;
                background: var(--primary-8, rgba(44, 201, 255, 0.08));
            }
        </style>
    @endpush

    @section('content')
            <!-- Comming Soon End -->
            <div class="w-full px-4 py-8">
                <div class="w-full max-w-[335px] mx-auto text-center">
                    <h3 class="h3">Coming Soon!</h3>
                    <p class="p mt-3">We are currently working hard on this page!</p>

                    <img src="/assets/images/illustrations_illustration_coming_soon.webp" class="mt-8" alt="">

                    <div>
                        <div id="clockdiv" class="flex justify-center pt-14 py-5 gap-4">
                            <div>
                                <span class="days text-5xl font-bold" id="day"></span>
                                <span class="text-5xl font-bold">:</span>
                                <div class="smalltext text-sm text-[gray] mt-1">Days</div>
                            </div>
                            <div>
                                <span class="hours text-5xl font-bold" id="hour"></span>
                                <span class="text-5xl font-bold">:</span>
                                <div class="smalltext text-sm text-[gray] mt-1">Hours</div>
                            </div>
                            <div>
                                <span class="minutes text-5xl font-bold" id="minute"></span>
                                <span class="text-5xl font-bold">:</span>
                                <div class="smalltext text-sm text-[gray] mt-1">Minutes</div>
                            </div>
                            <div>
                                <span class="seconds text-5xl font-bold" id="second"></span>
                                <div class="smalltext text-sm text-[gray] mt-1">Seconds</div>
                            </div>
                        </div>
                        <p id="demo"></p>
                    </div>
                    
                </div>
            </div>
            <!-- Comming Soon End -->
    @endsection

    @push('js')
            <script>
                let deadline = new Date(
                    "july 30, 2024 15:37:25"
                ).getTime();

                let x = setInterval(function () {

                    let now = new Date().getTime();

                    let t = deadline - now;

                    let days = Math.floor(
                        t / (1000 * 60 * 60 * 24)
                    );
                    let hours = Math.floor(
                        (t % (1000 * 60 * 60 * 24)) /
                        (1000 * 60 * 60)
                    );
                    let minutes = Math.floor(
                        (t % (1000 * 60 * 60)) / (1000 * 60)
                    );
                    let seconds = Math.floor(
                        (t % (1000 * 60)) / 1000
                    );

                    document.getElementById("day")
                        .innerHTML = days;
                    document.getElementById("hour")
                        .innerHTML = hours;
                    document.getElementById("minute")
                        .innerHTML = minutes;
                    document.getElementById("second")
                        .innerHTML = seconds;

                    if (t < 0) {
                        clearInterval(x);
                        document.getElementById(
                            "demo"
                        ).innerHTML = "TIME UP";
                        document.getElementById(
                            "day"
                        ).innerHTML = "0";
                        document.getElementById(
                            "hour"
                        ).innerHTML = "0";
                        document.getElementById(
                            "minute"
                        ).innerHTML = "0";
                        document.getElementById(
                            "second"
                        ).innerHTML = "0";
                    }
                }, 1000);
            </script>
    @endpush