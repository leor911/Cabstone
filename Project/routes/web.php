<?php

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
    return view('/index');
});

//Map routes
Route::get('/map', function () {
    return view('/map');
});

//About page routes
Route::get('/about',function(){
    return view('/about');
});

//Contact page routes
Route::get('/contact',function(){
    return view('/contact');
});

//Property List page routes
Route::get('/propertyList',function(){
    return view('/propertyList');
});

//Create Property page routes
Route::get('/createProperty',function(){
    return view('/createProperty');
});

Route::get('/textAction',function(){
    return view('/createProperty');
});

Route::get('/test', [test::class, 'show'])->name('test.show');
