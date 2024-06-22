    <div class="mt-16 bg-white border-2 md:sticky md:top-8 border-blue rounded-xl idea-form">
        <div class="px-6 py-2 pt-6 text-center ">
            <h3 class="text-base font-semibold">Add an idea</h3>
            @auth
                <p class="mt-4 text-xs">Let us know what you would like and we'll take a look over!</p>
            @else
                <p class="mt-4 text-xs">Please login to add an idea</p>
            @endauth

        </div>

        @auth
            <livewire:create-idea/>
        @else
            <div class="my-6 text-center">
                <x-link href="{{ route('login') }}" class="px-4 py-3 text-white bg-blue rounded-xl">Login</x-link>
                <x-link href="{{ route('register') }}" class="px-4 py-3 bg-gray-200 rounded-xl">Register</x-link>
            </div>
        @endauth

    </div>
