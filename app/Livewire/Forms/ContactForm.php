<?php

namespace App\Livewire\Forms;

use App\Models\User;
use App\Notifications\ContactFormNotification;
use App\Notifications\ContactFormSubmittedNotification;
use Illuminate\Support\Facades\Log;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use AllowDynamicProperties;
use Illuminate\Support\Facades\Notification;



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

        // In your Livewire component
        $formData = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'company' => $this->company,
            'subject' => $this->subject,
            'message' => $this->message,
        ];

        // Save to database
        Contact::create($formData);

        $superAdmins = User::role('super-admin')->get();
        if ($superAdmins->isNotEmpty()) {
            Notification::send($superAdmins, new ContactFormNotification($formData));
        } else {
            Log::warning('No super admin found to notify.');
        }

Notification::route('mail', $formData['email'])
    ->notify(new ContactFormSubmittedNotification($formData));

        session()->flash('flash.banner', "Thank you $this->first_name, your message has been sent successfully!");
        session()->flash('flash.bannerStyle', 'success');


        // Reset fields after submission
        $this->reset(['first_name', 'last_name', 'company', 'email', 'subject', 'message']);


        // Optionally return or do something else
        // e.g. redirect to a Thank You page
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
