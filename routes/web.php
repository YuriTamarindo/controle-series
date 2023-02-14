<?php

use App\Http\Controllers\Seriescontroladas;
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

Route::get('/serie', [Seriescontroladas::class, 'index']);

Route::get('/serie/criar', [Seriescontroladas::class, 'create']);

Route::post('/serie/salvar', [Seriescontroladas::class, 'store']);


