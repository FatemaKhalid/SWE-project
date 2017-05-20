<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Log;
use App\Acontact;

class AdminController extends Controller
{
    public function showResetForm(Request $request, $token = null)
    {
    	if(Auth::check()){
    		$token=Auth::user()->remember_token;
        return view('auth.passwords.change')->with(
            ['token' => $token, 'email' => $request->email]
        );
        }
        else 
        {
        	return redirect('/home');
        }


    }

    public function showUserNameForm(Request $request, $token = null)
    {
        if(Auth::check()){
            $token=Auth::user()->remember_token;
        return view('auth.passwords.changeUserName')->with(
            ['token' => $token, 'email' => $request->email]
        );
        }
        else 
        {
            return redirect('/home');
        }


    }


    public function changeUserName(Request $request)
    {

        $this->validate($request, $this->rules2(), $this->validationErrorMessages());

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.


       if($request->get('email')== Auth::user()->email)  
        {

        if(Hash::check($request->get('old_password'), Auth::user()->password)) 
       {
       Auth::user()->forceFill([
            'name' => $request->get('new_user_name'),
            'remember_token' => Str::random(60),
        ])->save();
        return redirect('/home');
        }
        else {
             return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans("Password is not correct")]);
            }
        }
        else
        {
           return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans("The emial you enter isn't correct")]);
        }
      
      
    }


    public function reset(Request $request)
    {

        $this->validate($request, $this->rules(), $this->validationErrorMessages());

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.


       if($request->get('email')== Auth::user()->email)  
        {

        if(Hash::check($request->get('old_password'), Auth::user()->password)) 
       {
       Auth::user()->forceFill([
            'password' => bcrypt($request->get('password')),
            'remember_token' => Str::random(60),
        ])->save();
        return redirect('/home');
        }
        else {
             return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans("Old password is not correct")]);
            }
        }
        else
        {
           return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans("The emial you enter isn't correct")]);
        }
      
      
    }

    


    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ];
    }
protected function rules2()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
        ];
    }

    /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [];
    }


    public function check_back()
    {
         if (Auth::check())
           return response()->json([
    'success' => true,
     'login'   => '1'
]);
        else
            return response()->json([
    'success' => true,
     'login'   => '0'
]);
    }

     public function Addcont(Request $request){
        
    
               if(Auth::check())
               {
                $Acontact = new Acontact;
        $Acontact->phone=$request->get('contact');
        
            if ($Acontact->save())
            {
             $request->session()->flash('alert-success', 'This contact has been added!');
            }
            

               return back();


       
   }
       else {
                       return redirect('/home');

       }

    
     return back();


    }
     public function contacts()
    {

        if(Auth::check())
               {
      $contacts=Acontact::get(['phone','id']);

      return view('Admincontacts',compact('contacts'));


   }
       else {
                       return redirect('/home');

       }
    }





   public function Delcont(Request $request){
    
               if(Auth::check())
               {
        $contact=Acontact::find($request->get('cont_id'));
            if (!(empty($contact)))
            {
        $contact=Acontact::find($request->get('cont_id'))->delete();
            }
              $request->session()->flash('alert-success', 'This contact has been deleted!');

               return back();

    

       
   }
       else {
                       return redirect('/home');

       }

   }

}
