<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/created', 'App\Http\Controllers\ProductController@created')->name("product.created");
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name("contact.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/about', function () {

    $data1 = "About us - Online Store";
    
    $data2 = "About us";
    
    $description = "This is an about page ...";
    
    $author = "Developed by: Your Name";
    
    return view('home.about')->with("title", $data1)
    
    ->with("subtitle", $data2)
    
    ->with("description", $description)
    
    ->with("author", $author);
    
    })->name("home.about");