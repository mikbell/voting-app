<div x-data
    @click = "
        const target = $event.target.tagName.toLowerCase()

        const ignores = ['a', 'svg', 'path', 'button']

        if(! ignores.includes(target)) {
            $event.target.closest('.idea-container').querySelector('.idea-link').click()
        }
    "
    class="flex transition duration-100 ease-in bg-white cursor-pointer idea-container rounded-xl hover:shadow-card">
    <div class="hidden px-5 py-8 border-r border-gray-100 md:block">
        <div class="text-center">
            <div class="text-2xl font-semibold @if ($hasVoted) text-blue @endif">{{ $votesCount }}
            </div>
            <div class="text-gray-500">votes</div>
        </div>

        <div class="mt-8">
            @if ($hasVoted)
                <button wire:click.prevent="vote"
                    class="w-20 px-4 py-3 text-xs font-bold text-white uppercase transition duration-100 ease-in border shadow border-blue bg-blue hover:bluehover rounded-xl">Voted</button>
            @else
                <button wire:click.prevent="vote"
                    class="w-20 px-4 py-3 text-xs font-bold uppercase transition duration-100 ease-in bg-gray-200 border border-gray-200 shadow hover:border-gray-400 rounded-xl">Vote</button>
            @endif
        </div>
    </div>

    <div class="flex flex-col flex-1 px-2 py-6 md:flex-row">
        <div class="flex-none mx-4 md:mx-0">
            <x-link href="/">
                <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
            </x-link>
        </div>

        <div class="flex flex-col justify-between w-full mx-4">
            <div>
                <h4 class="mt-2 text-xl font-semibold md:mt-0">
                    <x-link href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline">
                        {{ $idea->title }}
                    </x-link>
                </h4>
                <div class="mt-2 text-gray-500 line-clamp-3">
                    {{ $idea->description }}
                </div>
            </div>

            <div class="mt-6">
                <div class="hidden text-gray-900 md:block">{{ $idea->user->name }}</div>
                <div class="flex flex-col justify-between md:items-center md:flex-row">
                    <div class="flex items-center gap-2 text-xs font-semibold text-gray-400">

                        <div> {{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->category->name }}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">4 Comments</div>
                    </div>

                    <div class="flex items-center gap-2 mt-4 md:mt-0">
                        <div
                            class="{{ $idea->status->classes }} flex items-center justify-center px-4 py-2 font-bold text-center rounded-full text-xxs w-28 h-7">
                            {{ $idea->status->name }}</div>
                        <x-dropdown :align="'left'" :width="'44'">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center px-3 py-2 transition duration-100 ease-in bg-gray-100 border rounded-full hover:bg-gray-200 h-7">
                                    <svg class="fill-gray-400" width="24" height="6">
                                        <path
                                            d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                                    </svg>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link href="#">Mark as spam</x-dropdown-link>
                                <x-dropdown-link href="#">Delete post</x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    <div class="flex items-center mt-4 md:hidden md:mt-0">
                        <div class="h-10 px-4 pr-4 text-center bg-gray-100 rounded-xl">
                            <div
                                class="text-xl font-semibold leading-snug @if ($hasVoted) text-blue @endif">
                                {{ $votesCount }}</div>
                            <div class="text-sm leading-none text-gray-400">votes</div>
                        </div>
                        @if ($hasVoted)
                            <button wire:click.prevent="vote"
                                class="w-32 px-4 py-3 text-xs font-bold text-white uppercase transition duration-100 ease-in border shadow border-blue bg-blue hover:bluehover hover:border-bluehover rounded-xl">Voted</button>
                        @else
                            <button wire:click.prevent="vote"
                                class="w-32 px-4 py-3 text-xs font-bold uppercase transition duration-100 ease-in bg-gray-200 border border-gray-200 shadow hover:border-gray-400 rounded-xl">Vote</button>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
