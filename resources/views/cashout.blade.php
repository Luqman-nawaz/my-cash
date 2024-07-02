@extends('layouts.main')

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
                        <!-- Cashout start -->
            <div class="cashout-window-all">
                <div class="w-full mx-auto py-14 px-14">
                    <h3 class="h3">Cashout</h3>
                    <div class="paymethod-window-all">

                        <div class="paymethod-window-head flex items-center p-5 gap-2">
                            <img src="./assets/icons/icons_solid_solid_paymentmethod.webp" alt="">
                            <h6>Payment Methods</h6>
                        </div>

                        <div class="paymethod-window-center p-5">

                            <div class="paymethod-window-center-head">
                                <div class="paymethod-window-box cursor-pointer" data-method="paypal">
                                    <span>
                                        <img src="./assets/icons/icons_payment_logos_paypal.webp" alt="Paypal">
                                    </span>
                                    <h5>Paypal</h5>
                                </div>
                                <div class="paymethod-window-box cursor-pointer" data-method="bitcoin">
                                    <span>
                                        <img src="./assets/icons/icons_payment_logos_bitcoin.webp" alt="Bitcoin">
                                    </span>
                                    <h5>Bitcoin</h5>
                                </div>
                                <div class="paymethod-window-box cursor-pointer" data-method="dogecoin">
                                    <span>
                                        <img src="./assets/icons/icons_payment_logos_dogecoin.webp" alt="Dogecoin">
                                    </span>
                                    <h5>Dogecoin</h5>
                                </div>
                                <div class="paymethod-window-box cursor-pointer" data-method="ethereum">
                                    <span>
                                        <img src="./assets/icons/icons_payment_logos_ethereum.webp" alt="Ethereum">
                                    </span>
                                    <h5>Ethereum</h5>
                                </div>
                                <div class="paymethod-window-box cursor-pointer" data-method="litecoin">
                                    <span>
                                        <img src="./assets/icons/icons_payment_logos_litecoin.webp" alt="Litecoin">
                                    </span>
                                    <h5>Litecoin</h5>
                                </div>
                            </div>
                            <div>
                                <div class="input-fields" id="paypal-fields">
                                    <div class="flex items-center gap-1 py-3">
                                        <img src="./assets/icons/icons_solid_ic_eva_info_fill.webp" alt="">
                                        <p class="p text-sm font-medium">You’ve selected Paypal to withdraw money.</p>
                                    </div>
                                    <div class="grid grid-cols-2 gap-8 mt-6">
                                        <div>
                                            <div class="flex flex-col">
                                                <label for="">Email</label>
                                                <input type="text" placeholder="johndoe@gmail.com">
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-center gap-1 py-1">
                                                    <img src="./assets/icons/icons_solid_ic_eva_info_fill.webp"
                                                        class="w-[16px]" alt="">
                                                    <p class="p text-sm font-medium mt-1">You’ve selected Paypal to
                                                        withdraw
                                                        money.
                                                    </p>
                                                </div>
                                                <span class="remove">Remove account</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class=" relative flex flex-col">
                                                <label for="">Amount in USD</label>
                                                <input type="text" placeholder="0">
                                                <span class="widthall absolute right-[10px] top-[32px]">Withdraw
                                                    all</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-center gap-1 py-1">
                                                    <img src="./assets/icons/icons_solid_ic_eva_info_fill.webp"
                                                        class="w-[16px]" alt="">
                                                    <p class="p text-sm font-medium mt-1">Minimum is $0.50
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-9">
                                        <div class="w-full max-w-[240px]">
                                            <span class="flex justify-between">
                                                <h5 class="h5">You receive(USD)</h5>
                                                <h5 class="h5">$0</h5>
                                            </span>
                                            <span class="flex justify-between pt-2">
                                                <p class="p">Fee</p>
                                                <p class="p">0</p>
                                            </span>
                                        </div>
                                        <button class="themebtn flex items-center gap-1 w-full max-w-[320px]">
                                            Withdraw
                                            amount</button>
                                    </div>
                                </div>
                                <div class="input-fields" id="bitcoin-fields">
                                    <div class="flex items-center gap-1 py-3">
                                        <img src="./assets/icons/icons_solid_ic_eva_info_fill.webp" alt="">
                                        <p class="p text-sm font-medium">You’ve selected Bitcoin to withdraw money.</p>
                                    </div>
                                    <div class="grid grid-cols-2 gap-8 mt-6">
                                        <div>
                                            <div class="flex flex-col">
                                                <label for="">Bitcoin Address</label>
                                                <input type="text" placeholder="Enter bitcoin address">
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-center gap-1 py-1">
                                                    <img src="./assets/icons/icons_solid_ic_eva_info_fill.webp"
                                                        class="w-[16px]" alt="">
                                                    <p class="p text-sm font-medium mt-1">The Airtm Email Address where
                                                        the
                                                        money will be sent to.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between items-end">
                                                <div class=" relative flex flex-col">
                                                    <label for="">Amount in USD</label>
                                                    <input type="text" placeholder="0" style="width: 100%;">
                                                    <span class="widthall absolute right-[10px] top-[32px]">Withdraw
                                                        all</span>
                                                </div>
                                                <div class="total-coin-price">
                                                    $69,697.875 · BTC rate
                                                </div>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-center gap-1 py-1">
                                                    <img src="./assets/icons/icons_solid_ic_eva_info_fill.webp"
                                                        class="w-[16px]" alt="">
                                                    <p class="p text-sm font-medium mt-1">Minimum is $0.50
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center mt-9">
                                        <div class="w-full max-w-[240px]">
                                            <span class="flex justify-between">
                                                <h5 class="h5">You receive(USD)</h5>
                                                <h5 class="h5">$0</h5>
                                            </span>
                                            <span class="flex justify-between pt-2">
                                                <p class="p">Fee</p>
                                                <p class="p">0</p>
                                            </span>
                                        </div>
                                        <button class="themebtn flex items-center gap-1 w-full max-w-[320px]">
                                            Withdraw
                                            amount</button>
                                    </div>
                                </div>

                                <div class="input-fields" id="dogecoin-fields">
                                    <h3>Dogecoin Inputs</h3>
                                    <input type="text" placeholder="Wallet Address">
                                    <input type="text" placeholder="Amount">
                                </div>
                                <div class="input-fields" id="ethereum-fields">
                                    <h3>Ethereum Inputs</h3>
                                    <input type="text" placeholder="Wallet Address">
                                    <input type="text" placeholder="Amount">
                                </div>
                                <div class="input-fields" id="litecoin-fields">
                                    <h3>Litecoin Inputs</h3>
                                    <input type="text" placeholder="Wallet Address">
                                    <input type="text" placeholder="Amount">
                                </div>
                            </div>

                            <div class="flex items-center mt-6" id="connect-paypal-button">
                                <button class="themebtn flex items-center gap-1 w-full max-w-[320px] mx-auto">
                                    <img src="./assets/icons/icons_payment_logos_paypal.webp" alt="">Connect Paypal
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Cashout End -->
    @endsection

    @push('js')
        <script>
            const paymentBoxes = document.querySelectorAll('.paymethod-window-box');
            const inputFields = document.querySelectorAll('.input-fields');
            const connectPaypalButton = document.getElementById('connect-paypal-button');

            paymentBoxes.forEach(box => {
                box.addEventListener('click', () => {
                    const method = box.getAttribute('data-method');

                    // Hide all input fields
                    inputFields.forEach(field => field.style.display = 'none');

                    // Show the corresponding input fields
                    document.getElementById(`${method}-fields`).style.display = 'block';

                    // Remove the 'selected' class from all boxes
                    paymentBoxes.forEach(box => box.classList.remove('selected'));

                    // Add the 'selected' class to the clicked box
                    box.classList.add('selected');

                    // Hide the connect paypal button
                    connectPaypalButton.style.display = 'none';
                });
            });
        </script>
    @endpush