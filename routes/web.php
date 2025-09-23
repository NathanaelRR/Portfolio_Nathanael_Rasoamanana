<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProjetController;

Route::get('/', function () {
    return redirect()->route('projets.index');
});

Route::resource('projets', ProjetController::class);
