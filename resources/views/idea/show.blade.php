<x-app-layout>
    <x-back-button :backUrl="$backUrl" />


    <livewire:idea-show :idea="$idea" :votesCount="$votesCount" />
    @can('update', $idea)
        <livewire:edit-idea :idea="$idea" />
    @endcan
    @can('delete', $idea)
        <livewire:delete-idea :idea="$idea" />
    @endcan
    <div class="relative pt-4 my-8 space-y-6 comments-container sm:ml-22">
        <x-comment />
        <x-admin-comment />
        <x-comment />
    </div>
</x-app-layout>
