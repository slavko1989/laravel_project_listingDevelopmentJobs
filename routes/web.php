<?php
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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

//all listing
Route::get('/',[ListingController::class,'index']);

//singl listing



Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');

Route::post('/listings',[ListingController::class,'store']);

Route::get('/listings/{listing}/edit',
[ListingController::class,'edit'])->middleware('auth');

Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');

Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');

Route::get('/listings/menage',[ListingController::class,'menage'])->middleware('auth');

Route::get('/register',[UserController::class,'create'])->middleware('guest');

Route::post('/users',[UserController::class,'store']);

Route::post('/logout',[UserController::class,'logout']);

Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate',[UserController::class,'authenticate']);





Route::get('/listing/{list}',[ListingController::class,'show']);