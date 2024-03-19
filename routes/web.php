<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('base');


Route::group(['prefix' => 'tags'], function() {
    Route::get('/', App\Http\Controllers\Tag\IndexController::class)->name('tag.index');
    Route::get('/create', App\Http\Controllers\Tag\CreateController::class)->name('tag.create');
    Route::post('/', App\Http\Controllers\Tag\StoreController::class)->name('tag.store');
    Route::get('/{tag}/edit', App\Http\Controllers\Tag\EditController::class)->name('tag.edit');
    Route::get('/{tag}', App\Http\Controllers\Tag\ShowController::class)->name('tag.show');
    Route::patch('/{tag}', App\Http\Controllers\Tag\UpdateController::class)->name('tag.update');
    Route::delete('/{tag}', App\Http\Controllers\Tag\DeleteController::class)->name('tag.delete');
});

Route::group(['prefix' => 'users'], function() {
    Route::get('/', App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create', App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/', App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{user}/edit', App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::get('/{user}', App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::patch('/{user}', App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', App\Http\Controllers\User\DeleteController::class)->name('user.delete');
});

Route::group(['prefix' => 'books'], function() {
    Route::get('/', App\Http\Controllers\Book\IndexController::class)->name('book.index');
    Route::get('/create', App\Http\Controllers\Book\CreateController::class)->name('book.create');
    Route::post('/', App\Http\Controllers\Book\StoreController::class)->name('book.store');
    Route::get('/{book}/edit', App\Http\Controllers\Book\EditController::class)->name('book.edit')->middleware('auth','can:modify-post,book');
    Route::get('/{book}', App\Http\Controllers\Book\ShowController::class)->name('book.show');
    Route::patch('/{book}', App\Http\Controllers\Book\UpdateController::class)->name('book.update')->middleware('auth','can:modify-post,book');
    Route::delete('/{book}', App\Http\Controllers\Book\DeleteController::class)->name('book.delete')->middleware('auth','can:modify-post,book');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
