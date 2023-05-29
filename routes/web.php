<?php

use App\Http\Controllers\ComicController;
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
        'mainlinks' => config('db.mainlinks'),
        'comics' => config('db.comics')
    ];


    /* dd(config('db.mainlinks')); */
    return view('home', $data);
})->name('home');


Route::resource('comics', ComicController::class);















// Route::get('/comic/{id}', function ($id) {
//     $data = [
//         'comics' => config('db.comics'),
//         'mainlinks' => config('db.mainlinks'),
//         'footerlinks' => config('db.footerlinks'),
//         'socials' => config('db.socials'),
//         'headerlinks' => config('db.headerLinks')
//     ];
//     $comics = config('db.comics');
//     if ($id >= 0 && $id < count($comics)) {
//         $comic = $comics[$id];
//         return view('comics.show', $data,  compact('comic'));
//     }
//     /*  dd(config('db.comic')); */
// })->name('comics.show');
