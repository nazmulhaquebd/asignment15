<?php

use App\Http\Controllers\RegistrationController;
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

Route::get('/regestration',[RegistrationController::class,'register']);
Route::get('/home', function () {
    return redirect('/dashboard', 302);
});

Route::middleware(['AuthMiddleware'])->group(function () {
    Route::get('/profile', function () {

    });

    Route::get('/settings', function () {

    });
});

Route::resource('/posts', PostController::class);


Route::get('/',function(){
    return view('welcome');
});

