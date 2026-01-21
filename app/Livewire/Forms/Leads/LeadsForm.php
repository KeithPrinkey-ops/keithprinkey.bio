<?php

namespace App\Livewire\Forms\Leads;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Leads;

class LeadsForm extends Form
{
    #[Validate(['required'])]
    public $name = '';

    #[Validate(['required', 'email', 'max:254'])]
    public $email = '';

    #[Validate(['required'])]
    public $company = '';

    #[Validate(['required'])]
    public $project_type = '';

    #[Validate(['required'])]
    public $budget_range = '';

    #[Validate(['required'])]
    public $decision_timeline = '';

    public function store()
    {
        $this->validate();

        Leads::create($this->only([
            'name',
            'email',
            'company',
            'project_type',
            'budget_range',
            'decision_timeline',
        ]));
    }
}
