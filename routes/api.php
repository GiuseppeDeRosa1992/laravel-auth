<?php

use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('projects', [ProjectController::class, 'index']);

//creo rotta per gli ultimi progetti
Route::get('projects/latest', [ProjectController::class, 'latest']);

//creo rotta per i dettagli del progetto
Route::get('projects/{project:slug}', [ProjectController::class, 'show']);
// Route::get('projects/{slug}', [ProjectController::class, 'show']); FUNZIONA UGUALE MA LA SINTASSI PIù GIUSTA è QUELLA SOPRA

//AGGIUNGO LA ROTTA PER  IL FORM DI CONTATTO
Route::post('/contacts', [LeadController::class, 'store']);
