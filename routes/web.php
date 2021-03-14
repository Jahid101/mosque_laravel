<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\About;
use App\Http\Controllers\Backend\Donate;


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

Route::get('/admin', function () {
    return view('backend.admin');
});

// Route::get('/about', function () {
//     return view('backend.contents.about');
// });

Route::get('/about',[About::class,'about'])->name('about');

Route::get('/donate',[Donate::class,'donate'])->name('donate');
