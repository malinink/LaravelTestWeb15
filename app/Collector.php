<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    protected $table = 'collectors';
    
    protected $fillable = ['name'];
    
    public $timestamps = false;
    
    public function fruits()
    {
        return $this->belongsToMany(
            'App\Fruit',
            'blabla',
            'fruit_id',
            'collector_id'
        );
    }
}
