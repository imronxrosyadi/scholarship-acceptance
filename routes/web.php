<?php

use App\Http\Controllers\AlternativeComparisonController;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\CriteriaComparisonController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ValueWeightController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\CriteriaComparison;

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

Route::resource('/alternative', AlternativeController::class);

// Route::get('/criteria', [CriteriaController::class, 'index']);
// Route::get('/criteria/create', [CriteriaController::class, 'create']);
// Route::post('/criteria', [CriteriaController::class, 'store']);

Route::resource('/criteria', CriteriaController::class);

// Route::get('/value-weight', [ValueWeightController::class, 'index']);
// Route::post('/value-weight', [ValueWeightController::class, 'store']);

Route::resource('/value-weight', ValueWeightController::class);

Route::prefix('/calculate')->group(function () {
    Route::get('/criteria-comparison', [CriteriaComparisonController::class, 'index']);
    // Route::resource('/criteria-comparison', CriteriaComparisonController::class);
    Route::post('/criteria-comparison', [CriteriaComparisonController::class, 'store'])->name('criteria-comparison.store');

    Route::get('/alternative-comparison', [AlternativeComparisonController::class, 'index']);
    Route::get('/alternative-comparison/{id}', [AlternativeComparisonController::class, 'show']);
    Route::post('/alternative-comparison', [AlternativeComparisonController::class, 'store'])->name('alternative-comparison.store');
    // Route::post('/criteria-comparison', [CalculateController::class, 'storeCriteriaComparisons']);
    // Route::get('/alternative-comparison', [CalculateController::class, 'alternativeComparisons']);
    // Route::post('/alternative-comparison', [CalculateController::class, 'storeAlternativeComparisons']);
    // Route::get('/result', [CalculateController::class, 'result']);

});


