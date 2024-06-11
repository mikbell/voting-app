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

<body class="font-sans antialiased text-gray-900 text-sm">
    <div class="min-h-screen bg-background">

        <header class="flex items-center justify-between px-8 py-4">
            <a href="">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </a>


            <div class="flex items-center">
                <livewire:layout.navigation />

                <a href="/">
                    <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109"
                        alt="" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <!-- Page Content -->
        <main class="container mx-auto flex max-w-custom">
            <div class="w-70 mr-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias alias culpa
                suscipit ipsam
                dignissimos quos placeat voluptates eos, eveniet reprehenderit delectus quo? Minima molestias cum
                laborum officia. Eligendi, suscipit dolorem! Adipisci quae consequuntur tempore natus, dolorum quas
                ducimus consequatur a perferendis, laborum reprehenderit nulla vero atque esse, dolorem accusamus.
                Consequatur eius non ipsum a rem nemo, dolore ullam facere expedita voluptatibus eligendi necessitatibus
                amet exercitationem accusantium dolor doloribus saepe? Dolorem enim cupiditate labore ullam vitae atque
                in qui accusantium culpa, odio soluta voluptatum at et quasi consequuntur, a, eaque sit? Accusamus ea
                velit odio mollitia, consequatur consectetur dolore harum explicabo.</div>

            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li>
                            <a href="/" class="border-b-4 pb-3 border-blue">all ideas (87)</a>
                        </li>
                        <li>
                            <a href="/"
                                class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">considering
                                (6)</a>
                        </li>
                        <li>
                            <a href="/"
                                class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">In
                                progress (1)</a>
                        </li>
                    </ul>

                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li>
                            <a href="/"
                                class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">
                                implemented(10)</a>
                        </li>
                        <li>
                            <a href="/"
                                class="text-gray-400 transition duration-100 ease-in border-b-4 pb-3 hover:border-blue">closed
                                (55)</a>
                        </li>

                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</body>

</html>
