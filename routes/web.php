<?php

use Illuminate\Support\Facades\Route;

// Route::get
// ('/', function () {
//     return view('welcome');
// });

Route::get
('/', function () {
    return view('pokerview')->with('version', env('APP_VERSION', '1.0'));
});
