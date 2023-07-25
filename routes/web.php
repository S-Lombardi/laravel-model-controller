<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\PageController as PageController;

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

//ROTTE CON CONTROLLER
Route::get('/', [PageController::class,'index']);

Route::get('/products/{comic}',[PageController::class,'recuperoFumetto'])->name('recuperoFumetto');

