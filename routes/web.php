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

Route::get('/Adminarticles', function () {
    return view('Adminarticles');
})->name('Adminarticles');

// Route::get('/Admincontacts', function () {
//     return view('Admincontacts');
// })->name('Admincontacts');
Route::get('/Admincontacts','AdminController@contacts')->name('contacts');
Route::post('/Admincontacts','AdminController@Addcont');//->name('contact');


Route::get('/articles/{count_id}/{type}',[
    'as' => 'articles',
    'uses' =>'ArticleController@articles'
]);

Route::get('/africa/{loc_id}',[
    'as' => 'africa',
    'uses' =>'homeController@africa'
]);




Route::get('/get/{id}',"ContinentController@get")->name("getcontinent");



Route::get('/ProductMain',"ProductController@get_products")->name("ProductMain");




Route::get('/ProductSingle/{product_id}',[
    'as' => 'ProductSingle',
    'uses' =>'ProductController@get_single_product'
]);


Route::post('saveimage','homeController@Save')->name('save.image');

Route::post('insertarticle','ArticleController@Upload')->name('save.article');

Route::post('submitorder','OrderController@Submit')->name('submitorder');

Route::get('/image', function () {


   return view('image');
});



// awl 7route ele bygeb l countries
Route::get('/Admincountry','ArticleController@countriesTodelete')->name('countriesTodelete');
Route::get('/Adminhome', function () {
    return view('Adminhome');
})->name('Adminhome');


Route::post('/Adminarticles','ArticleController@showTodelete')->name('showTodelete');



Route::get('/insertArticle',"ArticleController@insert_article")->name('insertArticle');

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


Route::post('/add_contact',"AdminController@Addcont")->name('add_contact');
Route::post('/delete_contact',"AdminController@Delcont")->name('delete_contact');
Route::post('/delArts',"ArticleController@delArts")->name('delArts');