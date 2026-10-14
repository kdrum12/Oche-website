<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/ministries', [PageController::class, 'ministries'])->name('ministries');
Route::get('/sermons', [PageController::class, 'sermons'])->name('sermons');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/donations', [PageController::class, 'donations'])->name('donations');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Interactive Form Submissions
Route::post('/contact/submit', [PageController::class, 'submitContact'])->name('contact.submit');
Route::post('/newsletter/subscribe', [PageController::class, 'subscribeNewsletter'])->name('newsletter.subscribe');
Route::post('/events/rsvp', [PageController::class, 'rsvpEvent'])->name('events.rsvp');
Route::post('/donations/process', [PageController::class, 'processDonation'])->name('donations.process');
