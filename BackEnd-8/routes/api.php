<?php

use App\Http\Controllers\DistrictController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Test\PreConditionFinished;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ReviewController;
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

Route::get('/district/{id}', [DistrictController::class, 'show']);
Route::post('/district/{id}/survey', [SurveyController::class, 'create']);
Route::post('/district/{id}/review', [ReviewController::class, 'create']);




Route::get('/district/{id}/survey', [SurveyController::class, 'create']);




// Atributos barrios: 
//     1. Conectividad
//     2. Precios 
//     3. Zonas verdes 
//     4. civismo