<?php

use App\Http\Controllers\ContactController;
use App\Livewire\Forms\ContactForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::view('/  ', 'home.home')->name('home');
Route::view('/about', 'about.about')->name('about');
Route::view('/skills', 'skills.skills')->name('skills');
Route::view('/tech-stack', 'tech-stack.tech-stack')->name('tech-stack');
Route::view('/resume', 'resume.resume')->name('resume');
Route::get('/contact', ContactForm::class)->name('contact-form');
Route::get('/contact-json', [ContactController::class, 'index'])->name('contact.json');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume.index');
Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');
