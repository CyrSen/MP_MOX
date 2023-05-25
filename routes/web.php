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

Route::get('/', function () {
    return view('index');
});

Route::get('/feedback/{feedbackMapId?}', function () {
    return view('feedback');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/tips/{feedbackMapId?}', function () {
    return view('tips');
});

Route::get('/danke', function () {
    return view('danke');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    
Route::get('/admin', [FeedbackController::class, 'index'])->name('feedback.admin');   
Route::get('/feedback/{feedbackMapId?}', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback/{feedbackMapId?}', [FeedbackController::class, 'store'])->name('feedback.store');
Route::delete('/feedback/{feedbackMap}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
Route::get('/tips/{feedbackMapId?}', [FeedbackController::class, 'createCommentary'])->name('feedback.tips');
Route::post('/tips/{feedbackMapId?}', [FeedbackController::class, 'storeCommentary'])->name('feedback.storeCommentary');
});
