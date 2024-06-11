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


<div>
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
</div>
