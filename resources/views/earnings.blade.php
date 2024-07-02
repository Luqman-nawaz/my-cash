@extends('layouts.main')

    @section('content')
                        <!-- Reward Affiliates Start -->
            <div class="">
                <div class="w-full mx-auto px-14 pt-12 pb-4">

                    <h3 class="h3 pb-6">My Profile</h3>

                    <div class="flex mb-8 bg-secondary p-5 rounded-2xl">
                        <div class="w-fit pl-2 pr-6 py-4">
                            <div class="flex gap-3">
                                <div class="w-[64px] h-[64px]">
                                    <img class="w-full h-full" src="./assets/icons/avatar3.webp" alt="">
                                </div>
                                <div class="">
                                    <h5 class="h5">Samantha</h5>
                                    <div class="flex mt-1 gap-5">

                                        <span class="flex items-center p small">
                                            samanthagill@gmail.com
                                            <img class="ml-1" src="./assets/icons/starticon5.webp" alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-4 py-4 border-primary-left border-primary-right">
                            <div class="flex justify-between ">
                                <h5>Level 0</h5>
                                <p class="p small">$0.92 to level up</p>
                            </div>
                            <div class="InviteFriends-box mt-3">
                            </div>
                        </div>
                        <div class="w-full px-4 py-4 border-primary-right">
                            <div class="flex items-center gap-3">
                                <div class="">
                                    <p class="p small">Country</p>
                                    <div class="flex gap-1 mt-2">
                                        <img src="./assets/icons/icons_flag_ic_en.webp" alt="">
                                        <h5>England</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 py-4 border-primary-right">
                            <div class="">
                                <p class="p small">Profile Visibility</p>
                                <div class="themebtn-trans-dark w-fit h-fit mt-2 text-sm p-1">Private</div>
                            </div>
                        </div>
                        <div class="w-full px-4 py-4">
                            <div class="">
                                <p class="p small">Date Joined</p>
                                <h5 class="mt-2">2023-07-27</h5>
                            </div>
                        </div>


                    </div>

                    <div class="bg-secondary rounded-2xl mb-8">
                        <div class="w-full flex items-center justify-between p-5 border-primary-bottom">
                            <div class="flex items-center gap-1">
                                <img src="./assets/icons/icons_duotone_ic_analytics.webp" alt="">
                                <h5 class="h5 mt-[5px]">Statistics</h5>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 p-5">
                            <div class="flex gap-2 pl-4 pr-1 py-4 border-primary-right">
                                <span class="flex w-[56px] h-[56px] p-3 rounded-xl"
                                    style="background-color: rgba(44, 201, 255, 0.08);">
                                    <img src="./assets/icons/icons_solid_i_mingcute_currency_dollar_fill.webp" alt=""
                                        style="filter: drop-shadow(0px 8px 16px var(--primary-24, rgba(44, 201, 255, 0.24)));">
                                </span>
                                <div>
                                    <p class="p small">Completed</p>
                                    <h5 class="h5 medium">2</h5>
                                </div>
                            </div>
                            <div class="flex gap-2 pl-4 pr-2 py-4 border-primary-right">
                                <span class="flex w-[56px] h-[56px] p-3 rounded-xl"
                                    style="background-color: rgba(44, 201, 255, 0.08);">
                                    <img src="./assets/icons/mingcute_wallet-fill.svg" alt=""
                                        style="filter: drop-shadow(0px 8px 16px var(--primary-24, rgba(44, 201, 255, 0.24)));">
                                </span>
                                <div>
                                    <p class="p small">Total Earnings</p>
                                    <h5 class="h5 medium">$0.00</h5>
                                </div>
                            </div>
                            <div class="flex gap-2 pl-4 pr-2 py-4 border-primary-right">
                                <span class="flex w-[56px] h-[56px] p-3 rounded-xl"
                                    style="background-color: rgba(44, 201, 255, 0.08);">
                                    <img src="./assets/icons/ic-solar_users-group-rounded-bold.svg" alt=""
                                        style="filter: drop-shadow(0px 8px 16px var(--primary-24, rgba(44, 201, 255, 0.24)));">
                                </span>
                                <div>
                                    <p class="p small">Users Referred</p>
                                    <h5 class="h5 medium">0</h5>
                                </div>
                            </div>
                            <div class="flex gap-2 pl-4 pr-2 py-4">
                                <span class="flex w-[56px] h-[56px] p-3 rounded-xl"
                                    style="background-color: rgba(44, 201, 255, 0.08);">
                                    <img src="./assets/icons/mingcute_calendar-month-fill.svg" alt=""
                                        style="filter: drop-shadow(0px 8px 16px var(--primary-24, rgba(44, 201, 255, 0.24)));">
                                </span>
                                <div>
                                    <p class="p small">Earnings last 30 days</p>
                                    <h5 class="h5 medium">$0.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="bg-secondary rounded-2xl mb-8">

                        <div class="w-full flex items-center justify-between p-5 border-primary-bottom">
                            <div class="flex items-center gap-1">
                                <img src="./assets/icons/icons_solid_i_mingcute_currency_dollar_fill11.webp" alt="">
                                <h5 class="h5">Earnings</h5>
                            </div>
                        </div>
                        <div class="h-full flex">

                            <div class="tab" style="float: unset; height: auto;">
                                <button class="tablinks active">Offers</button>
                                <button class="tablinks">Surveys</button>
                                <button class="tablinks">Rewards</button>
                            </div>

                            <div class="w-full p-5">

                                <div class="user-head-container flex">
                                    <div class="user-headinner-container user-headinner-container-width-five">Offer Name
                                    </div>
                                    <div class="user-headinner-container user-headinner-container-width-five">Reward
                                    </div>
                                    <div class="user-headinner-container user-headinner-container-width-five">Reward
                                        Status
                                    </div>
                                    <div class="user-headinner-container user-headinner-container-width-five">Offer
                                        Partner</div>
                                    <div class="user-headinner-container user-headinner-container-width-five">Date</div>
                                </div>

                                <div>

                                    <div class="user-content-container flex mb-4">
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center gap-3">
                                            <div class="user-img-div">
                                                <img src="./assets/icons/avatar1.webp" alt="">
                                            </div>
                                            <h5 class="h5 small">Ed Mercer</h5>
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            $0.02
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            <img src="./assets/icons/✳️checkbox.webp" class="mr-1" alt="">
                                            Paid
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            OfferToro
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            10 months ago
                                        </div>
                                    </div>

                                    <div class="user-content-container flex mb-4">
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center gap-3">
                                            <div class="user-img-div">
                                                <img src="./assets/icons/avatar1.webp" alt="">
                                            </div>
                                            <h5 class="h5 small">Ed Mercer</h5>
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            $0.02
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            <img src="./assets/icons/✳️checkbox (1).webp" class="mr-1" alt="">
                                            Paid
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            OfferToro
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            10 months ago
                                        </div>
                                    </div>

                                    <div class="user-content-container flex mb-4">
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center gap-3">
                                            <div class="user-img-div">
                                                <img src="./assets/icons/avatar1.webp" alt="">
                                            </div>
                                            <h5 class="h5 small">Ed Mercer</h5>
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            $0.02
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            <img src="./assets/icons/✳️checkbox.webp" class="mr-1" alt="">
                                            Paid
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            OfferToro
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            10 months ago
                                        </div>
                                    </div>

                                    <div class="user-content-container flex mb-4">
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center gap-3">
                                            <div class="user-img-div">
                                                <img src="./assets/icons/avatar1.webp" alt="">
                                            </div>
                                            <h5 class="h5 small">Ed Mercer</h5>
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            $0.02
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            <img src="./assets/icons/✳️checkbox.webp" class="mr-1" alt="">
                                            Paid
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            OfferToro
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            10 months ago
                                        </div>
                                    </div>

                                    <div class="user-content-container flex mb-4">
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center gap-3">
                                            <div class="user-img-div">
                                                <img src="./assets/icons/avatar1.webp" alt="">
                                            </div>
                                            <h5 class="h5 small">Ed Mercer</h5>
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            $0.02
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            <img src="./assets/icons/✳️checkbox.webp" class="mr-1" alt="">
                                            Paid
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            OfferToro
                                        </div>
                                        <div
                                            class="user-contentinner-container user-contentinner-container-width-five flex items-center">
                                            10 months ago
                                        </div>
                                    </div>


                                </div>

                                <div class="flex justify-center items-center pt-8 mb-6">
                                    <div class="pagination">
                                        <a href="#">&laquo;</a>
                                        <a href="#" class="active">1</a>
                                        <a href="#">2</a>
                                        <a href="#">3</a>
                                        <a href="#">4</a>
                                        <a href="#">5</a>
                                        <a href="#">6</a>
                                        <a href="#">&raquo;</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>
            </div>
            <!-- Reward Affiliates End -->
    @endsection