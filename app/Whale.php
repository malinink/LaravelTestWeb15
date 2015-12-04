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
    
    public function foods()
    {
    
        return $this->belongsToMany('App\Food');
    }
    
    public function getFoodListAttribute()
    {
        
        return $this->foods->lists('id')->all();
    }
}
