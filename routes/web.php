<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\BreakfastController;
use App\Http\Controllers\Back\LunchController;



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
// route for breakfast 
Route::controller(BreakfastController::class)->group(function(){
    Route::get('/breakfast','index')->name('breakfast');
    Route::post('/addbreakfast','addbreakfast')->name('addbreakfast');
    Route::get('/managebreakfast','managebreakfast')->name('managebreakfast');
    Route::get('/activefood/{id}','activefood')->name('activefood');
    Route::get('/inactivefood/{id}','inactivefood')->name('inactivefood');
    Route::get('/deletebreak/{id}','deletebreak')->name('deletebreak');
    Route::get('/updatebreak/{id}','updatebreak')->name('updatebreak');
    Route::post('/updatesavebreak/{id}','updatesavebreak')->name('updatesavebreak');

});

// route for the lunch controller 
Route::controller(LunchController::class)->group(function(){
    Route::get('/lunch','lunch')->name('lunch');
    Route::post('/addlunchitem','addlunchitem')->name('addlunchitem');
    Route::get('/managelunch','managelunch')->name('managelunch');
    Route::get('/activelunch/{id}','activelunch')->name('activelunch');
    Route::get('/inactivelunch/{id}','inactivelunch')->name('inactivelunch');
    Route::get('/deletelunch/{id}','deletelunch')->name('deletelunch');
});
// for admin 
Route::get('/adminlogout',[AdminController::class,'destroy'])->name('Back.Adminlogout');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Back.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
