<x-dropdown :width="'76'" :align="'right'">
    <x-slot name="trigger">
        <button
            class="flex items-center justify-center px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
            <span>Set Status</span>
            <svg class="w-5 ml-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
    </x-slot>

    <x-slot name="content" class="text-sm font-semibold text-left">
        <form wire:submit.prevent="setStatus" action="#" class="px-4 py-6 space-y-4">
            <div class="space-y-2">
                <div>
                    <label class="inline-flex items-center">
                        <input wire:model="status" type="radio"
                            class="text-black border-none bg-slate-200" name="status" value="1">
                        <span class="ml-2">Aperto</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input wire:model="status" type="radio"
                            class="border-none bg-slate-200 text-purple" name="status" value="2">
                        <span class="ml-2">In considerazione</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input wire:model="status" type="radio"
                            class="border-none bg-slate-200 text-yellow" name="status" value="3">
                        <span class="ml-2">In rogresso</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input wire:model="status" type="radio"
                            class="border-none bg-slate-200 text-green" name="status" value="4">
                        <span class="ml-2">Implementato</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input wire:model="status" type="radio"
                            class="border-none bg-slate-200 text-red" name="status" value="5">
                        <span class="ml-2">Chiuso</span>
                    </label>
                </div>
            </div>

            <div>
                <textarea name="update_comment" id="update_comment" cols="30" rows="4"
                    class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                    placeholder="Add an update comment (optional)"></textarea>
            </div>

            <div class="flex items-center space-x-3">
                <button type="button"
                    class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                    <svg class="w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                    </svg>
                    Allega
                </button>

                <button type="submit"
                    class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11 bg-blue hover:bg-bluehover rounded-xl hover:border-gray-400">
                    Aggiorna
                </button>
            </div>

            <div class="inline-flex items-center font-normal">
                <input wire:model="notifyAllVoters" type="checkbox" name="notify_voters" class="bg-gray-200 rounded">
                <span class="ml-2">Notifica tutti i votanti</span>
            </div>
        </form>
    </x-slot>
</x-dropdown>
