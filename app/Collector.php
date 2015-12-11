<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    protected $table = 'collectors';
    
    protected $fillable = ['name', 'active'];
    
    public $timestamps = false;
    
    public function fruits()
    {
        return $this->belongsToMany(
            'App\Fruit',
            'fruit_collectors',
            'fruit_id',
            'collector_id'
        );
    }
}
