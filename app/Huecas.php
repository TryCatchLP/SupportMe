<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huecas extends Model
{
    protected $fillable = [
        'name', 'descrip', 'lat', 'lng', 'schedule', 'photo', 'phone', 'stars', 'ratings', 'address'
    ];
    public $timestamps = false;
}
