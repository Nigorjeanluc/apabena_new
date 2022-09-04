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
    return view('pages.index');
});

Route::get('/carpentry', function () {
    return view('pages.carp');
});

Route::get('/bakery', function () {
    return view('pages.bak');
});

Route::get('/accomodation', function () {
    return view('pages.acco');
});

Route::get('/administration', function () {
    return view('pages.admin');
});

Route::get('/more', function () {
    return view('pages.more');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/support', function () {
    return view('pages.support');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
