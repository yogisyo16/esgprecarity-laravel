<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-name')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex flex-col min-w-full min-h-screen bg-bodyGreen md:bg-[url('/public/images/bg-canvas-2.png')] md:bg-cover md:bg-fixed text-white">
        <div class="navbar bg-navbarGreen shadow-md">
            <div class="flex-none">
            </div>
            <div class="flex-1">
                <a class="btn btn-ghost text-xl items-center rounded-full p-0 pr-2 bg-white text-black">
                    <img src="/images/esgprecarity-logo.png" class="w-10" alt="">
                    <span>Esgprecarity</span>
                </a>
            </div>
        </div>
        <div class="flex flex-1 justify-center m-2 md:m-10">
            @yield('content')
            @stack('scripts')
        </div>
    </div>
</body>
</html>