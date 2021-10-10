<?php

use App\Http\Controllers\Methods;
use Illuminate\Support\Facades\Route;

Route::post('/SaveHtml', [Methods::class, 'SaveHtml'])->name('SaveHtml');
Route::post('/passwordControl', [Methods::class, 'passwordControl'])->name('passwordControl');
Route::post('/getcompany', [Methods::class, 'getcompany'])->name('getcompany');


Route::get('/', function () {
    return view('welcome');
});
