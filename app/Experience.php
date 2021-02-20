<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;

class Experience extends Model
{
    protected $fillable = [
        'date_from', 'date_to', 'work_description', 'work_place',
    ];

    protected $dates = [
        'date_from', 'date_to',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
