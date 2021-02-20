<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'ann_title', 'ann_start', 'ann_end', 'ann_affected', 'ann_other', 'link', 'attachment'
    ];

    // protected $dates = [
    //     'ann_start',
    //     'ann_end',
    // ];
}
