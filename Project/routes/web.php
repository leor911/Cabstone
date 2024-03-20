<?php

use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Zillow;
use App\Http\Controllers\MortgageCalculator;
use App\Http\Controllers\CreatePropertyController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ViewPropertiesController;
use App\Http\Controllers\RoleCheck;




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

Route::get('/', [ViewPropertiesController::class, 'viewPropertiesIndex'])->name('index')->middleware('rolecheck:realtor');

Route::get('/login', function(){
    return view('login');
});

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

//Map routes
Route::get('/map', [MapController::class, 'mapView']);

//About page routes
Route::get('/about',function(){
    return view('about');
});

//Contact page routes
Route::get('/contact',function(){
    return view('contact');
});

//Property List page routes
Route::get('/propertyLists',function(){
    return view('propertyList');
});
Route::get('/propertyList',[ViewPropertiesController::class,'viewProperties']);

Route::get('/termsOfService',function(){
    return view('/termsOfService');
});

Route::get('/test',function(){
    return view('/test5');
});

//Test
Route::get('/test2', [test::class, 'show'])->name('test.show');




Route::get('/properties', [Zillow::class, 'getPropertyDetails']);

//Create Property page routes
Route::get('/createProperty', function () {
    return view('createProperty');
})->middleware('rolecheck:realtor');


Route::post('/createProperty',[CreatePropertyController::class,'createProperty']);

require __DIR__.'/auth.php';


Route::get('/mortgage-calc', [MortgageCalculator::class, 'showCalculator'])->name('mortgage.calculator');

Route::post('/mortgage-calc', [MortgageCalculator::class, 'calculate'])->name('mortgage.calculate');

Route::get('/mortgage-result', function () {
    return view('mortgageCalc');
})->name('mortgage.result');


Route::get('/header',function(){
    return view('/header');
});



