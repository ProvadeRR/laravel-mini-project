<?php


namespace App\Services;


use App\Models\User;

class NotificationService
{
    public function getNotifications(User $user){
        $notification = $user->notifications();
        if(!(bool)$notification->count()){
            return null;
        }
        $notifications = $notification->select('data')->get();
        return $notifications;

    }
}
