<?php
namespace App\Notifications;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
class ContactFormSubmittedNotification extends Notification
{
    public array $formData;
    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }


    public function via($notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable): MailMessage
    {
return (new MailMessage)
    ->replyTo($this->formData['email'])
    ->subject('Your Contact Form Submission')
    ->greeting('Hello, ' . $this->formData['first_name'] . '!')
    ->line('Here is your new contact form submission.')
    ->line('Name: ' . $this->formData['first_name'] . ' ' . $this->formData['last_name'])
    ->line('Email: ' . $this->formData['email'])
    ->line('Company: ' . ($this->formData['company'] ?? '-'))
    ->line('Subject: ' . $this->formData['subject'])
    ->line('Message: ' . $this->formData['message']);
    }



    public function toDatabase($notifiable): array
    {
        return [

            'form_data' => $this->formData,
            'message' => 'A new contact form has been submitted.',
            'created_at' => now(),
            ];
    }


    public function toArray($notifiable): array
    {
        return [

            'form_data' => $this->formData,
            'message' => 'A new contact form has been submitted.',
            'created_at' => now(),

            ];

    }
}
