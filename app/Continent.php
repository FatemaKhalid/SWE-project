<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //

    public function countries()
    {
    	$countries_all=$this->hasMany('App\Country');
    	
        return $countries_all->where('has_articles', 1);
    }
}
