<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Author\PostController as AuthorPostController;
use App\Http\Controllers\Admin\FavoriteController as AdminFavoriteController;
use App\Http\Controllers\Author\FavoriteController as AuthorFavoriteController;
use App\Http\Controllers\Author\SettingsController as AuthorSettingsController;
use App\Http\Controllers\Admin\SubscriberController as AdminSubscriberController;
use App\Http\Controllers\Author\DashboardController as AuthorDashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/post/{slug}', [PostDetailsController::class, 'details'])->name('post.details');



Route::post('subscribe', [SubscriberController::class, 'store'])->name('subscriber.store');

Route::group(['middleware'=>['auth']], function(){
    Route::post('favorite/{post}/add',[FavoriteController::class, 'makeFavorite'])->name('post.favorite');
});
Route::group(['as'=>'admin.','prefix'=>'admin', 'middleware'=>['auth','admin', 'verified']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('settings', [SettingsController::class, 'index'])->name('settings');
    Route::put('update-profile', [SettingsController::class, 'profileUpdate'])->name('profile.update');
    Route::put('password-update', [SettingsController::class, 'updatePassword'])->name('password.update');
    Route::resource('tag', TagController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);

    // Get Approved Post
    Route::get('pending/post', [PostController::class, 'pending'])->name('post.pending');
    Route::put('post/{id}/approve', [PostController::class, 'approval'])->name('post.approve');

    // Favorite Post
    Route::get('favorites', [AdminFavoriteController::class, 'index'])->name('favorite.index');

    Route::get('subscribers', [AdminSubscriberController::class, 'index'])->name('subscriber.index');
    Route::delete('subscribers/{subscriber}', [AdminSubscriberController::class, 'destroy'])->name('subscriber.destroy');
});

Route::group(['as'=>'author.','prefix'=>'author', 'middleware'=>['auth','author', 'verified']], function () {
    Route::get('dashboard', [AuthorDashboardController::class, 'index'])->name('dashboard');
    Route::get('settings', [AuthorSettingsController::class, 'index'])->name('settings');
    Route::put('update-profile', [AuthorSettingsController::class, 'profileUpdate'])->name('profile.update');
    Route::put('password-update', [AuthorSettingsController::class, 'updatePassword'])->name('password.update');
    Route::get('favorites', [AuthorFavoriteController::class, 'index'])->name('favorite.index');
    Route::resource('post', AuthorPostController::class);
});


// Route::middleware(['auth', 'author', 'verified'])->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
