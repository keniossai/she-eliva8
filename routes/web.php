<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Author\DashboardController as AuthorDashboardController;
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

// Route::group(['middleware' => ['auth', 'admin', 'verified']], function (){
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//     Route::get('/author/dashboard', [AuthorDashboardController::class, 'index'])->name('author.dashboard');
// });


Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth', 'admin', 'verified']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth', 'author', 'verified']], function () {
    Route::get('dashboard', [AuthorDashboardController::class, 'index'])->name('dashboard');
});

// Route::middleware(['auth', 'admin', 'verified'])->group(function () {
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/author/dashboard', [AuthorDashboardController::class, 'index'])->name('author.dashboard');
// });

Route::middleware(['auth', 'author', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
