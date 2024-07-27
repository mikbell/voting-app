<div>
    <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row filters">
        <div class="w-full md:w-1/3">
            <select wire:model.live="category" name="category" id="category"
                class="w-full px-4 py-2 border-none shadow cursor-pointer rounded-xl">
                <option value="All Categories">Categorie</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="w-full md:w-1/3">
            <select wire:model.live="filter" name="other_filters" id="other_filters"
                class="w-full px-4 py-2 border-none shadow cursor-pointer rounded-xl">
                <option value="No filters">Nessun filtro</option>
                <option value="Top Voted">I più votati</option>
                @auth
                    <option value="My Ideas">Le mie idee</option>
                @endauth
                @admin
                    <option value="Spam">Spam</option>
                @endadmin
            </select>
        </div>

        <div class="relative w-full md:w-2/3">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>


            <input wire:model.live.debounce.300ms="search" type="search" placeholder="Trova un'idea"
                class="w-full px-4 py-2 pl-8 bg-white border-none shadow rounded-xl placeholder-text-gray-900">
        </div>
    </div> {{-- end filters --}}


    <div class="my-6 space-y-6 ideas-container">
        @forelse ($ideas as $idea)
            <livewire:idea-index :idea="$idea" :key="$idea->id" :votesCount="$idea->votes_count" />
        @empty
            <div class="mx-auto mt-12 w-70">
                <div class="mt-6 font-bold text-center text-gray-400">
                    Ancora nessuna idea...
                </div>
            </div>
        @endforelse

    </div> {{-- end ideas-container --}}

    <div class="py-8">
        {{ $ideas->appends(request()->query())->links('vendor.pagination.simple-tailwind') }}
    </div>
</div>
