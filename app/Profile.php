<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Mass assignable attributes
    protected $fillable =['user_id', 'name', 'location', 'pdga#', 'sponsor'];

    //Defines the relationship between profile/user -> each profile belongs to a single user
    public function profile() {
        return $this->belongsTo(User::class);
    }
}
