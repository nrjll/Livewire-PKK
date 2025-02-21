<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts;
    
// route untuk product
Route::get('/products', App\Livewire\Posts\Index::class)->name('product.index');

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
});
