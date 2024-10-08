<?php

use App\Http\Controllers\pemain_mu;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pemain', [pemain_mu::class,
'index']);
