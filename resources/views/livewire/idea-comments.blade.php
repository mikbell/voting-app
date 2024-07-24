<div>
    @if ($comments->isNotEmpty())
        <div class="relative pt-4 my-8 space-y-6 comments-container sm:ml-22">
            @foreach ($comments as $comment)
                <livewire:idea-comment :key="$comment->id" :comment="$comment" :ideaUserId="$idea->user->id" />
            @endforeach
        </div>
    @else
        <div class="mx-auto mt-12 w-70">
            <div class="mt-6 font-bold text-center text-gray-400">
                No comments yet...
            </div>
        </div>
    @endif
</div>
