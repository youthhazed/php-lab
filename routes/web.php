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

Route::get('/', function () {
    return view('layout');
});

Route::get('/about', function () {
    return view('main.about');
});

Route::get('/contacts', function () {
     $data = [
        'city' => 'Moscow',
        'street' => 'Semenovskaya',
        'house' => 38, 
     ];
    return view('main.contact', ['data' => $data]);
});
