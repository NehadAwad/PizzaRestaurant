<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// pizza routes
Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->middleware('auth');
Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create');
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@store');
Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show')->middleware('auth');
Route::delete('pizzas/{id}', 'App\Http\Controllers\PizzaController@destroy')->middleware('auth');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
