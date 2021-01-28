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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/cardetails','ui\screens\cardetails');
Route::view('/contact','ui\screens\contactpage');
Route::view('/homepage','ui\screens\homepage');
Route::view('/service','ui\screens\service');
Route::view('/about','ui\screens\about');
Route::view('/bike','ui\screens\bikes');