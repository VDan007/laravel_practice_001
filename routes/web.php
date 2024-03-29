<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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



//get all listings
Route::get('/', function () {
    return view('listings',[
        'a' => 'aa',
        'listings' => Listing::all()
    ]);
});

//get signle listing
Route::get('/listings/{id}',function ($id){
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});
