<?php

use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\admin\GameController;
use App\Http\Controllers\admin\PlatformController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});



Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    
    Route::get('/', [DashBoardController::class, 'index'])->name('dashboard');
    

    Route::resource('games', GameController::class);
    Route::resource('platforms', PlatformController::class);

    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
