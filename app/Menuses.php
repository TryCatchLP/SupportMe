<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menuses extends Model
{
    protected $fillable = ['title', 'ingredients'];
    public $timestamps =false;
}
