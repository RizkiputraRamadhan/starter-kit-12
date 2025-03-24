<?php

use Livewire\Volt\Volt;
use App\Livewire\ProjectList;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TrackAnalytic;
use App\Http\Controllers\FollowersController;

// Public routes
Route::group(['prefix' => '/', 'middleware' => TrackAnalytic::class], function () {
    Route::view('/', 'livewire.pages.client.home')->name('home');
    Route::view('/about', 'livewire.pages.client.about')->name('about');
    Route::view('/contact', 'livewire.pages.client.contact')->name('contact');
    Route::view('/education', 'livewire.pages.client.education')->name('education');
    Route::view('/experience', 'livewire.pages.client.experience')->name('experience');
    Route::view('/skills', 'livewire.pages.client.skills')->name('skills');
    Route::view('/project', 'livewire.pages.client.project')->name('project');
    Route::post('/follow', [FollowersController::class, 'save'])->name('follow');
});

// Routes with 'auth' and 'verified' middleware
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    Route::get('project-list', ProjectList::class)->name('project.list');
    Route::view('data', 'livewire.pages.client.data')->name('data');
});


require __DIR__ . '/auth.php';
