<?php

use Dotenv\Util\Str;
use App\Http\Controllers\test;
use App\Http\Controllers\Zillow;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RoleCheck;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RealtorController;
use App\Http\Controllers\MortgageCalculator;
use App\Http\Controllers\CreatePropertyController;
use App\Http\Controllers\ViewPropertiesController;
use App\Http\Controllers\Auth\Admin\LoginController;

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


Route::get('/propertyListIndex', [Zillow::class, 'getPropertyDetailsIndex'])->name('propertyIndex.listings');
Route::get('/fetch-property-data', [Zillow::class, 'fetchDataFromAPI'])->name('fetch.property.data');
Route::get('/store-property-data', [Zillow::class, 'storeDataToDatabase'])->name('store.property.data');
Route::get('/fetch-agent-details', [Zillow::class, 'fetchAgentDetails'])->name('fetch.agent.details');


Route::get('/login', function(){
    return view('login');
});

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

Route::get('/property-listings', [Zillow::class, 'getPropertyDetails'])->name('property.listings');


//Realtor routes
// Route::get('/realtor', [RealtorController::class, 'viewRealtors']);

Route::get('/realtor', function () {
    return view('realtor');
});
Route::get('/realtor',[zillow::class,'findAgent']);

Route::get('/display-agent-results', [Zillow::class, 'displayAgentResults']);

Route::get('/realtorDashboard/{name}', [RealtorController::class, 'viewRealtorByURL']);

Route::post('/uploadImage', [RealtorController::class, 'uploadProfileImage']);

//Edit Profile Route
Route::get('/edit/{name}', [RealtorController::class, 'viewEditRealtor']);
Route::post('/edit/confirm', [RealtorController::class, 'editConfirm'])->name('edit.confirm');

//Admin routes
Route::get('/admin', function () {
    return view('adminDashboard');
});

Route::get('/propertyList',[ViewPropertiesController::class,'viewProperties']);

Route::get('/termsOfService',function(){
    return view('/termsOfService');
});

Route::get('/test',function(){
    return view('/test5');
})->name('test5');

//Test
Route::get('/realtor',function(){
    return view('realtor');
});
Route::get('/search', [Zillow::class, 'fetchAgentDetails'])->name('search');
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

Route::get('/test2', [test::class, 'fetchAgentDetails2'])->name('agent.results');



Route::get('/agent-results', [Zillow::class, 'findAgent'])->name('agent.results');


