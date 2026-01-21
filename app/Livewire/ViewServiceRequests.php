<?php

namespace App\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;
use App\Models\Services;
use Livewire\WithPagination;

class ViewServiceRequests extends Component
{
    use WithPagination;

    public $search = '';
    public $categoryFilter = '';

    protected $queryString =
        ['search' => ['except' => ''],
        'categoryFilter' => ['except' => '']
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategoryFilter()
    {
        $this->resetPage();
    }
    public function deleteService($id)
    {
        Services::find($id)->delete();
    }
    public function render()
    {
        $services = Services::query()
            ->with('categoryModel')
            ->when($this->search, fn($q) => $q->where('name', 'like', '%'.$this->search.'%'))
            ->when($this->categoryFilter, fn($q) => $q->where('category', $this->categoryFilter))
            ->latest()
            ->paginate(10);

        return view('livewire.view-service-requests', [
            'services' => $services,
            'category' => ServiceCategory::query()->orderBy('name')->pluck('name', 'id'),
        ])->layout('layouts.app');
    }
}
