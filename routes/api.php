<?php

use App\Http\Controllers\api\PacienteController;
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

/*Route::get('v1/pacientes',[PacienteController::class,'index']);
Route::get('v1/pacientes/{paciente}',[PacienteController::class,'show'])->name('show');
Route::post('v1/pacientes',[PacienteController::class,'store']);
Route::put('v1/pacientes/{paciente}',[PacienteController::class,'update']);
Route::delete('v1/pacientes/{paciente}',[PacienteController::class,'destroy']);*/

Route::apiResource('v1/pacientes', PacienteController::class);