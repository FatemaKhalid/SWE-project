<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Continent;
class CountryController extends Controller
{
    public function africa($loc_id)
    {
    //	$data=homeModel::all();
    	
    	
        $continent=Continent::find($loc_id);;
        return view('africa',compact('continent'));
    
      /*   $data['loc_id'] = $loc_id;
       return View::make('africa', $data);*/
    }
}