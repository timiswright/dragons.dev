<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * Fillable fields for a player.
     */
    protected $fillable = [
            'first_name', 
            'last_name', 
            'gender',
            'email', 
            'mobile', 
            'team_id', 
            'rating',
            'position',
            'login_hash'
        ];

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
        ->withPivot("availability", "availability_notes")->withTimestamps();
    }

    
}
