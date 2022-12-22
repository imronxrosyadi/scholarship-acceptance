<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterCriteriaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ValueWeightController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('home', [
        "title" => "Scholarship Acceptance",
        "active" => 'scholarship acceptance'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         "active" => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/author/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });



Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
    ]);
});

// Route::get('/login', function () {
//     return view('login', [
//         "title" => "Login",
//         "active" => 'login',
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');







// Route::get('/candidate', [CandidateController::class, 'index']);
// Route::get('/candidate/create', [CandidateController::class, 'create']);
// Route::post('/candidate', [CandidateController::class, 'store']);

Route::resource('/candidate', CandidateController::class);

// Route::get('/criteria', [CriteriaController::class, 'index']);
// Route::get('/criteria/create', [CriteriaController::class, 'create']);
// Route::post('/criteria', [CriteriaController::class, 'store']);

Route::resource('/criteria', MasterCriteriaController::class);

// Route::get('/value-weight', [ValueWeightController::class, 'index']);
// Route::post('/value-weight', [ValueWeightController::class, 'store']);

Route::resource('/value-weight', ValueWeightController::class);
