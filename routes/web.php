<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Author\PostController as AuthorPostController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\Admin\FavoriteController as AdminFavoriteController;
use App\Http\Controllers\Author\CommentController as AuthorCommentController;
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
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/post/{slug}', [PostDetailsController::class, 'details'])->name('post.details');

Route::get('/categories', [AllCategoriesController::class, 'categories'])->name('categories');
Route::get('/posts', [AllPostController::class, 'posts'])->name('posts');
Route::post('subscribe', [SubscriberController::class, 'store'])->name('subscriber.store');
Route::get('/category/{slug}', [PostDetailsController::class, 'postByCategory'])->name('category.posts');
Route::get('/tag/{slug}', [PostDetailsController::class, 'postByTag'])->name('tag.posts');
Route::get('profile/{username}', [AuthorProfileController::class, 'index'])->name('author.profile');

// Search Controller
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::group(['middleware'=>['auth']], function(){
    Route::post('favorite/{post}',[FavoriteController::class, 'makeFavorite'])->name('post.favorite');
    Route::post('comment/{post}', [CommentController::class, 'store'])->name('comment.store');
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

    // All author controller
    Route::get('authors', [AuthorController::class, 'index'])->name('author.index');
    Route::delete('authors/{id}', [AuthorController::class, 'destroy'])->name('author.destroy');

    // Get Comments
    Route::get('comments', [AdminCommentController::class, 'index'])->name('comment.index');
    Route::delete('comments/{id}', [AdminCommentController::class, 'destroy'])->name('comment.destroy');

    Route::get('subscribers', [AdminSubscriberController::class, 'index'])->name('subscriber.index');
    Route::delete('subscribers/{subscriber}', [AdminSubscriberController::class, 'destroy'])->name('subscriber.destroy');
});

Route::group(['as'=>'author.','prefix'=>'author', 'middleware'=>['auth','author', 'verified']], function () {
    Route::get('dashboard', [AuthorDashboardController::class, 'index'])->name('dashboard');
    Route::get('settings', [AuthorSettingsController::class, 'index'])->name('settings');
    Route::put('update-profile', [AuthorSettingsController::class, 'profileUpdate'])->name('profile.update');
    Route::put('password-update', [AuthorSettingsController::class, 'updatePassword'])->name('password.update');
    Route::get('favorites', [AuthorFavoriteController::class, 'index'])->name('favorite.index');
    Route::get('comments', [AuthorCommentController::class, 'index'])->name('comment.index');
    Route::delete('comment/{id}', [AuthorCommentController::class, 'destroy'])->name('comment.destroy');
    Route::resource('post', AuthorPostController::class);
});


// Socialite Auth

Route::get('/auth/redirect', function () {});

Route::get('/auth/callback', function () {});

// Route::middleware(['auth', 'author', 'verified'])->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
