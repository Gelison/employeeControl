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
// // dump(config('app.locale'));
// // dump(config('app.env'));

// // $cache = app()->make('cache');
// // $cache->put('test', 123);
// // dd($cache->get ('test', 'default'));
// dd(cache());

//     return view('welcome');
// });
Route::get('/', function () {
    return view('hi', ['title' => 'main page']);
});

Route::get('/post/{id?}', function ($id = 1) {
    return "Post ID: {$id}";
})->where(['id' => '[0-9]+']);
Route::get('/post/{$id}/comments/{comment_id}', function ($id, $comment_id) {
    return "Post ID: {$id}, Comment ID: {$comment_id}";
});
