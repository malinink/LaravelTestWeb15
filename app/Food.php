<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable = array(
        'name'
    );
    public $timestamps = false;
    
    public function whales()
    {
    
        return $this->belongsToMany('App\Whale');
    }
}
