<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;

use App\Http\Controllers\Zillow;

use App\Http\Controllers\CreatePropertyController;
use App\Http\Controllers\ViewPropertiesController;



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
Route::get('/propertyList',[ViewPropertiesController::class,'viewProperties']);

Route::get('/termsOfService',function(){
    return view('/termsOfService');
});

//Test
Route::get('/test', [test::class, 'show'])->name('test.show');






Route::get('/properties', [Zillow::class, 'getPropertyDetails']);

//Create Property page routes
Route::get('/createProperty',function(){
    return view('/createProperty');
});
Route::post('/createProperty',[CreatePropertyController::class,'createProperty']);

require __DIR__.'/auth.php';

