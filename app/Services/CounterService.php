<?php


namespace App\Services;

use App\Models\User;

class CounterService
{
    /**
     * @return int
     */
    public function usersCount():int
    {
        return User::all()->count();
    }

}
