<x-app-layout>
    <x-back-button :backUrl="$backUrl" />


    <x-modals-container :idea="$idea" :votesCount="$votesCount" />

    <div class="relative pt-4 my-8 space-y-6 comments-container sm:ml-22">
        <x-comment />
        <x-admin-comment />
        <x-comment />
    </div>
</x-app-layout>
