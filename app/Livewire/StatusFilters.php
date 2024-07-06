<?php

namespace App\Livewire;

use App\Models\Idea;
use App\Models\Status;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class StatusFilters extends Component
{
    public $status = 'All';
    public $statusCount;

    protected $queryString = [
        'status',
    ];

    public function mount()
    {
        $this->statusCount = Status::getCount();

        if (Route::currentRouteName() === 'idea.show') {
            $this->status = null;
            $this->queryString = [];
        }
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;

        // if ($this->getPreviousRouteName() === 'idea.show') {
        return redirect(route('index', [
            'status' => $this->status,
        ]));
        // }

    }

    public function render()
    {
        return view('livewire.status-filters');
    }

    private function getPreviousRouteName()
    {
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }
}
