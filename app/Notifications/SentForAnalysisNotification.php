<?php

namespace App\Notifications;

use App\OrderApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SentForAnalysisNotification extends Notification
{
    use Queueable;

    /**
     * @var OrderApplication
     */
    private $orderApplication;

    public function __construct(OrderApplication $orderApplication)
    {
        $this->orderApplication = $orderApplication;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('A request for order application analysis has been sent to you.')
                    ->action('See Application', route('admin.order-applications.show', $this->orderApplication))
                    ->line('Thank you for using our application!');
    }
}