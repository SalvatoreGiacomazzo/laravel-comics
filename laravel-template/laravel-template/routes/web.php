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

//Grass pokemon
Route::get('/grass', function () {

    $allPokemon = config('db.allPokemon');

    $grassPokemon = array_filter($allPokemon, function ($singlePokemon) {
        return $singlePokemon['typing'] == 'Grass Starter';
    });


    return view('pages.grass', ['allPokemon' => $grassPokemon]);
})->name('grass');


//Fire pokemon
Route::get('/fire', function () {

    $allPokemon = config('db.allPokemon');

    $allPokemon = config('db.allPokemon');

    $firePokemon = array_filter($allPokemon, function ($singlePokemon) {
        return $singlePokemon['typing'] == 'Fire Starter';
    });

    return view('pages.fire', ['allPokemon' => $firePokemon]);
})->name('fire');

//Water pokemon

Route::get('/water', function () {

    $allPokemon = config('db.allPokemon');

    $allPokemon = config('db.allPokemon');

    $waterPokemon = array_filter($allPokemon, function ($singlePokemon) {
        return $singlePokemon['typing'] == 'Water Starter';
    });


    return view('pages.water', ['allPokemon' => $waterPokemon]);
})->name('water');

//Creating a Show

Route::get('/show/{index}', function (string $index) {

    $allPokemon = config('db.allPokemon');
    if (isset($allPokemon[$index])) {

        $singlePokemon = $allPokemon[$index];
    } else {
        abort(404, 'No Pokémon was found!');
    }
    return view('pages.show', compact("singlePokemon"));
})->name('show');
