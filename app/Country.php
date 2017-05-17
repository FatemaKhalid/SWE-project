<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function continent()
    {
        return $this->belongsTo('App\Continent');
      
    }
}
