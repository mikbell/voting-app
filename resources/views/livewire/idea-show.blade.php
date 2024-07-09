<div>
    <div class="flex flex-col mt-6 bg-white idea-container rounded-xl sm:flex-row">

        <div class="flex flex-col flex-1 px-4 py-6 md:flex-row">
            <div class="flex-none">
                <x-link href="/">
                    <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </x-link>
            </div>

            <div class="w-full mx-2 md:mx-4">
                <h4 class="text-xl font-semibold">
                    {{ $idea->title }}
                </h4>
                <div class="mt-3 text-gray-500">
                    {{ $idea->description }}
                </div>
                <div class="mt-6 font-semibold">
                    <div class="hidden text-gray-900 md:block">{{ $idea->user->name }}</div>

                    <div class="flex flex-col justify-between md:flex-row sm:flex-row">
                        <div class="flex items-center gap-2 text-xs font-semibold text-gray-400">
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">4 Comments</div>
                        </div>

                        <div class="flex items-center gap-2 mt-4 sm:mt-0">
                            <div
                                class="{{ $idea->status->classes }}  flex items-center justify-center px-4 py-2 font-bold text-center rounded-full text-xxs w-28 h-7">
                                {{ $idea->status->name }}</div>
                            <x-dropdown :align="'right'" :width="'44'">
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
                                    @can('update', $idea)
                                        <x-dropdown-link href="#"
                                            @click.prevent="isOpen = false
                                        $dispatch('custom-show-edit-modal'
                                        )">
                                            Edit Idea
                                        </x-dropdown-link>
                                    @endcan

                                    @can('delete', $idea)
                                        <x-dropdown-link href="#"
                                            @click.prevent="isOpen = false 
                                    $dispatch('custom-show-delete-modal')">Delete
                                            Idea
                                        </x-dropdown-link>
                                    @endcan
                                    <x-dropdown-link href="#">Mark as spam</x-dropdown-link>
                                </x-slot>
                            </x-dropdown>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="flex flex-col items-center justify-between mt-6 space-y-4 sm:flex-row sm:space-y-0 buttons-container">
        <div class="flex items-center space-x-4">
            <x-dropdown :width="'104'" :align="'top'">
                <x-slot name="trigger">
                    <button
                        class="flex items-center justify-center w-32 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11 bg-blue hover:bg-bluehover rounded-xl hover:border-gray-400">
                        Reply
                    </button>
                </x-slot>

                <x-slot name="content" class="absolute px-3 py-2 text-sm font-semibold text-left w-80 ">
                    <form action="#" class="px-4 py-6 space-y-4">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                                placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11  bg-blue hover:bg-bluehover rounded-xl hover:border-gray-400">
                                Post Comment
                            </button>

                            <button type="button"
                                class="flex items-center justify-center w-32 px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                                <svg class="w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                </svg>
                                Attach
                            </button>
                        </div>
                    </form>
                </x-slot>
            </x-dropdown>

            @if (auth()->check() && auth()->user()->isAdmin())
                <livewire:set-status :idea="$idea" />
            @endif
        </div>

        <div class="flex items-center space-x-3">
            <div class="px-3 py-2 font-semibold text-center bg-white rounded-xl">
                <div class="text-xl font-semibold leading-snug @if ($hasVoted) text-blue @endif">
                    {{ $votesCount }}</div>
                <div class="text-sm leading-none text-gray-400">votes</div>
            </div>
            <div>
                @if ($hasVoted)
                    <button wire:click.prevent="vote"
                        class="w-32 px-4 py-3 text-xs font-bold text-white uppercase transition duration-100 ease-in border shadow border-blue  hover:hover hover:border-bluehover rounded-xl">Voted</button>
                @else
                    <button wire:click.prevent="vote"
                        class="w-32 px-4 py-3 text-xs font-bold uppercase transition duration-100 ease-in bg-gray-200 border border-gray-200 shadow hover:border-gray-400 rounded-xl">Vote</button>
                @endif

            </div>
        </div>
    </div>
</div>
