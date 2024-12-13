<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;

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

Route::get('/auth/signup', [AuthController::class,'signup']);
Route::post('/auth/registr', [AuthController::class,'registr']);

Route::resource('articles', ArticleController::class);


Route::get('/', [MainController::class,'index']);
Route::get('galery/{img}/{name}', function($img, $name) {
    return view('main.gallery', ['img'=> $img, 'name'=> $name]);
});

Route::get('/about', function () {
    return view('main/about');
});
Route::get('/contacts', function () {
    $data = [
        'city'=> 'Moscow',
        'street'=> 'Semenovskaya',
        'house'=> 38,
    ];
    return view('main/contact', ['data'=> $data]);
});
