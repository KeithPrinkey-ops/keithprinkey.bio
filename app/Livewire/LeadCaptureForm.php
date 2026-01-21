<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\Leads\LeadsForm;
class LeadCaptureForm extends Component
{
    public LeadsForm $form;
    public function render()
    {
        return view('livewire.lead-capture-form')->layout('layouts.guest');
    }

    public function save()
    {
        $this->form->store();
        session()->flash('banner', 'Lead captured successfully!');
        return redirect()->route('thank-you');
    }


}
