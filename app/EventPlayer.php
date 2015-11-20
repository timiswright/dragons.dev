<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPlayer extends Model
{
    public $table = "event_player";


/**
     * Fillable fields for a player.
     */
    protected $fillable = [
        'event_id',
        'player_id',
        'availability',
        'availability_notes'
    ];

    //protected $casts = [
    //'availability' => 'boolean',
    //];

    public function setAvailabilityNotesAttribute($name)
    {
        $this->attributes['availability_notes'] = trim($name) !== '' ? $name : null;
    }



}