<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "nome" => "Antonio",
        "cognome" => "Rossi",
        "indirizzo" => "Via Roma, 7",
        "conoscenze" => [
            "html", "css", "bootstrap", "javascript", "vue", "nodejs", "php", "database", "laravel(poco)"
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');