<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huecasmenuses extends Model
{
    protected $fillable = [
        "menu_id", "hueca_id", "price"
    ];
    public $timestamps =false;
}
