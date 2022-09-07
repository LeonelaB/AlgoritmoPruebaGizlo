<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\numeroPrimo;
use App\Http\Controllers\invertirBits;
use App\Http\Controllers\serieFibonacci;
use App\Http\Controllers\serieNumeroPrimo;
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

    
Route::get('form_numeroPrimo', [numeroPrimo::class, 'index'])->name('numeroPrimo');
Route::post('procesoNumeroPrimo', [numeroPrimo::class, 'procesoNumeroPrimo'])->name('procesoNumeroPrimo');

Route::get('form_serieNumeroPrimo', [serieNumeroPrimo::class, 'index'])->name('serieNumeroPrimo');
Route::post('procesoSerieNumeroPrimo', [serieNumeroPrimo::class, 'procesoSerieNumeroPrimo'])->name('procesoSerieNumeroPrimo');


Route::get('invertirBits', [invertirBits::class, 'index'])->name('invertirBits');
Route::post('procesoInvertirBits', [invertirBits::class, 'procesoInvertirBits'])->name('procesoInvertirBits');

Route::get('serieFibonacci', [serieFibonacci::class, 'index'])->name('serieFibonacci');
Route::post('procesoSerieFibonacci', [serieFibonacci::class, 'procesoSerieFibonacci'])->name('procesoSerieFibonacci');
