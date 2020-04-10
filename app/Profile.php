<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Relation to user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
