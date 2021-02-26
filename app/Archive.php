<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $fillable = [
        'employee_id', 'firstname', 'lastname', 'middlename', 'department', 'position', 'bio', 'image',
    ];

    public function getFullName(){

        return $this->lastname . ' '. $this->firstname .' '. $this->middlename;
    }
    

}
