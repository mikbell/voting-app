<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class EditIdea extends Component
{
    public function render()
    {
        return view('livewire.edit-idea', [
            'categories' => Category::all()
        ]);
    }
}
