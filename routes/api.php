<?php

use App\Http\Controllers\CertificateEmisionInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateVariablesConfigController;
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

Route::get('variables', [CertificateVariablesConfigController::class, 'index']);
Route::get('variable/{id}', [CertificateVariablesConfigController::class, 'find']);
Route::post('variables', [CertificateVariablesConfigController::class, 'store']);
Route::put('variable_update/{id}',[CertificateVariablesConfigController::class, 'update']);
Route::delete('variable_delete/{id}',[CertificateVariablesConfigController::class, 'delete']);

Route::get('emision', [CertificateEmisionInfoController::class, 'index']);
Route::get('emision/{id}',[CertificateEmisionInfoController::class, 'find']);
Route::post('emision',[CertificateEmisionInfoController::class, 'store']);
Route::put('emision_update/{id}',[CertificateEmisionInfoController::class, 'update']);
Route::delete('emision_delete/{id}',[CertificateEmisionInfoController::class, 'delete']);
