<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Country;
use Storage;

use Auth;
class ArticleController extends Controller
{
    
    public function articles($count_id,$type)
    {
      $articles=Country::find($count_id)->articles()->where('type',$type)->orderBy('no_of_likes', 'asc')->get();
     

      return view('articles',compact('articles','count_id'));
    }

     public function get_single_article($article_id,$count_id)
    {
      $article= Article::select('title','body','pic','id','no_of_likes')->where('id',$article_id)->get();
  // $article= Article::find($article_id);
  //return response()->json($article,200);
      return view('ArticleSingle',compact('article','count_id'));
     
    }

     public function increaselikes ($article_id,$new_likes)
    {
      Article::where('id', $article_id)->update(['no_of_likes' => $new_likes]);
      return back();

    }
   public function decreaselikes ($article_id,$new_likes)
    {
      Article::where('id', $article_id)->update(['no_of_likes' => $new_likes]);
      return back();

    }
  	public function insert_article()
    {
  

      if(Auth::check())
      {
    	$countries= Country::orderBy('name', 'asc')->get();
    //	Article::find($article_id);
//return response()->json($article,200);
    	return view('insertArticle',compact('countries'));
     }
      else 
        {
          return redirect('/home');
        }
  	}

  	public function Upload(Request $request)
  {


           $result=Article::where('title',$request->get('article_name'))->get();
          if ($result->isEmpty()) { 

          $path=Storage::disk('public')->put('images',$request->file('image'));
          $Article = new Article;
          $Article->title=$request->get('article_name');
          $Article->body=$request->get('content');
          $Article->pic=$path;
          $Article->country_id=$request->get('countries');
          $Article->type=$request->get('type');
          $Article->no_of_likes=0;
            if($Article->save()) {

              $has_articles= Country::select('has_articles')->find($request->get('countries'));
              
              if($has_articles[0]==0)
              {
                Country::where('id', $request->get('countries'))->update(['has_articles' => 1]);
              }

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


      public function search_articles(Request $request)
    {
        $q=$request->get('search');
       $count_id= $request->get('p_id');
        if($q!="")
        {
        // $q = Input::get ( 'q' );
    $articles_s = Article::where('title','LIKE','%'.$q.'%')->get();
    if(count($articles_s) > 0)
        return view('ArticlesSearchRes',compact('articles_s','count_id'));
    else return view ('ArticlesSearchRes')->withMessage('لا توجد مقالات مطابقة لبحثك ')->with('count_id');
        }
        else return view ('ArticlesSearchRes')->withMessage(' لم تقم بادخال كلمة للبحث')->with('count_id');
    }
    


    public function showTodelete(Request $request)
    {
       if(Auth::check())
      {
      $articles= Article::select('title','body','pic','id')->where('country_id',$request->get('countries'))->where('type', '=', $request->get('type'))->get();
       $countries= Country::orderBy('name', 'asc')->get();
     // return view('Adminarticles',compact('articles'));
         return view('Admincountry',compact('countries','articles'));
       }
      else 
        {
          return redirect('/home');
        }
     
    }

    public function countriesTodelete()
    {
  
  if(Auth::check())
      {
      $countries= Country::orderBy('name', 'asc')->get();

       $articles= Article::select('title','body','pic','id')->where('country_id','-1')->get();

      return view('Admincountry',compact('countries','articles'));
      }
      else 
        {
          return redirect('/home');
        }
     
    }
public function delArts(Request $request)
    { 
      if(Auth::check())
               {
    
        $orgIds = $request->get('article_ids');
        $array = explode(',', $orgIds);

//return $array;
       Article::destroy( $array);

       $articles= Article::select('title','body','pic','id')->where('country_id',$request->get('countries'))->where('type', '=', $request->get('type'))->get();
       $countries= Country::orderBy('name', 'asc')->get();
     return view('Admincountry',compact('countries','articles'));
//return redirect(Request::url("/Admincountry"));
       
   }
       else {
                       return redirect('/home');

       }
    }


    public function search_articles_admin(Request $request)
    {
       $q=$request->get('search');

        $countries= Country::orderBy('name', 'asc')->get();
    
    $articles = Article::where('title','LIKE','%'.$q.'%')->get();
        return view('Admincountry',compact('countries','articles'));
        
    }

    
    }





  