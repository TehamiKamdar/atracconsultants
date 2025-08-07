<?php

use App\Models\hero;
use App\Models\fields;
use App\Models\country;
use App\Models\services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

require __DIR__."/auth.php";
require __DIR__."/admin.php";

//Web Routes
Route::get('/', function () {
    $countries = country::orderBy('name', 'asc')->where('status', 'active')->get();
    $fields = fields::orderBy('field', 'asc')->get();
    $services = services::where('status', 'active')->get();
    $hero = hero::all();
    // print_r($countries);
    return view('web.index', compact('countries', 'fields', 'services', 'hero'));
})->name('user-home');
Route::get('/about', function(){
    return view('web.about');
})->name('user-about');


Route::get('/blog', function(){
    return view('web.blog');
});
Route::get('/contact', [HomeController::class , 'showContactForm'])->name('contact');

Route::post('/contact', [HomeController::class , 'contact'])->name('contact.submit');



Route::get('/admin/hero', [AdminController::class, 'heroIndex']);
Route::post('/admin/hero', [AdminController::class, 'heroAdd'])->name('hero-add');

Route::get('/404', function(){
    return view('errors.404');
})->name('error-404');

Route::get('/explode',function(){
    $var =
        "Hello Hi How Are You?|I am fine How About You?|Me is good too"
    ;

    $exploded = explode("|", $var);


    return view('test.views', compact('exploded'));
});
