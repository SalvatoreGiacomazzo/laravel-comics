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
    $firstStage = [

        [
            'name' =>  'Bulbasaur',
            'typing' =>  'Grass/Poison',
            'region' =>   'Kanto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/bulbasaur.jpg'
        ],
        [
            'name' =>  'Charmander',
            'typing' =>  'Fire',
            'region' =>   'Kanto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/charmander.jpg'
        ],

        [
            'name' =>  'Squirtle',
            'typing' =>  'Water',
            'region' =>   'Kanto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/squirtle.jpg'
        ],
        [
            'name' =>  'Chikorita',
            'typing' =>  'Grass',
            'region' =>   'Johto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/original/large/chikorita-gen2.jpg'
        ],
        [
            'name' =>  'Cyndaquil',
            'typing' =>  'Fire',
            'region' =>   'Johto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/original/large/cyndaquil-gen2.jpg'
        ],
        [
            'name' =>  'Totodile',
            'typing' =>  'Water',
            'region' =>   'Johto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/original/totodile-gen2.jpg'
        ],
        [
            'name' =>  'Treecko',
            'typing' =>  'Grass',
            'region' =>   'Hoenn',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/treecko.jpg'
        ],
        [
            'name' =>  'Torchic',
            'typing' =>  'Fire',
            'region' =>   'Hoenn',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/torchic.jpg'
        ],
        [
            'name' =>  'Mudkip',
            'typing' =>  'Water',
            'region' =>   'Hoenn',
            'imgUrl' => 'https://img.pokemondb.net/artwork/alt/large/mudkip-oras.jpg'
        ],
        [
            'name' =>  'Turtwig',
            'typing' =>  'Grass',
            'region' =>   'Sinnoh',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/turtwig.jpg'
        ],
        [
            'name' =>  'Chimchar',
            'typing' =>  'Fire',
            'region' =>   'Sinnoh',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/chimchar.jpg'
        ],
        [
            'name' =>  'Piplup',
            'typing' =>  'Water',
            'region' =>   'Sinnoh',
            'imgUrl' => 'https://img.pokemondb.net/artwork/alt/large/piplup-platinum.jpg'
        ],

        [
            'name' =>  'Snivy',
            'typing' =>  'Grass',
            'region' =>   'Unima',
            'imgUrl' => 'https://img.pokemondb.net/artwork/snivy.jpg'
        ],
        [
            'name' =>  'Tepig',
            'typing' =>  'Fire',
            'region' =>   'Unima',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/tepig.jpg'
        ],
        [
            'name' =>  'Oshawott',
            'typing' =>  'Water',
            'region' =>   'Unima',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/oshawott.jpg'
        ]

    ];


    return view('pages.page', ['firstStage' => $firstStage]);
})->name('/');

