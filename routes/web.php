<?php

use App\Http\Controllers\LikedYouController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudyBuddyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/preference', [PreferenceController::class, 'index'])->name('preference');
Route::get('/likedyou', [LikedYouController::class, 'index'])->name('likedyou');
Route::get('/matches', [MatchesController::class, 'index'])->name('matches');
Route::get('/studybuddy', [StudyBuddyController::class, 'index'])->name('studybuddy');

