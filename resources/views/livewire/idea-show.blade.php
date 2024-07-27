<div>
    <div class="flex flex-col mt-6 bg-white idea-container rounded-xl sm:flex-row">

        <div class="flex flex-col flex-1 px-4 py-6 md:flex-row">
            <div class="flex-none">
                <x-link href="#">
                    <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </x-link>
            </div>

            <div class="w-full mx-2 md:mx-4">
                <h4 class="text-xl font-semibold">
                    {{ $idea->title }}
                </h4>
                @admin
                    @if ($idea->spam_reports > 0)
                        <div class="text-sm text-red">Spam reports: {{ $idea->spam_reports }}</div>
                    @endif
                @endadmin
                <div class="mt-3 text-gray-500">
                    {{ $idea->description }}
                </div>
                <div class="mt-6 font-semibold">
                    <div class="hidden text-gray-900 md:block">{{ $idea->user->name }}</div>

                    <div class="flex flex-col justify-between md:flex-row sm:flex-row">
                        <div class="flex items-center gap-2 text-xs font-semibold text-gray-400">
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->category->name }}</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">{{ $idea->comments()->count() }} Commenti</div>
                        </div>

                        <div class="flex items-center gap-2 mt-4 sm:mt-0">
                            <div
                                class="{{ $idea->status->classes }}  flex items-center justify-center px-4 py-2 font-bold text-center rounded-full text-xxs w-28 h-7">
                                {{ $idea->status->name }}</div>
                            @auth
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
                                        @can('update', $idea)
                                            <x-dropdown-link href="#"
                                                @click.prevent="isOpen = false
                                        $dispatch('edit-idea-modal'
                                        )">
                                                Modifica
                                            </x-dropdown-link>
                                        @endcan


                                        <x-dropdown-link href="#"
                                            @click.prevent="isOpen = false 
                                    $dispatch('mark-as-spam-modal')">Segnala come spam</x-dropdown-link>

                                        @admin
                                            @if ($idea->spam_reports > 0)
                                                <x-dropdown-link href="#"
                                                    @click.prevent="isOpen = false 
                                    $dispatch('mark-as-not-spam-modal')">
                                                    Non Spam</x-dropdown-link>
                                            @endif
                                        @endadmin

                                        @can('delete', $idea)
                                            <x-dropdown-link href="#"
                                                @click.prevent="isOpen = false 
                                $dispatch('delete-modal')">Elimina
                                            </x-dropdown-link>
                                        @endcan
                                    </x-slot>
                                </x-dropdown>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="flex flex-col items-center justify-between mt-6 space-y-4 sm:flex-row sm:space-y-0 buttons-container">
        <div class="flex items-center space-x-4">
            <livewire:add-comment :idea="$idea" />

            @admin
                <livewire:set-status :idea="$idea" />
            @endadmin
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
                        class="w-32 px-4 py-3 text-xs font-bold text-white uppercase transition duration-100 ease-in border shadow bg-blue hover:bg-bluehover rounded-xl">Votato</button>
                @else
                    <button wire:click.prevent="vote"
                        class="w-32 px-4 py-3 text-xs font-bold uppercase transition duration-100 ease-in bg-gray-200 border border-gray-200 shadow hover:border-gray-400 rounded-xl">Vota</button>
                @endif
            </div>
        </div>
    </div>
</div>
