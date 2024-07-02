@extends('layouts.main')

    @section('content')

    <!-- Hero Start -->
            <div class="hero-window-all flex items-center">
                <div class="w-full flex justify-between items-center px-14 gap-14">

                    <div class="hero-left-window">
                        <h5>Complete tasks, surveys, and offers to earn real money while enjoying the process.</h5>
                        <h1 class="h1">Earn While Having Fun!</h1>
                        <p class="p">
                            Gorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum
                            est a,
                            mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut
                            interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus.
                        </p>
                        <div class="flex items-center gap-4 mt-9">
                            <button class="themebtn">Get Started Now</button>
                            <button class="themebtn-trans">How it works</button>
                        </div>
                    </div>

                    <div class="hero-right-window">
                        <img src="/assets/images/heroImg.webp" alt="">
                    </div>

                </div>
            </div>
            <!-- Hero Start -->

            <!-- AverageNumber Start -->
            <div class="AverageNumber-window-all flex items-center">
                <div class="w-full grid grid-cols-4 px-14">

                    <div class="AverageNumber-box">
                        <h3 class="h3">0h 17m 16s</h3>
                        <p class="p">Average time until user makes first cashout</p>
                    </div>
                    <div class="AverageNumber-box">
                        <h3 class="h3">$27.73</h3>
                        <p class="p">Average money earned by users yesterday</p>
                    </div>
                    <div class="AverageNumber-box">
                        <h3 class="h3">$81,814,720</h3>
                        <p class="p">Total USD earned on Freecash</p>
                    </div>
                    <div class="AverageNumber-box">
                        <img src="/assets/images/avatargroup.webp" class="mb-2" alt="">
                        <h3 class="h3">187k</h3>
                        <p class="p">Active users in the world</p>
                    </div>

                </div>
            </div>
            <!-- AverageNumber End -->

            <!-- Steps Start -->
            <div class="steps-window-all">
                <div class="w-full flex flex-col justify-between items-center px-14 gap-14">

                    <div class="flex justify-between items-end w-full">
                        <h2 class="h2" style="width: 100%; max-width: 1000px;">Want to earn free cash within
                            minutes?<span>Here’s how</span></h2>
                        <button class="themebtn-trans-dark">Start earning now <img src="/assets/icons/endicon.webp"
                                alt=""></button>
                    </div>

                    <div class="w-full grid grid-cols-3 gap-6">
                        <div class="steps-box">

                            <div class="steps-box-first gap-2">
                                <div style="width: 300px; height: 200px;">
                                    <img src="/assets/images/8e45c1dbb54ded96423ae4c29460abdc.png" alt="">
                                </div>
                                <h2>1</h2>
                            </div>

                            <div class="steps-box-second">
                                <h5 class="h5">1. Choose an offer</h5>
                                <p class="p">Take your pick from the tasks on the earn page. We list the best offers
                                    from
                                    companies who
                                    want to advertise their apps, surveys, and products.</p>
                            </div>

                        </div>
                        <div class="steps-box">

                            <div class="steps-box-first gap-2">
                                <div style="width: 300px; height: 200px;">
                                    <img src="/assets/images/76621dd2b35737700ce8e5f15d718c32.png" alt="">
                                </div>
                                <h2>2</h2>
                            </div>

                            <div class="steps-box-second">
                                <h5 class="h5">2. Complete the offer</h5>
                                <p class="p">Most offers are very simple and have already earned money for thousands of
                                    people.
                                    Most offers take around 5-10 minutes to complete.</p>
                            </div>

                        </div>
                        <div class="steps-box">

                            <div class="steps-box-first gap-2">
                                <div style="width: 300px; height: 200px;">
                                    <img src="/assets/images/8b5fae97593a0caea31e7d5d984ab6ef.png" alt="">
                                </div>
                                <h2>3</h2>
                            </div>

                            <div class="steps-box-second">
                                <h5 class="h5">3. Get paid</h5>
                                <p class="p">For each task you complete, you’ll be rewarded with coins: 1000 coins =
                                    $1,00.
                                    Cashout the coins and get your hands on your free cash!</p>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <!-- Steps End -->

            <!-- BestWay Start -->
            <div class="BestWay-window-all">
                <div class="w-full px-14 gap-14">
                    <h2 class="h2">Best ways to earn</h2>

                    <div class="w-full flex justify-between gap-8 mt-[60px]">
                        <div class="bestWay-box w-1/2">
                            <h5 class="h5 medium">Earn extra money in your free time</h5>
                            <p class="p mt-2">Horem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero
                                et
                                velit interdum,
                                ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia
                                nostra,
                                per
                                inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.
                            </p>
                        </div>
                        <div class="bestWay-box w-1/2">
                            <h5 class="h5 medium">Flexible schedule – work when you want</h5>
                            <p class="p mt-2">Horem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero
                                et
                                velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent
                                per
                                conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum
                                lobortis.
                            </p>
                        </div>
                    </div>

                    <div class="w-full flex justify-between gap-8 mt-[60px]">
                        <div class="bestWay-box bestWay-box-3">
                            <h5 class="h5 medium">Choose from a wide variety of fun tasks</h5>
                            <p class="p mt-2">Horem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero
                                et
                                velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent
                                .
                            </p>
                        </div>
                        <div class="bestWay-box bestWay-box-4">
                            <h5 class="h5 medium">Simple and easy-to-use platform</h5>
                            <p class="p mt-2">Horem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero
                                et
                                velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent
                                per
                                conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum
                                lobortis.
                            </p>
                            <button class="themebtn mt-4">Start earning Now</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- BestWay End -->

            <!-- Special Start -->
            <div class="Special-window-all">
                <div class="w-full px-14 gap-14">
                    <h2 class="h2">Best ways to earn</h2>

                    <div class="grid grid-cols-3 gap-10 mt-[60px]">
                        <div class="">
                            <img src="/assets/icons/icons_faqs_ic_refund.webp" alt="">
                            <h5 class="h5 mt-2">Earn badges</h5>
                            <p class="p mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero
                                et
                                velit interdum,
                                ac aliquet odio mattis.
                            </p>
                        </div>
                        <div class="">
                            <img src="/assets/icons/icons_faqs_ic_assurances.webp" alt="">
                            <h5 class="h5 mt-2">Compete on the leaderboard</h5>
                            <p class="p mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero
                                et
                                velit interdum,
                                ac aliquet odio mattis.
                            </p>
                        </div>
                        <div class="">
                            <img src="/assets/icons/icons_faqs_ic_package.webp" alt="">
                            <h5 class="h5 mt-2">Unlock special rewards</h5>
                            <p class="p mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero
                                et
                                velit interdum,
                                ac aliquet odio mattis.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Special End -->

            <!-- About Start -->
            <div class="about-window-all flex justify-between items-center">
                <div class="w-full flex justify-between items-center px-14 gap-14">

                    <div class="about-left-window w-1/2">
                        <h2 class="h2">See what other people have to say about us</h2>
                        <p class="p">
                            Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                            interdum, ac
                            aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos himenaeos.
                        </p>
                        <div class="flex items-center gap-4 mt-8">
                            <button class="themebtn">Start earning Now</button>
                            <button class="themebtn-trans flex">See all reviews on <img class="ml-2"
                                    src="/assets/images/trustpilotlogo.webp" alt=""></button>
                        </div>
                    </div>
                    <div class="about-right-window flex items-center gap-4 w-1/2 min-h-[720px]">
                        <div class="w-1/2 flex flex-col gap-5">
                            <div class="personAbout-window">
                                <p class="p text-white text-sm">
                                    Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent
                                    per
                                    conubia nostra, per inceptos himenaeos.
                                </p>
                                <div class="flex items-center gap-1 mt-3">
                                    <h6>John Doe</h6>
                                    <span>• 2 years ago</span>
                                </div>
                            </div>
                            <div class="personAbout-window">
                                <p class="p text-white text-sm">
                                    Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent
                                    per
                                    conubia nostra, per inceptos himenaeos.
                                </p>
                                <div class="flex items-center gap-1 mt-3">
                                    <h6>John Doe</h6>
                                    <span>• 2 years ago</span>
                                </div>
                            </div>
                            <div class="personAbout-window">
                                <p class="p text-white text-sm">
                                    Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent
                                    per
                                    conubia nostra, per inceptos himenaeos.
                                </p>
                                <div class="flex items-center gap-1 mt-3">
                                    <h6>John Doe</h6>
                                    <span>• 2 years ago</span>
                                </div>
                            </div>
                        </div>

                        <div class="w-1/2 flex flex-col gap-5">
                            <div class="personAbout-window">
                                <p class="p text-white text-sm">
                                    Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent
                                    per
                                    conubia nostra, per inceptos himenaeos.
                                </p>
                                <div class="flex items-center gap-1 mt-3">
                                    <h6>John Doe</h6>
                                    <span>• 2 years ago</span>
                                </div>
                            </div>
                            <div class="personAbout-window">
                                <p class="p text-white text-sm">
                                    Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent
                                    per
                                    conubia nostra, per inceptos himenaeos.
                                </p>
                                <div class="flex items-center gap-1 mt-3">
                                    <h6>John Doe</h6>
                                    <span>• 2 years ago</span>
                                </div>
                            </div>
                            <div class="personAbout-window">
                                <p class="p text-white text-sm">
                                    Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent
                                    per
                                    conubia nostra, per inceptos himenaeos.
                                </p>
                                <div class="flex items-center gap-1 mt-3">
                                    <h6>John Doe</h6>
                                    <span>• 2 years ago</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- About End -->

            <div class="faq-window-all">
                <h2 class="h2">Frequently Asked Questions</h2>
                <div class="mx-auto px-5 max-w-[880px]">

                    <div class="mx-auto mt-8 grid max-w-3xl divide-y divide-neutral-200">
                        <div class="w-full py-5 summary-box">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span>Item 1</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-white">
                                    Donec id justo. Curabitur blandit mollis lacus. Vivamus quis mi. In ut quam vitae
                                    odio
                                    lacinia tincidunt. In consectetuer turpis ut velit.
                                </p>
                            </details>
                        </div>
                        <div class="w-full py-5 summary-box">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span>Item 2</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a 30-day money-back
                                    guarantee for most of its subscription plans. If you are not satisfied with your
                                    subscription within the first 30 days, you can request a full refund. Refunds for
                                    subscriptions that have been active for longer than 30 days may be considered on a
                                    case-by-case basis.
                                </p>
                            </details>
                        </div>
                        <div class="w-full py-5 summary-box">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span>Item 3</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">To cancel your subscription,
                                    you
                                    can
                                    log in to your account and navigate to the subscription management page. From there,
                                    you
                                    should be able to cancel your subscription and stop future billing.
                                </p>
                            </details>
                        </div>
                        <div class="w-full py-5 summary-box">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span>Item 4</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a free trial of our
                                    software
                                    for a limited time. During the trial period, you will have access to a limited set
                                    of
                                    features and functionality, but you will not be charged.
                                </p>
                            </details>
                        </div>
                        <div class="w-full py-5 summary-box">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span>Item 5</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">If you need help with our
                                    platform or
                                    have any other questions, you can contact the company's support team by submitting a
                                    support
                                    request through the website or by emailing support@ourwebsite.com.
                                </p>
                            </details>
                        </div>
                        <div class="w-full py-5 summary-box">
                            <details class="group">
                                <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                    <span>Item 6</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We may offer discounts or
                                    promotions
                                    from time to time. To stay up-to-date on the latest deals and special offers, you
                                    can
                                    sign
                                    up for the company's newsletter or follow it on social media.
                                </p>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- withdraw Start -->
            <div class="withdraw-window-all flex justify-between items-center">
                <div class="w-full flex justify-between items-end px-14 gap-14">

                    <div class="withdraw-left-window w-1/2">
                        <h3 class="h3">Withdraw with all these</h3>
                        <p class="p">
                            Qorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                            interdum, ac
                            aliquet odio mattis. Class aptent taciti sociosqu.
                        </p>
                    </div>

                    <div class="withdraw-right-window flex items-center gap-4 w-1/2">
                        <img src="/assets/images/image2.webp" alt="">
                        <img src="/assets/images/image1.webp" alt="">
                        <img src="/assets/images/image3.webp" alt="">
                        <img src="/assets/images/image4.webp" alt="">
                        <img src="/assets/images/image5.webp" alt="">
                        <img src="/assets/images/image6.webp" alt="">
                        <img src="/assets/images/image7.webp" alt="">
                        <img src="/assets/images/image8.webp" alt="">
                        <img src="/assets/images/image9.webp" alt="">
                        <img src="/assets/images/image10.webp" alt="">
                    </div>

                </div>
            </div>
            <!-- withdraw Start -->

            <!-- Join Start -->
            <div class="Join-window-all w-full flex justify-center items-center px-14">
                <div class="Join-window-box">

                    <h4 class="text-[32px] font-[700] text-center">Join the Fun and Start Earning Today!</h4>
                    <p class="text-center" style="color: rgba(255, 255, 255, 0.72);">Qorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit. Nunc vulputate libero et velit interdum, ac
                        aliquet odio mattis. Class aptent taciti sociosqu.
                    </p>
                    <button class="themebtn-white mt-6">Create your account now</button>

                </div>
            </div>
        <!-- Join End -->

    @endsection