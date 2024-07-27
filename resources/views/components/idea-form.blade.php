    <div class="mt-16 bg-white border-2 md:sticky md:top-8 border-blue rounded-xl idea-form">
        <div class="px-6 py-2 pt-6 text-center ">
            <h3 class="text-base font-semibold">Aggiungi un'idea</h3>
            @auth
                <p class="mt-4 text-xs">Facci sapere cosa stai pensando!</p>
            @else
                <p class="mt-4 text-xs">Effettua il login per aggiungere un'idea</p>
            @endauth

        </div>

        @auth
            <livewire:create-idea />
        @else
            <div class="my-6 space-x-2 text-center">
                <x-link href="{{ route('login') }}" class="px-4 py-2 text-white transition duration-150 bg-blue hover:bg-bluehover rounded-xl">Login</x-link>
                <x-link href="{{ route('register') }}" class="px-4 py-2 transition duration-150 bg-gray-200 hover:bg-gray-300 rounded-xl">Register</x-link>
            </div>
        @endauth

    </div>
