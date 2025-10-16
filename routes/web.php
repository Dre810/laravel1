<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contacts', function () {
    return view('frontend.contacts');
});

Route::get('/categories', action: [ContactsController::class, 'index']);