<?php

namespace App\Livewire;

use App\Models\Idea;
use App\Models\Comment;
use Livewire\Component;

class IdeaComments extends Component
{
    public Idea $idea;
    protected $listeners = [
        'comment-was-added'
    ];
    public function commentWasAdded($id)
  {
    $this->comments->push(Comment::find($id));
    $this->dispatchBrowserEvent('comment-was-added', $this->comments->last());
  }
  
    public function render()
    {
        return view('livewire.idea-comments', [
            'comments' => $this->idea->comments,
        ]);
    }
}
