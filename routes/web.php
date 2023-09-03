<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('app');
// })
// ->name('application');


Route::get('/', function () {
    return view('auth');
})
->name('application');


Route::get('/auth', function () {
    return view('spa');
})
->name('application');


// Route::get('/{any}', 'SpaController@index')->where('any', '.*');