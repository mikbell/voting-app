<div>
    <form wire:submit.prevent="createIdea" class="px-4 py-6 space-y-4">
        <div>
            <input wire:model.defer="title" type="text"
                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                placeholder="Your Idea" required />
            @error('title')
                <p class="mt-1 text-xs text-red">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <select wire:model.defer="category" name="category_add" id="category_add"
                class="w-full px-4 py-2 text-sm bg-gray-100 border-none shadow rounded-xl">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
                <p class="mt-1 text-xs text-red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="4"
                class="w-full px-4 py-2 text-sm placeholder-gray-900 bg-gray-100 border-none rounded-xl"
                placeholder="describe your idea" required></textarea>
            @error('description')
                <p class="mt-1 text-xs text-red">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between gap-3">
            <button type="button"
                class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold transition duration-100 ease-in bg-gray-200 border border-gray-200 h-11 rounded-xl hover:border-gray-400">
                <svg class="w-5 text-gray-500 transform -rotate-45" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                </svg>

                Attach
            </button>

            <button type="submit"
                class="flex items-center justify-center w-1/2 px-4 py-3 font-semibold text-white transition duration-100 ease-in border border-gray-200 h-11  hover:Hover rounded-xl hover:border-gray-400">
                Submit
            </button>
        </div>
    </form>

    <div class="my-3 font-semibold text-center">
        @if (session('success'))
            <div x-data="{ isVisible: true }" x-init="setTimeout(() => isVisible = false, 3000)" x-show.transition.duration.3000ms="isVisible"
                class="text-green">
                {{ session('success') }}</div>
        @endif
    </div>
</div>
