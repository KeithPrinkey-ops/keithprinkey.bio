<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ContactFormNotification extends Notification
{
    use Queueable, SerializesModels;
    use InteractsWithQueue;

    public int $user_id;

    public User $user;
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
        $this->user = User::find($this->formData['super-admin_id'] ?? $notifiable->id);
        return (new MailMessage)
            ->subject('New Contact Form Submission')
            ->greeting('Hello, ' . $this->user->name . '!')
            ->line('You have a new contact form submission.')
            ->line('Name: ' . $this->formData['first_name'] . ' ' . $this->formData['last_name'])
            ->line('Email: ' . $this->formData['email'])
            ->line('Company: ' . $this->formData['company'] ?? '-')
            ->line('Subject: ' . $this->formData['subject'])
            ->line('Message: ' . $this->formData['message']);

    }

    public function toDatabase($notifiable): array
    {

        return [
            'first_name' => $this->formData['first_name'],
            'last_name' => $this->formData['last_name'],
            'email' => $this->formData['email'],
            'company' => $this->formData['company'] ?? null,
            'subject' => $this->formData['subject'],
            'message' => $this->formData['message'],
        ];
    }

    public function toArray($notifiable): array
    {
        return $this->toDatabase($notifiable);
    }
}
