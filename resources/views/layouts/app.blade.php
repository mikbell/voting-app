<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voting</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-sm antialiased text-gray-900">
    <div class="min-h-screen bg-background">

        <header class="flex flex-col items-center justify-between px-8 py-4 md:flex-row">
            <a href="">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </a>


            <div class="flex items-center">
                <livewire:layout.navigation />
            </div>
        </header>

        <main class="container flex flex-col gap-5 mx-auto md:flex-row max-w-custom">
            <div class="mx-auto md:mx-0 w-70">
                <x-idea-form />
            </div>

            <div class="w-full px-2 md:px-0 md:w-175">
                <nav class="items-center justify-between hidden text-xs md:flex">
                    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
                        <li>
                            <a href="/" class="pb-3 border-b-4 border-blue">all ideas (87)</a>
                        </li>
                        <li>
                            <a href="/"
                                class="pb-3 text-gray-400 transition duration-100 ease-in border-b-4 hover:border-blue">considering
                                (6)</a>
                        </li>
                        <li>
                            <a href="/"
                                class="pb-3 text-gray-400 transition duration-100 ease-in border-b-4 hover:border-blue">In
                                progress (1)</a>
                        </li>
                    </ul>

                    <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
                        <li>
                            <a href="/"
                                class="pb-3 text-gray-400 transition duration-100 ease-in border-b-4 hover:border-blue">
                                implemented(10)</a>
                        </li>
                        <li>
                            <a href="/"
                                class="pb-3 text-gray-400 transition duration-100 ease-in border-b-4 hover:border-blue">closed
                                (55)</a>
                        </li>

                    </ul>
                </nav>

                <div class="my-8">
                    {{ $slot }}
                </div>
            </div>

            <div class="w-24"></div>
        </main>
    </div>
</body>

</html>
