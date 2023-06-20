<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Test\PreConditionFinished;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::put('/players/{id}', [UserController::class, 'update'])->name('players.update');
Route::get('/players/{id}/games', [DiceRollController::class, 'index'])->name('diceroll.index');


// Atributos barrios: 
//     1. Conectividad
//     2. Precios 
//     3. Zonas verdes 
//     4. 