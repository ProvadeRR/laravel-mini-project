<?php

namespace App\Listeners;

use App\Events\RegisteredUser;
use App\Jobs\RegisterUserSendAdminJob;
use Illuminate\Auth\Events\Registered;

class UserRegisteredListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegisteredUser  $event
     * @return void
     */
    public function handle(RegisteredUser $event)
    {
        RegisterUserSendAdminJob::dispatch($event->user);
    }
}
