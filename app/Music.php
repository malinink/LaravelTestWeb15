<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'mymusic';
    protected $fillable = [
      'singername',
        'style',
        
    ];
}
