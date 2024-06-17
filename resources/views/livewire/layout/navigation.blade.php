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
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="flex items-center text-sm">
                        {{ auth()->user()->name }}
                        <svg class="w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                </x-slot>

                <x-slot name="content">
                    <button wire:click="logout" class="block px-4 py-2 text-xs text-gray-400">Logout</button>
                </x-slot>
            </x-dropdown>

            <a href="/">
                <img src="{{ auth()->user()->getAvatar() }}" alt="" class="w-10 h-10 rounded-full">
            </a>
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
</div>
