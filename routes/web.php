<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
// dump(config('app.locale'));
// dump(config('app.env'));

// // $cache = app()->make('cache');
// // $cache->put('test', 123);
// // dd($cache->get ('test', 'default'));
// dd(cache());

//     return view('welcome');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
