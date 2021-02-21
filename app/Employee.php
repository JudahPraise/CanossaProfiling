<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Auth;

class Employee extends Model
{
    use Notifiable;
    
    protected $fillable = [
        'employee_id', 'firstname', 'lastname', 'middlename', 'department', 'position', 'bio', 'image',
    ];

    public function getFullName(){

        return $this->lastname . ' '. $this->firstname .' '. $this->middlename;
    }
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
