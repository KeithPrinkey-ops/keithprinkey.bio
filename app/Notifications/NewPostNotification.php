<?php

        namespace App\Notifications;

        use App\Models\Post;
        use Illuminate\Bus\Queueable;
        use Illuminate\Contracts\Queue\ShouldQueue;
        use Illuminate\Notifications\Messages\MailMessage;
        use Illuminate\Notifications\Notification;

        class NewPostNotification extends Notification implements ShouldQueue
        {
            use Queueable;

            protected Post $post;

            /**
             * Create a new notification instance.
             */
            public function __construct(Post $post)
            {
                $this->post = $post;
            }

            public function toMail(object $notifiable): MailMessage
            {
                // The $notifiable object is the user who created the post.
                // Laravel automatically uses $notifiable->email as the recipient.
                return (new MailMessage)
                    ->subject('New Post Published: ' . $this->post->title)
                    ->greeting('Hello, ' . $notifiable->name . '!')
                    ->line('Your new blog post has been successfully published.')
                    ->action('View Post', route('blog.show', $this->post->slug))
                    ->line('Thank you for your contribution!');
            }

            /**
             * Get the notification's delivery channels.
             *
             * @return array<int, string>
             */
            public function via(object $notifiable): array
            {
                return ['database']; // We only need database notifications for the list
            }

            public function toDatabase(object $notifiable): array
            {
                return [
                    'id' => $this->post->id,
                    'user_id' => $this->post->user_id,
                    'title' => $this->post->title,
                    'slug' => $this->post->slug,
                    'excerpt' => $this->post->excerpt,
                    'body' => $this->post->body,
                    'hero_image_path' => $this->post->hero_image_path,
                    'thumb_image_path' => $this->post->thumb_image_path,
                ];
            }

            /**
             * Get the array representation of the notification.
             *
             * @return array<string, mixed>
             */
            public function toArray(object $notifiable): array
            {
                return $this->toDatabase($notifiable);
            }
        }
