<?php



Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/plantilla','layouts.plantilla');

Route::view('/clientes','clientes');