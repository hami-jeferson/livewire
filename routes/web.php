<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('hami', \App\Livewire\PostPage::class);
Route::get('task/{name}', \App\Livewire\TaskComp::class);
