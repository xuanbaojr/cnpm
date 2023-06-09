<?php
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', [PostsController::class ,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/me', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// post Route
Route::middleware('auth')->group(function () {
    Route::get('/post/create', [PostsController::class, 'create'])->name('post.create');
    Route::post('/post', [PostsController::class, 'store']) ->name('post.store');
    Route::put('/post1/{post}', [PostsController::class, 'update1']) ->name('post1.update');
    Route::delete('/post/{post}', [PostsController::class, 'destroy']) ->name('post.destroy');

});
Route::get('/post/{post}', [PostsController::class, 'show'])->name('post.show');
Route::get('/post/{post}/edit', [PostsController::class, 'edit'])->name('post.edit');
Route::post('/post/{post}', [PostsController::class, 'show'])->name('post.show');

// search Post
Route::post('/post_search', [PostsController::class, 'searchPosts'])->name('search.posts');



Route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile.index');

// Admin
Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/{user}/posts', [AdminController::class, 'showPosts']) ->name('admin.showPosts');
    Route::delete('/user/{user}', [AdminController::class, 'destroy']) ->name('user.destroy');
    Route::delete('/admin/{post}',[AdminController::class, 'destroyPost']) ->name('admin.destroyPost');

});


require __DIR__.'/auth.php';
