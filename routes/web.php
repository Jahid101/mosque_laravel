<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\About;
use App\Http\Controllers\Backend\Donate;
use App\Http\Controllers\Backend\Home;
use App\Http\Controllers\Backend\Event;


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

// Route::get('/home', function () {
//     return view('backend.home');
// });

// Route::get('/', function () {
//     return view('backend.home');
// });

// Route::get('/', function () {
//     return view('backend.');
// });

Route::get('/home',[Home::class,'home'])->name('home');

Route::get('/about',[About::class,'about'])->name('about');

Route::get('/donate',[Donate::class,'donate'])->name('donate');

Route::get('/event',[Event::class,'event'])->name('event');
