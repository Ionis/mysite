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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contacts/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
Route::get('/contacts/userMessages', 'App\Http\Controllers\ContactController@showUserMessages')->name('contact-userMessages');
Route::get('/contacts/userMessages/{id}', 'App\Http\Controllers\ContactController@showOneMessage')->name('contact-oneMessage');
Route::get('/contacts/userMessages/{id}/updateForm', 'App\Http\Controllers\ContactController@showUpdateForm')->name('contact-updateForm');
Route::post('/contacts/userMessages/{id}/updateSave', 'App\Http\Controllers\ContactController@update')->name('contact-update');
Route::post('/contacts/userMessages/{id}/delete', 'App\Http\Controllers\ContactController@delete')->name('contact-delete');
