<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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
// list all restaurants
Route::get('/', [RestaurantController::class, 'index']);
// list single restaurant
Route::get('/restaurant/{id}', [RestaurantController::class, 'show']);
// create a restaurant
Route::post('/restaurant', [RestaurantController::class, 'store']);
// update a restaurant
Route::put('/update', [RestaurantController::class, 'update']);
// add a menu to a restaurant
Route::post('/menu', [RestaurantController::class, 'add_menu']);


Route::get('/search', [RestaurantController::class, 'search']);

Route::get('/basket', function () {
    return view('basket');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('profile.welcome');
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

Route::middleware(['auth:sanctum', 'verified'])->get('/my_restaurants', [RestaurantController::class, 'user_restaurants'])->name('my_restaurants');

Route::middleware(['auth:sanctum', 'verified'])->get('/restaurant/{id}/edit', [RestaurantController::class, 'edit_view'])->name('edit_restaurant');

Route::middleware(['auth:sanctum', 'verified'])->get('/restaurant/{id}/add_menu', [RestaurantController::class, 'add_menu_view'])->name('add_menu');
