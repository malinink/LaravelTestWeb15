<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
        protected $table = 'countries';
        protected $fillable = ['identity','name','nameanime','language','area','year','sibling'];
        public $timestamps=false;
}
