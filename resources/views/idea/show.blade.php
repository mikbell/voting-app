<x-app-layout>
    <x-link href="/" class="flex items-center font-semibold">
        <svg class="w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
        Back
    </x-link>

    <livewire:idea-show :idea="$idea" :votesCount="$votesCount"/>

    <div class="relative pt-4 my-8 space-y-6 comments-container sm:ml-22">
        <x-comment />
        <x-admin-comment />
        <x-comment />
    </div>
</x-app-layout>
