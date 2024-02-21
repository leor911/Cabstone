<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;


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

//Index routes
Route::get('/', function () {
    return view('index');
});

Route::get('/login', function(){
    return view('login');
});

Route::post('/login/confirm', [LoginController::class, 'login']);

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');


//Map routes
Route::get('/map', function () {
    return view('map');
});

//About page routes
Route::get('/about',function(){
    return view('about');
});

//Contact page routes
Route::get('/contact',function(){
    return view('contact');
});

//Property List page routes
Route::get('/propertyList',function(){
    return view('propertyList');
});

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', [test::class, 'show'])->name('test.show');

require __DIR__.'/auth.php';