<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function events()
    {
        return $this->belongsToMany('App\Event')
        ->withPivot("availability", "availability_notes");
    }

    
}
