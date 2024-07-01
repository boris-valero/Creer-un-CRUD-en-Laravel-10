<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeubleControlleur;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/meuble', [MeubleControlleur::class, 'liste_meuble']);
