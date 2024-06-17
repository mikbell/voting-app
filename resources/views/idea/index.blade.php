<x-app-layout>
    <x-filters />

    <div class="my-6 space-y-6 ideas-container">
        @foreach ($ideas as $idea)
            <x-idea-card :idea="$idea" />
        @endforeach

    </div> {{-- end ideas-container --}}

    <div>
        {{ $ideas->links() }}
    </div>
</x-app-layout>