Route::get('/page2', function () {

    $secondStage = [

        [
            'name' =>  'Ivysaur',
            'typing' =>  'Grass/Poison',
            'region' =>   'Kanto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/ivysaur.jpg'
        ],
        [
            'name' =>  'Charmeleon',
            'typing' =>  'Fire',
            'region' =>   'Kanto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/charmeleon.jpg'
        ],

        [
            'name' =>  'Wartortle',
            'typing' =>  'Water',
            'region' =>   'Kanto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/wartortle.jpg'
        ],
        [
            'name' =>  'Bayleef',
            'typing' =>  'Grass',
            'region' =>   'Johto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/bayleef.jpg'
        ],
        [
            'name' =>  'Quilava',
            'typing' =>  'Fire',
            'region' =>   'Johto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/quilava.jpg'
        ],
        [
            'name' =>  'Croconaw',
            'typing' =>  'Water',
            'region' =>   'Johto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/croconaw.jpg'
        ],
        [
            'name' =>  'Grovyle',
            'typing' =>  'Grass',
            'region' =>   'Hoenn',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/grovyle.jpg'
        ],
        [
            'name' =>  'Combusken',
            'typing' =>  'Fire/Fighting',
            'region' =>   'Hoenn',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/combusken.jpg'
        ],
        [
            'name' =>  'Marshtomp',
            'typing' =>  'Water/Ground',
            'region' =>   'Hoenn',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/marshtomp.jpg'
        ],
        [
            'name' =>  'Grotle',
            'typing' =>  'Grass',
            'region' =>   'Sinnoh',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/grotle.jpg'
        ],
        [
            'name' =>  'Monferno',
            'typing' =>  'Fire/Fighting',
            'region' =>   'Sinnoh',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/monferno.jpg'
        ],
        [
            'name' =>  'Prinplup',
            'typing' =>  'Water',
            'region' =>   'Sinnoh',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/prinplup.jpg'
        ],

        [
            'name' =>  'Servine',
            'typing' =>  'Grass',
            'region' =>   'Unima',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/servine.jpg'
        ],
        [
            'name' =>  'Pignite',
            'typing' =>  'Fire/Fighting',
            'region' =>   'Unima',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/pignite.jpg'
        ],
        [
            'name' =>  'Dewott',
            'typing' =>  'Water',
            'region' =>   'Unima',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/dewott.jpg'
        ]

    ];



    return view('pages.page2', ['secondStage' => $secondStage]);
})->name('page2');

Route::get('/page3', function () {

    $thirdStage = [
        [
            'name' => 'Venusaur',
            'typing' => 'Grass/Poison',
            'region' => 'Kanto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/venusaur.jpg'
        ],
        [
            'name' => 'Charizard',
            'typing' => 'Fire/Flying',
            'region' => 'Kanto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/charizard.jpg'
        ],
        [
            'name' => 'Blastoise',
            'typing' => 'Water',
            'region' => 'Kanto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/blastoise.jpg'
        ],
        [
            'name' => 'Meganium',
            'typing' => 'Grass',
            'region' => 'Johto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/meganium.jpg'
        ],
        [
            'name' => 'Typhlosion',
            'typing' => 'Fire',
            'region' => 'Johto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/typhlosion.jpg'
        ],
        [
            'name' => 'Feraligatr',
            'typing' => 'Water',
            'region' => 'Johto',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/feraligatr.jpg'
        ],
        [
            'name' => 'Sceptile',
            'typing' => 'Grass',
            'region' => 'Hoenn',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/sceptile.jpg'
        ],
        [
            'name' => 'Blaziken',
            'typing' => 'Fire/Fighting',
            'region' => 'Hoenn',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/blaziken.jpg'
        ],
        [
            'name' => 'Swampert',
            'typing' => 'Water/Ground',
            'region' => 'Hoenn',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/swampert.jpg'
        ],
        [
            'name' => 'Torterra',
            'typing' => 'Grass/Ground',
            'region' => 'Sinnoh',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/torterra.jpg'
        ],
        [
            'name' => 'Infernape',
            'typing' => 'Fire/Fighting',
            'region' => 'Sinnoh',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/infernape.jpg'
        ],
        [
            'name' => 'Empoleon',
            'typing' => 'Water/Steel',
            'region' => 'Sinnoh',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/empoleon.jpg'
        ],
        [
            'name' => 'Serperior',
            'typing' => 'Grass',
            'region' => 'Unima',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/serperior.jpg'
        ],
        [
            'name' => 'Emboar',
            'typing' => 'Fire/Fighting',
            'region' => 'Unima',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/emboar.jpg'
        ],
        [
            'name' => 'Samurott',
            'typing' => 'Water',
            'region' => 'Unima',
            'imgUrl' => 'https://img.pokemondb.net/artwork/large/samurott.jpg'
        ]
    ];


    return view('pages.page3', ['thirdStage' => $thirdStage]);
})->name('page3');


//Creating a Show

Route::get('/show', function () {

    return view('pages.show');
})->name('show');
