<?php

use App\Models\country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

//Web Routes
Route::get('/', function () {
    $countries = country::all();
    return view('web.index', compact('countries'));
})->name('user-home');
Route::post('/consult' , [AdminController::class , 'consultRequest'])->name('consultation');



//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('dashboard' , [AdminController::class , 'index'])->name('admin-home');
    Route::prefix('countries')->group(function(){
        Route::get( '' , [AdminController::class , 'countryIndex'])->name('admin-countries');
        Route::post( 'insert' , [AdminController::class , 'countryStore'])->name('country-store');
    });
    Route::prefix('consults')->group(function(){
        Route::get( '' , [AdminController::class , 'consultIndex'])->name('admin-consults');
        Route::get( 'details/{id}' , [AdminController::class , 'consultDetails'])->name('admin-consult-details');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role==1){
            return redirect()->route('admin-home');
        }else{
            return redirect()->route('user-home');
        }
    })->name('dashboard');
});
