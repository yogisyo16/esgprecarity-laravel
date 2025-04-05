<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-name')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0&icons=table_chart,home" />
    @stack('header_link_styles')
</head>
<body>
    <div id="loading-screen">
        <x-loading />
    </div>
    <div class="flex flex-col min-w-max min-h-screen bg-bodyGreen text-white">
        <div class="navbar bg-navbarGreen shadow-md">
            <div class="flex-1">
                <a class="btn btn-ghost text-3xl">Esgprecarity</a>
            </div>
            <div class="flex-none">
                @stack('logout-user')
            </div>
        </div>
        <div class="flex flex-1 flex-row">
            <ul class="menu menu-xs min-h-screen bg-navbarGreen w-14 md:menu-xl md:w-56">
                <li class="mt-8">
                    @stack('side-menu')
                    @stack('logout-user-side-menu')
                </li>
            </ul>
            <div class="flex flex-1 justify-center m-2 md:m-10">
                @yield('content')
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('loading-screen').classList.add('hidden');
            document.getElementById('app').classList.remove('hidden');
        });
    </script>
    @stack('scripts')
</body>
</html>