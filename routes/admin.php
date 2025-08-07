<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('dashboard' , [AdminController::class , 'index'])->name('admin-home');
    Route::prefix('countries')->group(function(){
        Route::get( '' , [AdminController::class , 'countryIndex'])->name('admin-countries');
        Route::post( 'insert' , [AdminController::class , 'countryStore'])->name('country-store');
        Route::post( 'update' , [AdminController::class , 'countryUpdate'])->name('country-update');
        Route::post( 'active/{id}' , [AdminController::class , 'countryActive'])->name('country-active');
        Route::post( 'inactive/{id}' , [AdminController::class , 'countryInactive'])->name('country-inactive');
        Route::get('get-countries/{id}', [AdminController::class, 'getCountries']);
    });
    Route::prefix('consults')->group(function(){
        Route::get( '' , [AdminController::class , 'consultAllIndex'])->name('admin-consults');
        Route::get( 'pending' , [AdminController::class , 'consultPendingIndex'])->name('pending-consults');
        Route::get( 'approved' , [AdminController::class , 'consultApprovedIndex'])->name('approved-consults');
        Route::get( 'rejected' , [AdminController::class , 'consultRejectedIndex'])->name('rejected-consults');
        Route::get( 'details/{id}' , [AdminController::class , 'consultDetails'])->name('admin-consult-details');
        Route::post( 'approve/{id}' , [AdminController::class , 'consultApprove'])->name('consult.approve');
        Route::post( 'reject/{id}' , [AdminController::class , 'consultReject'])->name('consult.reject');
        Route::post( 'schedule/{id}' , [AdminController::class , 'consultSchedule'])->name('consult.schedule');
    });
    Route::prefix('services')->group(function(){
        Route::get('', [AdminController::class , 'serviceIndex'])->name('admin-services');
        Route::post('insert', [AdminController::class , 'serviceStore'])->name('services-store');
        Route::post( 'active/{id}' , [AdminController::class , 'serviceActive'])->name('services-active');
        Route::post( 'inactive/{id}' , [AdminController::class , 'serviceInactive'])->name('services-inactive');
    });
    Route::prefix('details')->group(function(){
        Route::get('', [AdminController::class , 'countryDetailsIndex'])->name('admin-country-details');
        Route::post('insert', [AdminController::class , 'serviceStore'])->name('country-details-store');
        Route::post( 'active/{id}' , [AdminController::class , 'serviceActive'])->name('details-active');
        Route::post( 'inactive/{id}' , [AdminController::class , 'serviceInactive'])->name('details-inactive');
    });
});
Route::get('/study-in-{name}', [AdminController::class , 'detailsShow'])->name('country-details');
Route::post('/consult' , [AdminController::class , 'consultRequest'])->name('consultation');
Route::get('/university/details/{name}', [AdminController::class ,'uniDetails'])->name('university.details');