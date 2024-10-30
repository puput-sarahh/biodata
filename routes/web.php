<?php

use App\Http\Controllers\RuteController;
use Illuminate\Support\Facades\RouteController;
use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return view('welcome');
});


//ini adalah Route tanpa MVC
Route::get('/depok', function () {
    return 'ini adalah jalan depok,tanpa MVC';
});

//route menggunakan view
Route::get('/ruteview', function () {
    return view('ruteview');
});

//route menggunaka view & controller
Route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);
    
// Route penggunaan view,Controller & Model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);

// Route pengguna view, Controller, Model & Biodata
Route::get('/rutebiodata', [BiodataController::class, 'menampilkanBiodata']);