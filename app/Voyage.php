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

    public function destination() 
    {
        return $this->hasOne('App\Destination');
    }

    public function photos() 
    {
        return $this->hasMany('App\Photo');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
