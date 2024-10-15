<?php

use App\Models\country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Models\fields;

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
    $countries = country::orderBy('country_name', 'asc')->where('status', 'active')->get();
    $fields = fields::orderBy('field', 'asc')->get();
    // print_r($countries);
    return view('web.index', compact('countries', 'fields'));
})->name('user-home');
Route::post('/consult' , [AdminController::class , 'consultRequest'])->name('consultation');



//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('dashboard' , [AdminController::class , 'index'])->name('admin-home');
    Route::prefix('countries')->group(function(){
        Route::get( '' , [AdminController::class , 'countryIndex'])->name('admin-countries');
        Route::post( 'insert' , [AdminController::class , 'countryStore'])->name('country-store');
        Route::post( 'active/{id}' , [AdminController::class , 'countryActive'])->name('country-active');
        Route::post( 'inactive/{id}' , [AdminController::class , 'countryInactive'])->name('country-inactive');
    });
    Route::prefix('consults')->group(function(){
        Route::get( '' , [AdminController::class , 'consultAllIndex'])->name('admin-consults');
        Route::get( 'pending' , [AdminController::class , 'consultPendingIndex'])->name('pending-consults');
        Route::get( 'approved' , [AdminController::class , 'consultApprovedIndex'])->name('approved-consults');
        Route::get( 'rejected' , [AdminController::class , 'consultRejectedIndex'])->name('rejected-consults');
        Route::get( 'details/{id}' , [AdminController::class , 'consultDetails'])->name('admin-consult-details');
        Route::post( 'approve/{id}' , [AdminController::class , 'consultApprove'])->name('consult.approve');
        Route::post( 'reject/{id}' , [AdminController::class , 'consultReject'])->name('consult.reject');
    });
    Route::prefix('services')->group(function(){
        Route::get('', [AdminController::class , 'serviceIndex'])->name('admin-services');
        Route::post('insert', [AdminController::class , 'serviceStore'])->name('services-store');
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
