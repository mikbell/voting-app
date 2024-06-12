<div class="flex space-x-6 filters">
    <div class="w-1/3">
        <select name="category" id="category" class="w-full px-4 py-2 border-none shadow rounded-xl">
            <option value="category 1">category 1</option>
            <option value="category 2">category 2</option>
            <option value="category 3">category 3</option>
            <option value="category 4">category 4</option>
        </select>
    </div>

    <div class="w-1/3">
        <select name="filter" id="filter" class="w-full px-4 py-2 border-none shadow rounded-xl">
            <option value="filter 1">filter 1</option>
            <option value="filter 2">filter 2</option>
            <option value="filter 3">filter 3</option>
            <option value="filter 4">filter 4</option>
        </select>
    </div>

    <div class="relative w-2/3">
        <div class="absolute top-0 flex items-center h-full ml-2">
            <svg class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </div>


        <input type="search" placeholder="find an idea"
            class="w-full px-4 py-2 pl-8 bg-white border-none shadow rounded-xl placeholder-text-gray-900">
    </div>
</div> {{-- end filters --}}