<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //Defines the relationship between user and courses: Allows user to have many courses loaded
    public function courses() {
        return $this->hasMany(Courses::class);
    }

    //Defines the relationship between user and rounds:  Allows user to have many rounds
    public function rounds() {
        return $this->hasMany(Rounds::class);
    }

}
