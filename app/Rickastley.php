<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rickastley extends Model
{
    public $timestamps = false;

    protected $fillable = ['identity', 'firstname', 'lastname', 'rate'];
}
