<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App\Models
 * @param string $name;
 * @param string $email;
 * @param string $password;
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, hasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
    ];

    /**
     * @var array
     */
    protected $dates = [
        self::CREATED_AT,
        self::UPDATED_AT,
    ];


    /**
     * @var string[]
     */
    protected $appends = [
        'full_name'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @return bool
     */
    public function isAdmin():bool
    {
        return $this->getRoleNames()->contains('admin');
    }

    /**
     * @return string
     */
    public function getFullNameAttribute(){
        return $this->name . ' ' . $this->surname;
    }



}
