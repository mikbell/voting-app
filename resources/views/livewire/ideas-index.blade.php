<div>
    <x-filters />

    <div class="my-6 space-y-6 ideas-container">
        @foreach ($ideas as $idea)
            <livewire:idea-index :idea="$idea" :key="$idea->id" :votesCount="$idea->votes_count" />
        @endforeach

    </div> {{-- end ideas-container --}}

    <div>
        {{ $ideas->links() }}
    </div>
</div>
