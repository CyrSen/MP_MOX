<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Auth;

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

/**
 * 
 * Direct routes to pages
 */

// Routes accessible to all users
Route::get('/', function () {
    return view('index');
});

Route::get('/feedback/{feedbackMapId?}', function () {
    return view('feedback');
});

Route::get('/tips/{feedbackMapId?}', function () {
    return view('tips');
});

Route::get('/danke/{feedbackMapId?}', function () {
    return view('danke');
})->name('feedback.danke');

Route::get('/impressum', function () {
    return view('impressum');
});

Auth::routes();
Route::get('/feedback/{feedbackMapId?}', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback/{feedbackMapId?}', [FeedbackController::class, 'store'])->name('feedback.store');
Route::delete('/feedback/{feedbackMap}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
Route::get('/tips/{feedbackMapId?}', [FeedbackController::class, 'createCommentary'])->name('feedback.tips');
Route::post('/tips/{feedbackMapId?}', [FeedbackController::class, 'storeCommentary'])->name('feedback.storeCommentary');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes accessible to level3 and level2 users
Route::middleware(['auth', 'permission:level3,level2'])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    });

    // Other routes
    Route::get('/admin', [FeedbackController::class, 'index'])->name('feedback.admin');

});

// Route accessible to level1, level2, and level3 users
Route::middleware(['auth', 'permission:level1,level2,level3'])->group(function () {
    // Other routes
    // ...
});

