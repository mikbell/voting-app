<?php

namespace App\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaShow extends Component
{
    public $idea;
    public $votesCount;
    public $hasVoted;

    protected $listeners = [
        'statusWasUpdated' => '$refresh',
        'ideaWasUpdated' => '$refresh',
      ];
    public function mount(Idea $idea)
    {
        $this->hasVoted = $idea->isVotedByUser(auth()->user());
    }

    public function vote(){
        if(auth()->guest()){
            return redirect()->route('login');
        }

        if($this->hasVoted){
            $this->idea->removeVote(auth()->user());
            $this->votesCount--;
            $this->hasVoted = false;
        } else {
            $this->idea->vote(auth()->user());
            $this->votesCount++;
            $this->hasVoted = true;
        }
    }

    public function render()
    {
        return view('livewire.idea-show');
    }
}
