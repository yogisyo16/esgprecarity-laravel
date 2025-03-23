<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex flex-col min-w-full min-h-screen bg-zinc-500 text-white">
        <div class="navbar bg-navbarGreen shadow-md">
            <div class="flex-none">
            </div>
            <div class="flex-1">
                <a class="btn btn-ghost text-xl">Esgprecarity</a>
            </div>
        </div>
        <div class="flex flex-1 justify-center m-2 md:m-10">
            @yield('content')
        </div>
    </div>
</body>
</html>