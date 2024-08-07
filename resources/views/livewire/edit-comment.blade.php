<div x-cloak x-data="{ isOpen: false }" x-show="isOpen" @keydown.escape.window="isOpen = false"
    @edit-comment-modal.window="isOpen = true 
    nextTick(() => $refs.title.focus())"
    @idea-was-updated.window="
    isOpen = false" class="relative z-10" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">

    <div x-show="isOpen" x-transition.opacity class="fixed inset-0 transition-opacity bg-gray-500/75" aria-hidden="true">
    </div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex items-end justify-center min-h-full text-center ">
            <div x-show="isOpen" x-transition.origin.bottom.duration.300ms
                class="relative overflow-hidden transition-all transform bg-white rounded-t-xl sm:w-full sm:max-w-lg">
                <div class="absolute top-0 right-0 pt-4 pr-4">
                    <button @click="isOpen = false">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div @click.outside="isOpen = false" class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="w-full text-center">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Modifica commento</h3>
                            <form wire:submit.prevent="updateIdea" class="px-4 py-6 space-y-4">

                                <div>
                                    <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="4"
                                        class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl" required></textarea>
                                    @error('description')
                                        <p class="mt-1 text-xs text-red">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex items-center justify-between gap-3">
                                    <button type="button"
                                        class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                                        <svg class="w-5 text-gray-500 transform -rotate-45" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                        </svg>

                                        Allega
                                    </button>

                                    <button type="submit"
                                        class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 bg-blue hover:bluehover rounded-xl hover:border-gray-400">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
