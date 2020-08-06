<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

}
