<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Protected date turns the $date into a Carbon date.
     */
    protected $dates = ['date'];

    /**
     * Fillable fields for a player.
     */
    protected $fillable = [
        'id',
        'sheet_date',
        'team_home',
        'team_away',
        'date',
        'shirts',
        'socks',
        'push_back',
        'meet_time',
        'meet_venue',
        'umpire_1',
        'umpire_2'
    ];

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
