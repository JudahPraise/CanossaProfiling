<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable =[
        'sender', 'send_to', 'send_to_all', 'message', 'link', 'file', 'read',
    ];
}
