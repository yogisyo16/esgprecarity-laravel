<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Arvo", serif;
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
    <div class="flex flex-col min-w-full min-h-screen bg-green-700 text-white">
        <div class="navbar shadow-sm">
            <div class="flex-none">
                <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path> </svg>
                </button>
            </div>
            <div class="flex-1">
                <a class="btn btn-ghost text-xl">Esgprecarity</a>
            </div>
        </div>
        <div class="flex flex-1 justify-center items-center">
            @yield('content')
        </div>
    </div>
</body>
</html>