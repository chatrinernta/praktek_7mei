<?php

use Illuminate\Support\Facades\Route;
use App\models\Student;
use App\Http\Controllers\PraktekController;
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

Route::get('/praktek', [PraktekController::class, 'index']);
Route::get('/praktek/create', [PraktekController::class, 'create']);
Route::post('/praktek/create', [PraktekController::class, 'store']);
Route::get('/praktek/{id}/delete', [PraktekController::class, 'delete']);
Route::get('/praktek/{id}/edit', [PraktekController::class,'edit']);
Route::post('/praktek/{id}/edit', [PraktekController::class,'update']);