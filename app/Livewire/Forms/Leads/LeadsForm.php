<?php

namespace App\Livewire\Forms\Leads;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Leads;

class LeadsForm extends Form
{
    #[Validate(['required', 'string', 'min:3', 'max:100'])]
    public $name = '';

    #[Validate(['required', 'email', 'max:254'])]
    public $email = '';

    #[Validate(['required', 'string', 'min:3', 'max:100'])]
    public $company = '';

    #[Validate(['required', 'string', 'min:3', 'max:50'])]
    public $project_type = '';

    #[Validate(['required', 'string', 'min:3', 'max:10'])]
    public $budget_range = '';

    #[Validate(['required', 'string', 'min:3', 'max:50'])]
    public $decision_timeline = '';

    #[Validate(['accepted', 'required', 'boolean'])]
    public $agree_to_terms = false;

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
            'agree_to_terms',
        ]));


    }
}
