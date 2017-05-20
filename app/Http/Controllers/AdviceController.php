<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Advice;
use Storage;
use Auth;
class AdviceController extends Controller
{
     public function advices()
    {
      $advices=Advice::orderBy('no_of_likes', 'asc')->get();
     

      return view('advicesMain',compact('advices'));
    }
     public function advicesToDelete()
    {
       if(Auth::check())
               {
      $advices=Advice::get(['title','body','pic','id',]);

      return view('AdminAdvices',compact('advices'));


   }
       else {
                       return redirect('/home');

       }
    }
    public function delAdvs(Request $request)
    { 
      if(Auth::check())
               {
    
        $orgIds = $request->get('advices_ids');
        $array = explode(',', $orgIds);

//return $array;
       Advice::destroy( $array);

       $advices= Advice::get(['title','body','pic','id',]);


     return view('AdminAdvices',compact('advices'));
//return redirect(Request::url("/Admincountry"));
       
   }
       else {
                       return redirect('/home');

       }
    }

    public function get_single_article($article_id)
    {
      $article= Advice::select('title','body','pic','id','no_of_likes')->where('id',$article_id)->get();
  // $article= Article::find($article_id);
  //return response()->json($article,200);
      return view('singleadvice',compact('article'));
     
    }
 public function increaselikes ($article_id,$new_likes)
    {
      Advice::where('id', $article_id)->update(['no_of_likes' => $new_likes]);
      return back();

    }
   public function decreaselikes ($article_id,$new_likes)
    {
      Advice::where('id', $article_id)->update(['no_of_likes' => $new_likes]);
      return back();

    }
      public function search_advices(Request $request)
    {
        $q=$request->get('search');
        if($q!="")
        {
        // $q = Input::get ( 'q' );
    $advices = Advice::where('title','LIKE','%'.$q.'%')->get();
    if(count($advices) > 0)
        return view('AdvicesSearchRes',compact('advices'));
    else return view ('AdvicesSearchRes')->withMessage('لا توجد مقالات مطابقة لبحثك ');
        }
       else  return view ('AdvicesSearchRes')->withMessage('لم تقم بادخال كلمة للبحث ');

    }
    public function insert_article()
    {
  
    
    if(Auth::check())
      {
     return view('insertAdvice');
     }
      else 
        {
          return redirect('/home');
        }
     
     
    }
    
    public function Upload(Request $request)
  {




if(Auth::check())
      {
      $result=Advice::where('title',$request->get('article_name'))->get();
          if ($result->isEmpty()) { 

          $path=Storage::disk('public')->put('images',$request->file('image'));
          $Article = new Advice;
          $Article->title=$request->get('article_name');
           $Article->body=$request->get('content');
          $Article->pic=$path;
          
          
          $Article->no_of_likes=0;
            if($Article->save()) {

             

            //show message that article inserted

           }
          else
          {
           //show message could't insert error occured
          }

      }
      else
      {

         //show message that this article already exist
      }

      
       return back();
        

     }
      else 
        {
          return redirect('/home');
        }

          
  }

   public function get_advices_admin()
    {
       $advices=Advice::orderBy('no_of_likes', 'asc')->get();

      return view('AdminAdvices',compact('advices'));
    }
    
  public function  search_advices_admin(Request $request){
$q=$request->get('search');
    
    $advices = Advice::where('title','LIKE','%'.$q.'%')->get();
        return view('AdminAdvices',compact('advices'));
}

}
