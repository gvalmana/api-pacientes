<?php

use App\Http\Controllers\api\v1\PacienteController;
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

Route::middleware('oauth')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/pacientes', PacienteController::class)->middleware('oauth');
Route::post('v1/pacientes/validate',[PacienteController::class,'validate_model']);
Route::post('v1/pacientes/update_multiple',[PacienteController::class,'update_multiple']);
