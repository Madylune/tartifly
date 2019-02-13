<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    protected $fillable = [
        'label',
        'description',
        'country',
        'city',
        'token'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
