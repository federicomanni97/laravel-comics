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
    $products = config('db.comics');
    $advices = config('infos.advices');
    // dd($products);
    return view('home', compact('products'), compact('advices'));
})->name('home');

Route::get('/bonus', function () {
    $products = config('db.comics');
    $advices = config('infos.advices');
    // dd($products);
    return view('pages.bonus', compact('products'), compact('advices'));
})->name('bonus');