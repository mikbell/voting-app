<x-dropdown :width="'104'" :align="'top'">
    <x-slot name="trigger">
        <button @click="$nextTick(() => $refs.comment.focus())"
            class="flex items-center justify-center w-32 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11 bg-blue hover:bg-bluehover rounded-xl hover:border-gray-400">
            Reply
        </button>
    </x-slot>

    <x-slot name="content" class="absolute px-3 py-2 text-sm font-semibold text-left w-80 ">
        @auth
            <form wire:submit.prevent="addComment" action="#" class="px-4 py-6 space-y-4">
                <div>
                    <textarea x-ref="comment" wire:model="comment" name="post_comment" id="post_comment" cols="30" rows="4"
                        class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                        placeholder="Go ahead, don't be shy. Share your thoughts..." required></textarea>
                    @error('comment')
                        <p class="mt-1 text-xs text-red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center space-x-3">
                    <button type="submit"
                        class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11 bg-blue hover:bg-bluehover rounded-xl hover:border-gray-400">
                        Post Comment
                    </button>

                    <button type="button"
                        class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                        <svg class="w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                        </svg>
                        Attach
                    </button>
                </div>
            </form>
        @else
            <div class="px-4 py-6">
                <p>Please login or register to add a comment</p>
                <div class="flex items-center gap-2 mt-2">
                    <x-link
                        class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11 bg-blue hover:bg-bluehover rounded-xl hover:border-gray-400"
                        href="{{ route('login') }}">
                        Login
                    </x-link>

                    <x-link
                        class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 hover:bg-gray-400 rounded-xl hover:border-gray-400"
                        href="{{ route('register') }}">
                        Register
                    </x-link>
                </div>
            </div>
        @endauth
    </x-slot>
</x-dropdown>
