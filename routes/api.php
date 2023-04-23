<?php

use App\Http\Controllers\AgentController;
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

Route::get('/agent', 'AgentController@getAllAgents');
Route::get('/agent/{id}', 'AgentController@getAgent');
Route::post('/agent', [AgentController::class, 'createAgent']);
Route::put('/agent/{id}', 'AgentController@updateAgent');
Route::delete('/agent/{id}','AgentController@deleteAgent');
