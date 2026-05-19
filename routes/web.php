<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\SupportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-in', function () {
    return view('auth.sign-in');
})->name('login');

Route::get('/open-account', function () {
    return view('auth.open-account');
})->name('register');

Route::post('/investment-inquiry', [InvestmentController::class, 'submit'])->name('investment.submit');
Route::post('/support-inquiry', [SupportController::class, 'submit'])->name('support.submit');



