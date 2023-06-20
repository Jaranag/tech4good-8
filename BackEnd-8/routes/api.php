<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Test\PreConditionFinished;
use App\Http\Controllers\Survey;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::put('/players/{id}', [UserController::class, 'update'])->name('players.update');
Route::get('/players/{id}/games', [DiceRollController::class, 'index']);

Route::get('/district/{id}/survey', [SurveyController::class, 'create']);




// Atributos barrios: 
//     1. Conectividad
//     2. Precios 
//     3. Zonas verdes 
//     4. civismo