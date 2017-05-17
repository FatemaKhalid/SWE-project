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
});
Route::get('/yarab', function () {
    return view('yarab');
})->name('yarab');

/*Route::get('/articles', function () {
    return view('articles');
})->name('articles');*/

Route::get('/articles/{count_id}',[
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
    'uses' =>'homeController@africa'
]);

Route::get('/mainart',[
    'as' => 'mainart',
    'uses' =>'homeController@mainart'
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






Route::get('/insertArticle',"ArticleController@insert_article")->name('insertArticle');

Route::get('/singlearticle/{article_id}',"ArticleController@get_single_article")->name('singlearticle');

Route::get('/search4', function () {
    return view('search');
});
Route::any('/search',"ProductController@search_products");
