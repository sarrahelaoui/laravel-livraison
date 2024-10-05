<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});Route::get('/service', function () {
    return view('service');
});Route::get('/project', function () {
    return view('project');
});Route::get('/feature', function () {
    return view('feature');
});Route::get('/order', function () {
    return view('order');
});Route::get('/team', function () {
    return view('team');
});Route::get('/testimonial', function () {
    return view('testimonial');



}); Route::get('/food', function () {
        return view('food');});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/terms', function () {
    return view('terms');
});

Route::get('/support', function () {
    return view('support');
});
Route::get('/ajouter', function () {
    return view('ajouter');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::Post('/ajouter/traitement',[OrderController::class,'ajouter_ordre_traitement']);


require __DIR__.'/auth.php';
