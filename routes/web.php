<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PareceristaController;

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


Route::get('/pareceristas/create', [PareceristaController::class, 'create']);
Route::post('/pareceristas', [PareceristaController::class, 'store']);


//Route::get('/pareceristas/create','PareceristaController@create');//rota, controller@metodo 