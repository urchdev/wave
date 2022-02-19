<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UploadReportNotification extends Notification
{
    use Queueable;
    private $uploadRequestData;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($uploadRequestData)
    {
        $this->uploadRequestData = $uploadRequestData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
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
                    ->greeting($this->uploadRequestData['name'])
                    ->line($this->uploadRequestData['body'])
                    ->action($this->uploadRequestData['todoTask'], $this->uploadRequestData['targetURL'])
                    ->line('Do proceed to complete Task!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //'notify_id' => $this->uploadRequestData['active_id']
            'data'=>'We have a new notification '.$this->uploadRequestData['name']." Added By ".auth()->user()->name
        ];
    }
}
