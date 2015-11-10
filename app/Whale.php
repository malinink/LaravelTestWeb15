<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whale extends Model
{
    protected $table = 'whales';
    protected $fillable = array(
        'identity',
        'firstname',
        'lastname',
        'sex',
        'fruit',
        'hobby'
    );
    public $timestamps = false;
}
