<?php

namespace App\Livewire;

use App\Models\Idea;
use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class IdeaComments extends Component
{

  use WithPagination;
  public Idea $idea;
  protected $listeners = [
    'comment-was-added'
  ];
  public function commentWasAdded($id)
  {
    $this->comments->push(Comment::find($id));
    $this->dispatchBrowserEvent('comment-was-added', $this->comments->last());
    $this->idea->refresh();
    $this->goToPage($this->idea->comments()->paginate()->lastPage());
  }

  public function render()
  {
    return view('livewire.idea-comments', [
      'comments' => $this->idea->comments()->with('user')->paginate()->withQueryString(),
    ]);
  }
}
