<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PersonalInformation extends Model
{
    protected $fillable = [
        'first_name', 'middle_name', 'surname', 'date_of_birth',
        'sex', 'citizenship', 'civil_status', 'height', 'weight', 
        'blood_type', 'address', 'zip_code', 'tel_number', 'cell_number', 
        'email_address', 'prc', 'gsis', 'sss', 'pag_ibig', 'driver_license', 'phil_health'
    ];

    protected $dates = [
        'date_of_birth'
    ];

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['date_of_birth'])->diff(Carbon::now())->format('%y');
    }


    public function getFullName(){

        return $this->surname . ' '. $this->first_name .' '. $this->middle_name;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
