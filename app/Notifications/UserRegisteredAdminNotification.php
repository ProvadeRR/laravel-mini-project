<?php

namespace App\Notifications;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Notifications\Notification;

class UserRegisteredAdminNotification extends Notification
{
    private $user;

    /**
     * Create a new notification instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param $notifiable
     * @return string[]
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * @param $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {

        return [
            'id' => $this->user->id,
            'name_surname' => $this->user->full_name,
            'email' => $this->user->email,
            'time' => Carbon::parse($this->user->created_at)->format('d.m.Y H:i'),
            'message' => 'Пользователь успешно зарегистрировался в системе',

        ];
    }
}
