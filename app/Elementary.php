<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;

class Elementary extends Model
{
    protected $fillable = [
        'name_of_school', 'level_units_earned', 'graduated_date_from', 'graduated_date_to',
        'academic_reward',
    ];

    protected $dates = [
        'graduated_date_from', 'graduated_date_to',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
