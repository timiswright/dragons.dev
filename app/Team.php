<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * Fillable fields for a Team.
     */
    protected $fillable = [
            'team_name'
        ];

    public function players()
    {
        return $this->hasMany('App\Player');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
