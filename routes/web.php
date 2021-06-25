<?php

use App\Http\Controllers\Admin\Generator;
use App\Http\Controllers\Company;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{companyName}/options',[Company::class,'showOptions']);
Route::get('/{companyName}/redirectFBReview',[Company::class,'redirectFBReview']);
Route::get('/{companyName}/redirectGoogleReview',[Company::class,'showOptions']);
Route::get('/{companyName}/showPriceList',[Company::class,'showOptions']);


Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/generate',Generator::class);
});

require __DIR__.'/auth.php';
