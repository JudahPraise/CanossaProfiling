<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminMessage extends Model
{
    protected $fillable = [
        'sender', 'send_to', 'name', 'send_to_all', 'message', 'link', 'file',
        'read',
    ];
}
