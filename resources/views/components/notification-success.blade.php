@props([
    'redirect' => false,
    'messageToDisplay' => '',
])

<div @if ($redirect) x-data="{ isOpen: true, messageToDisplay: '{{ session('success') }}' }"
        x-init="setTimeout(() => isOpen = false, 5000)"
    @else
        x-data="{ isOpen: false, messageToDisplay: '{{ $messageToDisplay }}' }"
        @idea-was-updated.window="
        isOpen = true
        messageToDisplay = $event.detail;
        setTimeout(() => {
        isOpen = false
        }, 5000)
        "
        @status-was-updated.window="
        isOpen = true
        messageToDisplay = $event.detail;
        setTimeout(() => {
        isOpen = false
        }, 5000)"

        @idea-was-marked-as-spam.window="
        isOpen = true
        messageToDisplay = $event.detail;
        setTimeout(() => {
        isOpen = false
        }, 5000)
        "
        @idea-was-marked-as-not-spam.window="
        isOpen = true
        messageToDisplay = $event.detail;
        setTimeout(() => {
        isOpen = false
        }, 5000)"

        @comment-was-added.window="
        isOpen = true
        messageToDisplay = $event.detail;
        setTimeout(() => {
        isOpen = false
        }, 5000)" @endif
    x-cloak x-show="isOpen" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-x-8"
    x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 transform translate-x-0"
    x-transition:leave-end="opacity-0 transform translate-x-8" @keydown.escape.window="isOpen = false"
    class="fixed bottom-0 right-0 z-20 flex justify-between w-full max-w-xs px-4 py-5 mx-2 my-8 bg-white border shadow-xl sm:mx-6 sm:max-w-sm rounded-xl">
    <div class="flex items-center text-base ">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-green">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>

        <div class="ml-2 font-semibold text-gray-500" x-text="messageToDisplay">
        </div>
    </div>

    <button class="text-gray-400" @click="isOpen = false">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
</div>
