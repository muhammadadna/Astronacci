<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        "active" => 'home',
        'role' => Auth::user()->role

    ]);
});
// Route::get('/posts', function () {
//     return view('posts', [
//         'tittle' => 'Posts'
//     ]);
// });

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        "active" => 'about'

    ]);
});

// Route::get('/video', function () {
//     return view('video', [
//         'title' => 'Video',
//         "active" => 'video'

//     ]);
// });

Route::get('/video', [VideoController::class, 'index']);


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);

Route::get('/auth/redirect/fb', [LoginController::class, 'redirectFacebook']);
Route::get('/auth/callback/fb', [LoginController::class, 'handleFacebook']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('/frontend', function() {
    return view('frontend.layout.main');
});
