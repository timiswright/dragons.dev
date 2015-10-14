<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function players()
    {
        return $this->belongsToMany('App\Player')
        ->withPivot("availability", "availability_notes");
    }

    public function eventplayers()
    {
        return $this->belongsTo('App\Event');
    }
}
