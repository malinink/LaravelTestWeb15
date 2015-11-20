<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    /**
     * The database table used by the model.
     * 
     * @var string
     */
    protected $table = 'fruits';
    
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'identity', 'name', 'color', 'weight', 'price', 'condition'
        ];

}
