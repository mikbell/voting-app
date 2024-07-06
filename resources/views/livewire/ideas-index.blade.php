<div>
    <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row filters">
        <div class="w-full md:w-1/3">
            <select wire:model.live="category" name="category" id="category"
                class="w-full px-4 py-2 border-none shadow rounded-xl">
                <option value="All Categories">All Categories</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="w-full md:w-1/3">
            <select wire:model="filter" name="filter" id="filter"
                class="w-full px-4 py-2 border-none shadow rounded-xl">
                <option value="No filters">No filters</option>
                <option value="Top Voted">Top Voted</option>
                <option value="My Ideas">My Ideas</option>
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


            <input wire:model="search" type="search" placeholder="find an idea"
                class="w-full px-4 py-2 pl-8 bg-white border-none shadow rounded-xl placeholder-text-gray-900">
        </div>
    </div> {{-- end filters --}}


    <div class="my-6 space-y-6 ideas-container">
        @forelse ($ideas as $idea)
            <livewire:idea-index :idea="$idea" :key="$idea->id" :votesCount="$idea->votes_count" />
        @empty
            <div class="mx-auto w-70 mt-12">
                <div class="text-gray-400 text-center font-bold mt-6">
                    No ideas found...
                </div>
            </div>
        @endforelse

    </div> {{-- end ideas-container --}}

    <div>
        {{ $ideas->appends(request()->query())->links() }}
    </div>
</div>
