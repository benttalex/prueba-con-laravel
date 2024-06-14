<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::post('/login', [HomeController::class, 'store'])->name('login');

Route::get('/register', [ RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [ RegisterController::class, 'store'])->name('register.store');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [ DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/cursos', CourseController::class );

    Route::get('/logout', function (){
        Session::flush();
        Auth::logout();
        return redirect('/');
    })->name('logout');

});
