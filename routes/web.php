<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\About;
use App\Http\Controllers\Backend\Donate;
use App\Http\Controllers\Backend\Home;
use App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Backend\Announcement;
use App\Http\Controllers\Backend\Event;
use App\Http\Controllers\Backend\Food;
use App\Http\Controllers\Backend\Fund;



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


Route::get('/',[Home::class,'home'])->name('home');

Route::get('/home',[Home::class,'home'])->name('home');

Route::get('/about',[About::class,'about'])->name('about');

Route::get('/donate',[Donate::class,'donate'])->name('donate');

Route::get('/announcement',[Announcement::class,'announcement'])->name('announcement');

Route::get('/event',[Event::class,'event'])->name('event');

Route::get('/food',[Food::class,'food'])->name('food');

Route::get('/fund',[Fund::class,'fund'])->name('fund');

Route::get('/admin',[Admin::class,'admin'])->name('admin');
