<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
/*
Route::get('/notes', [PagesController::class, 'index']);
Route::get('/notes/{id}', 'PagesController@show');
Route::get('/notes/create', 'PagesController@create');
Route::get('/notes/{id}/edit', 'PagesController@edit');*/

Route::get('/', function () {
    return view('note.index');
});

Route::get('/notes', function () {
    return view('note.index');
});

Route::get('/notes/create', function () {
    return view('note.create');
});

Route::get('/notes/{id}/edit', function () {
    return view('note.edit');
});

Route::get('/notes/{id}', function () {
    return view('note.show');
});
