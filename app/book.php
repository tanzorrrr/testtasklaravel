<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['_token','title', 'autor', 'publishment', 'date'];
}
