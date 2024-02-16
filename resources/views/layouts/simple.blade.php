<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <main class="h-full">
                <div class="flex gap-7">
                    <aside class="w-64 sticky top-0 left-0 bg-gray-200 h-[100vh] dark:bg-gray-800-0">
                        <a href="/" class="block p-3 hover:bg-gray-300 dark:hover:bg-gray-700">MainPage</a>
                        <a href="/" class="block p-3 hover:bg-gray-300 dark:hover:bg-gray-700 font-bold">
                            <i class="fa-solid fa-magnifying-glass mr-2"></i> 
                            <span>Serach</span>
                        </a>
                        <a href="{{ route('publications.create') }}" class="block p-3 hover:bg-gray-300 dark:hover:bg-gray-700">Create publication</a>
                    </aside>
                    <div class="flex-1 bg-gray-300 dark:bg-gray-700">

                        {{ $slot }}
                    </div>
                    <aside class="sticky top-0 w-64 bg-gray-200 dark:bg-gray-800">
                        Profile + Recomendations
                    </aside>
                </div>
            </main>
        </div>
    </body>
</html>
