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

            <x-navbar></x-navbar>

            @yield('content')

            <x-footer></x-footer>

        </div>
    </div>

    <script src="/vendor/js/script.js"></script>
    @stack('js')

</body>

</html>