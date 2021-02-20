<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'id', 'type_document', 'document_filename',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
