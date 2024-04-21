<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('ticket.index');
});

Route::controller(Controller::class)->prefix('ticket')->group(function(){
    Route::get('','index') ->name('ticket');
    Route::get('create', 'create') ->name('ticket.create');
});


