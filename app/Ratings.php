<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    protected $fillable = ['stars', 'user_id', 'hueca_id', 'comentario'];
}
