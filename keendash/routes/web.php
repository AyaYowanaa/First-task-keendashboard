<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetEcomerceController;
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
Route::get('testedit',function(){ return view('profile.edit1') ;});



Route::get('/', function () {
    return view('welcome');
});

Route::get('signup',function(){
return view('register');
});
Route::get('/signin',function(){
    return view('login');
    });
Route::get('logout',function(){
        auth()->logout();
        return redirect('register');
    });    
Route::get('/dashboard', function () {
   // return view('dashboard');
   return view('auth.dash');
   
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::resource('ecomerce',SetEcomerceController::class);






require __DIR__.'/auth.php';
