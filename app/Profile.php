<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Mass assignable attributes
    protected $fillable =['user_id', 'name', 'age', 'location', 'pdgaNumber', 'sponsor', 'img_link'];

    //Defines the relationship between profile/user -> each profile belongs to a single user
    public function profile() {
        return $this->belongsTo(User::class);
    }


}
