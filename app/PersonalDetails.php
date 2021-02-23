<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
