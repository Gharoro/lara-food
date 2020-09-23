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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/restaurant/{id}', function () {
    return view('restaurant');
});

Route::get('/basket', function () {
    return view('basket');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/list_restaurant', function () {
    return view('list_restaurant');
})->name('list_restaurant');

Route::middleware(['auth:sanctum', 'verified'])->get('/received_orders', function () {
    return view('received_orders');
})->name('received_orders');

Route::middleware(['auth:sanctum', 'verified'])->get('/placed_orders', function () {
    return view('placed_orders');
})->name('placed_orders');

Route::middleware(['auth:sanctum', 'verified'])->get('/my_restaurants', function () {
    return view('my_restaurants');
})->name('my_restaurants');

Route::middleware(['auth:sanctum', 'verified'])->get('/restaurant/{id}/edit', function () {
    return view('edit_restaurant');
})->name('edit_restaurant');


Route::middleware(['auth:sanctum', 'verified'])->get('/restaurant/{id}/add_menu', function () {
    return view('add_menu');
})->name('add_menu');
