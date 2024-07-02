<!-- Header Start -->
            <Header class="header flex justify-between items-center">
                <div class="setPadding w-full mx-auto flex justify-between items-center px-14">
                    <div class="logo-container flex justify-between items-center">
                        <img src="/assets/logo.svg" class="m-auto" alt="">
                    </div>
                    <div class="leftmenu-container flex items-center">
                        <a href="/">Home</a>
                        <a href="/offers">Offers</a>
                        <a href="/earnings">Earnings</a>
                        <a href="/rewards">Rewards</a>
                        <a href="/cashout">Cashout</a>
                        <a href="/leaderboard">Leaderboard</a>
                    </div>
                    <div class="rightmenu-container flex justify-end items-center gap-4">
                        @guest
                            <a href="/login"><button class="themebtn-trans">Login</button></a>
                            <a href="/register"><button class="themebtn">Register</button></a>
                        @endguest
                        @auth
                            <div class="rightmenu-container flex justify-end items-center gap-4">
                                <img src="/assets/icons/icons_solid_ic_solar_chat_round_dots_bold.webp" alt="">
                                <img src="/assets/icons/icons_solid_ic_solar_bell_bing_bold.webp" alt="">
                                <div class="header-amount-box ">
                                    <img src="/assets/icons/starticon.webp" alt="">
                                    <span>$12.34</span>
                                </div>
                                <a href="/dashboard">
                                    <div class="userIcon-header-box">
                                        <img src="/assets//icons/avatar.webp" alt="">
                                    </div>
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </Header>
<!-- Header End -->