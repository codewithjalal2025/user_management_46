<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});


Route::post('login',[LoginController::class,'login']);
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::post('register',[RegisterController::class,'register']);
Route::get('home',[HomeController::class,'index'])->name('home');

Route::prefix('contact/')->group(function (){
    Route::controller(ContactController::class)->group(function(){
        Route::get('list','index')->name('contact.list');
        Route::get('create','create')->name('contact.create');
        Route::post('store','store')->name('contact.store');
        Route::get('edit/{id}','edit')->name('contact.edit');
        Route::post('update/{id}','update')->name('contact.update');
        Route::get('delete/{id}','destroy')->name('contact.delete');
        Route::get('show/{id}','show')->name('contact.show');


    });

});
