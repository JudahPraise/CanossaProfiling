<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'training_date', 'training_title', 'training_sponsor', 'training_certificate',
    ];

    protected $dates = [
        'training_date'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
