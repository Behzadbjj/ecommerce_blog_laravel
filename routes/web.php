<?php
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CardController;
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
Route::get('/acceuil', function() { return view('acceuil'); })->name('acceuil');

Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');
    
   
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
    Route::get('/pannier', [DashboardController::class, 'index'])
    ->name('pannier');



    Route::get('/cardposts/{post}', [CardController::class, 'store'])->name('cardposts.store');

    Route::resource('cardposts2', CardController::class);
   

    

    Route::resource('userposts', PostController::class);

Route::middleware('admin')->group(function() {

    Route::resource('posts', AdminPostController::class);
});

Route::middleware('auth')->group(function () {
   

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
