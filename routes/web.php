<?php

use Illuminate\Support\Facades\Route;
use App\Pizza;

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

    $pizzas = Pizza::all();

    return view('guest.welcome', compact('pizzas'));
});

Auth::routes();

Route::middleware('auth')
        ->name('admin.')
        ->prefix('admin')
        ->namespace('Admin')
        ->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('pizzas', 'PizzaController');
});
