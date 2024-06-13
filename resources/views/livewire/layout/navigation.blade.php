<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>


<div class="flex items-center mt-2 md:mt-0">
    @if (Route::has('login'))
        @auth
            <button wire:click="logout" class="w-full text-start">
                <x-nav-link>
                    {{ __('Log Out') }}
                </x-nav-link>
            </button>
        @else
            <x-nav-link href="{{ route('login') }}">
                Log in
            </x-nav-link>

            @if (Route::has('register'))
                <x-nav-link href="{{ route('register') }}">
                    Register
                </x-nav-link>
            @endif
        @endauth
    @endif

    <a href="/">
        <img src="https://gravatar.com/avatar/27205e5c51cb03f862138b22bcb5dc20f94a342e744ff6df1b8dc8af3c865109"
            alt="" class="w-10 h-10 rounded-full">
    </a>
</div>
