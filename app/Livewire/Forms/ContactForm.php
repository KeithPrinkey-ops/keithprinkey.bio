<?php

namespace App\Livewire\Forms;

use App\Notifications\ContactFormNotification;
use Illuminate\Support\Facades\Log;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;
use Livewire\Form;
use Livewire\Attributes\Validate;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use AllowDynamicProperties;



#[AllowDynamicProperties]
class ContactForm extends Component
{
    use InteractsWithBanner;

    #[Validate('required')]
    public $first_name = '';
    #[Validate('required')]
    public $last_name = '';
    #[Validate('nullable')]
    public $company = '';
    #[Validate('required')]
    public $email = '';
    #[Validate('required')]
    public $subject = '';
    #[Validate('required')]
    public $message = '';

    public $user;
    public $user_id;
    public $user_email;
    public $super_admin;

    public function mount()
    {
        Log::info('Current memory usage: ' . memory_get_usage() . ' bytes');
        Log::info('Peak memory usage: ' . memory_get_peak_usage() . ' bytes');

        if (auth()->check()) {
            $this->user_id = auth()->id();
            logger("Authenticated user ID: " . $this->user_id);
        } else {
            logger("User is not authenticated.");
        }
    }



    public function save()
    {
        // Validate the data (via attributes)
        $this->validate();
        $this->message = htmlspecialchars($this->message, ENT_QUOTES, 'UTF-8');
        $this->subject = htmlspecialchars($this->subject, ENT_QUOTES, 'UTF-8');
        $this->first_name = htmlspecialchars($this->first_name, ENT_QUOTES, 'UTF-8');
        $this->last_name = htmlspecialchars($this->last_name, ENT_QUOTES, 'UTF-8');
        $this->company = htmlspecialchars($this->company, ENT_QUOTES, 'UTF-8');
        $this->email = htmlspecialchars($this->email, ENT_QUOTES, 'UTF-8');
        // Example: Send an email


        // Save to database
        Contact::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'company' => $this->company,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        // Reset fields after submission
        $this->reset(['first_name', 'last_name', 'company', 'email', 'subject', 'message']);



        session()->flash('flash.banner', "Thank you, {$this->first_name} your message has been sent successfully!");
        session()->flash('flash.bannerStyle', 'success');


        // Optionally return or do something else
        // e.g. redirect to a "Thank You" page:
        return redirect()->to('/contact');
    }

    public function latest(): ContactForm
    {
        return ContactForm::latest()->first()->byId();
    }

    public function render()
    {
        return view('livewire.forms.contact-component')->layout('layouts.guest');
    }
}
