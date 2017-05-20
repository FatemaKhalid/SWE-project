<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/yarab', function () {
    return view('yarab');
})->name('yarab');

/*Route::get('/articles', function () {
    return view('articles');
})->name('articles');*/

Route::get('/articles/{count_id}/{type}',[
    'as' => 'articles',
    'uses' =>'ArticleController@articles'
]);

/*Route::get('/africa', function () {
    return view('africa');
})->name('africa');*/

//Route::get('africa','homeController@africa')->name('africa');

//Route::get('/africa/{loc_id}', ['uses' =>'homeController@africa']);


Route::get('/africa/{loc_id}',[
    'as' => 'africa',
    'uses' =>'CountryController@africa'
]);




Route::get('/get/{id}',"ContinentController@get")->name("getcontinent");



Route::get('/ProductMain',"ProductController@get_products")->name("ProductMain");




Route::get('/ProductSingle/{product_id}',[
    'as' => 'ProductSingle',
    'uses' =>'ProductController@get_single_product'
]);


Route::post('saveimage','homeController@Save')->name('save.image');

Route::post('insertarticle','ArticleController@Upload')->name('save.article');


Route::post('insertadvice','AdviceController@Upload')->name('save.advice');




Route::post('submitorder','OrderController@Submit')->name('submitorder');

Route::get('/image', function () {


   return view('image');
});






Route::get('/insertArticle',"ArticleController@insert_article")->name('insertArticle');

Route::get('/insertAdvice',"AdviceController@insert_article")->name('insertAdvice');

Route::get('/singlearticle/{article_id}/{count_id}',"ArticleController@get_single_article")->name('singlearticle');

Route::get('/search4', function () {
    return view('search');
});
Route::post('/search',"ProductController@search_products")->name('search');


Route::get('/increaselikes/{article_id}/{new_likes}',"ArticleController@increaselikes")->name('increaselikes');

Route::get('/decreaselikes/{article_id}/{new_likes}',"ArticleController@increaselikes")->name('increaselikes');

Route::get('/advicesMain',"AdviceController@advices")->name("advicesMain");

Route::get('/singleadvice/{article_id}',"AdviceController@get_single_article")->name('singleadvice');

Route::get('/increaselikesadvice/{article_id}/{new_likes}',"AdviceController@increaselikes")->name('increaselikes');

Route::get('/decreaselikesadvice/{article_id}/{new_likes}',"AdviceController@increaselikes")->name('increaselikes');


Route::post('/searchArticles',"ArticleController@search_articles")->name('searchArticles');
Route::post('/searchAdvices',"AdviceController@search_advices")->name('searchAdvices');


Route::get('/tgrba',function(){
    return view('tgrba');
})->name('welcome');

Route::post('/submit', function(Illuminate\Http\Request $request){
    $content = $request['content'];
    return view('output',['content'=>$content]);
})->name('submit');
Route::get('/addProduct','ProductController@add')->name('addProduct');



Route::post('/saveProduct','ProductController@Save')->name('saveProduct');
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/changepass', 'AdminController@showResetForm')->name('change.pass.form');

Route::post('/changepass', 'AdminController@reset')->name('pass.change');

Route::get('/changeUserName', 'AdminController@showUserNameForm')->name('changeUserName');

Route::post('/changeUserName', 'AdminController@changeUserName')->name('changeUserName');


Route::get('/viewOrders','OrderController@view')->name('viewOrders');


Route::get('/check_back',"AdminController@check_back")->name('check_back');



Route::get('/reviewOrder/{order_id}','OrderController@review')->name('reviewOrder');
Route::get('/showProducts','ProductController@get_products_for_admin')->name('showProducts');
Route::get('/showProductSingle/{product_id}',[
    'as' => 'showProductSingle',
    'uses' =>'ProductController@get_single_product_for_admin'
]);

Route::post('/updateProduct',[
    'as' => 'updateProduct',
    'uses' =>'ProductController@update_product'
]);
Route::post('/changeProductPic','ProductController@change_pic')->name('changeProductPic');
Route::post('/delProduct','ProductController@del_product')->name('delProduct');


Route::get('/admin_menu', function () {


   return view('AdminMenu');
});


//fatema
Route::get('/Admincountry','ArticleController@countriesTodelete')->name('countriesTodelete');

//Route::match(['get', 'post'],'/Adminarticles','ArticleController@showTodelete')->name('showTodelete');

Route::post('/Admincountry','ArticleController@showTodelete')->name('showTodelete');

Route::post('/add_contact',"AdminController@Addcont")->name('add_contact');
Route::post('/delete_contact',"AdminController@Delcont")->name('delete_contact');
Route::post('/delArts',"ArticleController@delArts")->name('delArts');

Route::get('/Admincontacts','AdminController@contacts')->name('contacts');

Route::post('/searchArdticlesAdmin','ArticleController@search_articles_admin')->name('searchArdticlesAdmin');

Route::get('/Adminadvices','AdviceController@get_advices_admin')->name('Adminadvices');
Route::post('/AdminadvicesSearch','AdviceController@search_advices_admin')->name('AdminadvicesSearch');

// Route::get('/dropdowCountries',function(){
//       return view('admin.dropdown-countries');
// });


Route::get('/dropdowCountries','CountryController@getcontinents')->name('dropdowCountries');



Route::post('/add_country','CountryController@add_country')->name('add_country');


//fatema############################Advics of admin########################
Route::get('/Adminadvices','AdviceController@get_advices_admin')->name('Adminadvices');
Route::post('/AdminadvicesSearch','AdviceController@search_advices_admin')->name('AdminadvicesSearch');
Route::get('/AdminAdvices','AdviceController@advicesToDelete')->name('advicesToDelete');
Route::post('/AdminAdvices',"AdviceController@delAdvs")->name('delAdvs');

