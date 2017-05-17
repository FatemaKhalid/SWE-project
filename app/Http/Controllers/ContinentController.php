<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continent ;

class ContinentController extends Controller
{
    //

     function get($id)
    {
    	$response=Continent::find($id);
    	
    	return response()->json($response,200);

    }
}
