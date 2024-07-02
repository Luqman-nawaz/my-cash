@extends('layouts.main')

    @section('content')
            
            <!-- LeaderBoard Her Section Start -->
            <div class="LeaderBoard-hero-container pt-16">
                <h2 class="h2 text-center">Weekly Leaderboard</h2>
                <p class="p text-center">
                    Norem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                    aliquet
                    odio mattis.
                </p>

            </div>
            <!-- LeaderBoard Hero Section End -->

            <!-- LeaderBoard End -->
            <div class="LeaderBoard-container w-full py-14 px-4">
                <div class="w-[75%] mx-auto">

                    <div class="endin-container flex items-center justify-between">
                        <div class="endin-user-box flex items-center gap-3">
                            <img src="./assets/icons/avatar2.webp" alt="">
                            <div class="">
                                <h5 class="h5 small">John Doe</h5>
                                <p class="p small">You’re earned $5 today and are ranked at 12,543.</p>
                            </div>
                        </div>
                        <p class="p small flex gap-1 items-center">
                            <img src="./assets/icons/icons_solid_ic_solar_clock_circle_bold.webp" alt="">
                            Ends in11h 39m 38s
                        </p>
                    </div>

                    <div class="user-head-container flex">
                        <div class="user-headinner-container">User Rank</div>
                        <div class="user-headinner-container">Earning</div>
                        <div class="user-headinner-container">Prize</div>
                    </div>

                    <div>
                        <div class="user-content-container flex mb-4">
                            <div class="user-contentinner-container flex items-center gap-3">
                                <span class="red">1</span>
                                <div class="user-img-div">
                                    <img src="./assets/icons/avatar1.webp" alt="">
                                </div>
                                <h5 class="h5 small">Ed Mercer</h5>
                            </div>
                            <div class="user-contentinner-container flex items-center">$205</div>
                            <div class="user-contentinner-container flex items-center">$50</div>
                        </div>
                        <div class="user-content-container flex mb-4">
                            <div class="user-contentinner-container flex items-center gap-3">
                                <span class="yellow">2</span>
                                <div class="user-img-div">
                                    <img src="./assets/icons/avatar1.webp" alt="">
                                </div>
                                <h5 class="h5 small">Natasha Roman</h5>
                            </div>
                            <div class="user-contentinner-container flex items-center">$205</div>
                            <div class="user-contentinner-container flex items-center">$50</div>
                        </div>
                        <div class="user-content-container flex mb-4">
                            <div class="user-contentinner-container flex items-center gap-3">
                                <span class="green">3</span>
                                <div class="user-img-div">
                                    <img src="./assets/icons/avatar1.webp" alt="">
                                </div>
                                <h5 class="h5 small">Jone Lamar</h5>
                            </div>
                            <div class="user-contentinner-container flex items-center">$205</div>
                            <div class="user-contentinner-container flex items-center">$50</div>
                        </div>
                        <div class="user-content-container flex mb-4">
                            <div class="user-contentinner-container flex items-center gap-3">
                                <span class="blue">4</span>
                                <div class="user-img-div">
                                    <img src="./assets/icons/avatar1.webp" alt="">
                                </div>
                                <h5 class="h5 small">Jone Lamar</h5>
                            </div>
                            <div class="user-contentinner-container flex items-center">$205</div>
                            <div class="user-contentinner-container flex items-center">$50</div>
                        </div>
                    </div>

                    <div class="flex justify-center items-center pt-8">
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
            <!-- LeaderBoard End -->
    @endsection