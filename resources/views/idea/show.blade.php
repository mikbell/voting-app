<x-app-layout>
    <x-back-button :backUrl="$backUrl" />
    <livewire:idea-show :idea="$idea" :votesCount="$votesCount" />

    <x-notification-success />

    <livewire:idea-comments :idea="$idea" />

    <x-modals-container :idea="$idea" :votesCount="$votesCount" />
</x-app-layout>
