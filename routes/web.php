<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, "index"])->name("home");

Route::group([
    "as" => "blog.",
    "prefix" => "/blog",
], function () {
    Route::get("/nouveau-billet", [BlogController::class, "create"])->name("create");

    Route::get("/nouveau-billet", [BlogController::class, "create"])->name("create");
    Route::get("/submit", [BlogController::class, "submit"])->name("submit");
    Route::get("/{id}", [BlogController::class, "show"])->name("show");
    Route::get("/{id}/edit", [BlogController::class, "edit"])->name("edit");
    Route::get("/{id}/update", [BlogController::class, "update"])->name("update");
    Route::get("/{id}/delete", [BlogController::class, "delete"])->name("delete");
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
