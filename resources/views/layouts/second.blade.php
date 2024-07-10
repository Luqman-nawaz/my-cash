<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/Logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="/vendor/css/index.css">
    <link rel="stylesheet" href="/vendor/css/style.css">
    <title>My Cash</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('css')

</head>

<body>

    <div class="w-full flex justify-center">
        <div class="containerwidth">

            <!-- Header Start -->
            <Header class="header flex justify-between items-center">
                <div class="setPadding w-full mx-auto flex justify-between items-center px-14">
                    <div class="logo-container flex justify-between items-center">
                        
                    </div>
                    <div class="leftmenu-container flex items-center">
                        <img src="/assets/logo.svg" class="m-auto" alt="">
                    </div>
                    <div class="rightmenu-container flex justify-end items-center gap-4">
                    </div>
                </div>
            </Header>
<!-- Header End -->

            @yield('content')

        </div>
    </div>

    <script src="/vendor/js/script.js"></script>
    @stack('js')

</body>

</html>