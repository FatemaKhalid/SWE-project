<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
	use App\Country;

class ArticleController extends Controller
{
	
    public function articles($count_id)
    {
      $articles=Country::find($count_id)->articles;

      return view('articles',compact('articles'));
    }
}
