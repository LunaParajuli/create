<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/form', function () {
        return view('form');
    })->name('form');
    Route::get('/nextform', function () {
        return view('nextform');
    })->name('nextform');
});

Route::post('/dashboard', [App\Http\Controllers\formController::class, 'store'])->name('nextform.store');


Route::get('/name', [App\Http\Controllers\formController::class, 'name'])->name('name');
