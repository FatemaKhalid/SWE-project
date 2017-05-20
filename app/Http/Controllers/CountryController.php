<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Continent;
use App\Country;
use Auth;
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

    public function getcontinents()
    {
        $continenets=Continent::get();
        return view('admin.dropdown-countries',compact('continenets'));
    }

    public function add_country(Request $request)
    {

        if(Auth::check())
      {
          $country = new Country;
          $country ->name=$request->get('country');
           $country->continent_id=$request->get('continenet');
          $exist=Country::where('name',$request->get('country'))->get();
          if(count($exist)>0)
          {
             $request->session()->flash('alert-success', 'This country already exist!');
          }
           else if ($country->save())
            {
             $request->session()->flash('alert-success', 'This country has been added!');
            }
          

            return back();
       }
      else 
        {
          return redirect('/home');
        }
     
         
    }
}