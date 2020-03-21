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


Route::get('/', function () {
    return view('welcome');
});

// basic route
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//route dengan parameter

// Route::get('/home/{id}', function ($id) {
//     return $id;
// }); 

// Route::get('/home/{slug}', function ($slug) {
//     return $slug;
// });

// route name
Route::get('/home/menu/category', function () {
    return view('home');
})->name('gambar');

// route prefix and route group
Route::prefix('admin')->group( function(){
    Route::get('home', function(){
        return 'admin home';
    });
    Route::get('about', function(){
        return 'admin about';
    });
});

Route::prefix('user')->group( function(){
    Route::get('home', function(){
        return 'user home';
    });
    Route::get('about', function(){
        return 'user about';
    });
});

// // route dengan controller
Route::get('home', 'HomeController@home');
Route::post('create', 'HomeController@create');
Route::get('edit/{id}', 'HomeController@edit');
Route::patch('edit/{id}', 'HomeController@update');
Route::delete('delete/{id}', 'HomeController@delete');

// route resource
// Route::get('todo', 'TodolistController@index');
// Route::get('todo/create', 'TodolistController@create');
// Route::post('todo', 'TodolistController@store');

// Route::resource('todo', 'TodolistController');