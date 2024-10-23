<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/layout', function () {
    return view('pages.layout');
});


Route::get('/', function () {


    $allPokemon = config('db.allPokemon');




    return view('pages.page', ['allPokemon' => $allPokemon]);
})->name('/');

Route::get('/page2', function () {

    $allPokemon = config('db.allPokemon');


    return view('pages.grass', ['allPokemon' => $allPokemon]);
})->name('grass');

Route::get('/fire', function () {

    $allPokemon = config('db.allPokemon');


    return view('pages.fire', ['allPokemon' => $allPokemon]);
})->name('fire');

Route::get('/water', function () {

    $allPokemon = config('db.allPokemon');


    return view('pages.water', ['allPokemon' => $allPokemon]);
})->name('water');

//Creating a Show

Route::get('/show', function () {

    $allPokemon = config('db');

    return view('pages.show', ['allPokemon' => $allPokemon]);
})->name('show');
