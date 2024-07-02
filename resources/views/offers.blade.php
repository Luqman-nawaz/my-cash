@extends('layouts.main')

    @section('content')
                    <!-- OFFERS start -->
            <div class="offers-parent-container px-14 pt-8 pb-12">
                <div class="offers-head-container flex justify-between items-center pb-8">
                    <h2 class="h2">All Offers</h2>
                    <div class="offer-filters-window flex items-center gap-6">

                        <div class="offer-search-container">
                            <img src="/assets/icons/✳️startadornment.webp" alt="">
                            <input type="text" placeholder="Search offers">
                        </div>

                        <div class="filter-box flex items-center gap-4">
                            <h6>Sort by</h6>
                            <div class="relative inline-flex">
                                <!-- <svg class="w-2 h-2 absolute top-0 right-0 m-6 pointer-events-none"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                        <path
                            d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                            fill="#fff" fill-rule="nonzero" />
                    </svg> -->
                                <select class="rounded-[8px] h-[55px] w-[170px] text-white-600 h-10 pl-5"
                                    style="border: 1px solid rgba(255, 255, 255, 0.32) !important;background-color: #0b1215;">
                                    <option>Most popular</option>
                                    <option>Red</option>
                                    <option>Blue</option>
                                    <option>Yellow</option>
                                    <option>Black</option>
                                    <option>Orange</option>
                                    <option>Purple</option>
                                    <option>Gray</option>
                                    <option>White</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="offers-main-container grid grid-cols-6 gap-6">

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/dd0190c996c4250f6ef602f30ad8af1c.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/8254661c55c2479312c409db797b077a.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/33dd5f534676a3b83ff5a434735ded20.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/077a254d3ad704f1a7137a69d3ef9c2b.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/7f7042b642809cb59bda46afc44e2b9c.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/0220d77ea5b5a450f84e46be7955dd42.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/077a254d3ad704f1a7137a69d3ef9c2b.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/7f7042b642809cb59bda46afc44e2b9c.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/0220d77ea5b5a450f84e46be7955dd42.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/dd0190c996c4250f6ef602f30ad8af1c.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/8254661c55c2479312c409db797b077a.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/33dd5f534676a3b83ff5a434735ded20.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/8254661c55c2479312c409db797b077a.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/33dd5f534676a3b83ff5a434735ded20.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/0220d77ea5b5a450f84e46be7955dd42.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/dd0190c996c4250f6ef602f30ad8af1c.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/077a254d3ad704f1a7137a69d3ef9c2b.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                    <div class="offers-main-box">
                        <div class="offers-img-box">
                            <img src="/assets/images/7f7042b642809cb59bda46afc44e2b9c.jpg" alt="">
                            <div class="imgType-box">
                                <img src="/assets/icons/icons_solid_ic_ant_design_android_filled.webp" alt="">
                            </div>
                        </div>
                        <div class="offers-text-box p-4">
                            <h6>Offer title</h6>
                            <p>Qorem ipsum dolor sit amet, consectetur adipisc...</p>
                            <div class="offer-type-box">
                                <span>Game</span>
                                <h6>$180</h6>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- OFFERS End -->
    @endsection