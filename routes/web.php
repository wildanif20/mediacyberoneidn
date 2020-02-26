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

use App\Article;
use App\Category;

Route::get('/', function () {
    $data = DB::table('articles')->paginate(3);
    return view('welcome')->with('data', $data);
});
Route::get('/cat', function () {
    $ca = DB::table('categories')->get();
    return view('welcome')->with('data', $ca);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/berita', 'ArticleController');
Route::resource('/kategori', 'CategoryController');
Route::resource('/headnews', 'HeadlingController');
Route::get('/redaksi', 'ArticleController@showRedaksi')->name('redaksi.struktur');
