<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Secondary;
use App\Elementary;
use App\College;

class GraduateStudy extends Model
{

    protected $fillable = [
        'name_of_school', 'level_units_earned', 'graduated_date_from', 'graduated_date_to',
        'academic_reward', 'course', 'degree',
    ];

    protected $dates = [
        'graduated_date_from', 'graduated_date_to',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
